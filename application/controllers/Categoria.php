<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Category
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Categoria extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
      $data['user'] = $this->session->userdata('logged_in');
      $data['categories'] = $this->Category_model->get_all_categories();
      
    $this->load->view('page_ecom_categories', $data);
  }

  /*
   * Adding a new category
   */
  function add()
  {   
    if($this->session->userdata('logged_in'))
    {

      $data['user'] = $this->session->userdata('logged_in');
      $data['categories'] = $this->Category_model->get_all_categories();

        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
        'nom' => $this->input->post('nom'),
        'descripcio' => $this->input->post('descripcio'),
        'imatge' => $this->input->post('imatge'),
        'miniatura' => $this->input->post('miniatura'),
            );
            
            $category_id = $this->Category_model->add_category($params);
            redirect('categoria/index');
        }
        else
        {            
            $data['_view'] = 'category/add';
            $this->load->view('page_ecom_category_add',$data);
        }
    }
    else
    {
        redirect('login');
    } 
  }  

  /*
   * Editing a category
   */
  function edit($id)
  {   
    if($this->session->userdata('logged_in'))
    {

      $data['user'] = $this->session->userdata('logged_in');
      $data['categories'] = $this->Category_model->get_all_categories();
        // check if the category exists before trying to edit it
        $data['categoria'] = $this->Category_model->get_category($id);
        
        if(isset($data['categoria']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
            'nom' => $this->input->post('nom'),
            'descripcio' => $this->input->post('descripcio'),
            'imatge' => $this->input->post('imatge'),
            'miniatura' => $this->input->post('miniatura'),
                );

                $this->Category_model->update_category($id,$params);            
                redirect('categoria/index');
            }
            else
            {
                $data['_view'] = 'categoria/edit';
                $this->load->view('page_ecom_categoria_edit',$data);
            }
        }
        else
            show_error('La categoria no existeix. :(');
    }

        else
        {
            redirect('login');
        }     

  } 

  /*
   * Deleting category
   */
  function remove($id)
  {
      $category = $this->Category_model->get_category($id);

      // check if the category exists before trying to delete it
      if(isset($category['id']))
      {
          $this->Category_model->delete_category($id);
          redirect('categoria/index');
      }
      else
          show_error('La categoria no existeix.');
  } 

}


/* End of file Category.php */
/* Location: ./application/controllers/Category.php */