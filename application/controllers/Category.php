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

class Category extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
      $data['user'] = $this->session->userdata('logged_in');
      $data['categories'] = $this->Category_model->get_all_categories();
      
    $this->load->view('page_ecom_orders', $data);
  }

  /*
   * Adding a new category
   */
  function add()
  {   
      if(isset($_POST) && count($_POST) > 0)     
      {   
          $params = array(
      'nom' => $this->input->post('nom'),
      'descripcio' => $this->input->post('descripcio'),
      'imatge' => $this->input->post('imatge'),
      'miniatura' => $this->input->post('miniatura'),
          );
          
          $category_id = $this->Category_model->add_category($params);
          redirect('category/index');
      }
      else
      {            
          $data['_view'] = 'category/add';
          $this->load->view('layouts/main',$data);
      }
  }  

  /*
   * Editing a category
   */
  function edit($id)
  {   
      // check if the category exists before trying to edit it
      $data['category'] = $this->Category_model->get_category($id);
      
      if(isset($data['category']['id']))
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
              redirect('category/index');
          }
          else
          {
              $data['_view'] = 'category/edit';
              $this->load->view('layouts/main',$data);
          }
      }
      else
          show_error('The category you are trying to edit does not exist.');
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
          redirect('category/index');
      }
      else
          show_error('The category you are trying to delete does not exist.');
  } 

}


/* End of file Category.php */
/* Location: ./application/controllers/Category.php */