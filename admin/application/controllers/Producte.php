<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Productes
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

class Producte extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Producte_model');
    $this->load->model('Category_model');
  }

  public function index()
  {
    // 
    $data['user'] = $this->session->userdata('logged_in');
    $data['productes'] = $this->Producte_model->getAllProductes();
   // die();
    $this->load->view('page_ecom_products', $data);
  }

  public function add(){
    $data['user'] = $this->session->userdata('logged_in');
    $data['categories'] = $this->Category_model->get_all_categories();
    //var_dump($data['categories']);
    //die();
    if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
              'actiu' => $this->input->post('actiu'),
              'nom' => $this->input->post('nom'),
              'preu' => $this->input->post('preu'),
              'id_categoria' => $this->input->post('id_categoria'),
              'data_creacio' => date("Y-m-d"),
              'sku' => $this->input->post('sku'),
              'descripcio' => $this->input->post('descripcio'),
              'imatge' => $this->input->post('imatge'),//$this->input->post('imatge'),
              'miniatura' => $this->input->post('miniatura')//$this->input->post('miniatura'),
            );
            
            $producte_id = $this->Producte_model->newProducte($params);
            redirect('producte/index');
        }
        else
        {            
            $data['_view'] = 'producte/add';
            $this->load->view('page_ecom_product_add', $data);
        }
  }

  function edit($id)
    {   
        $data['user'] = $this->session->userdata('logged_in');
        $data['producte'] = $this->Producte_model->get_producte($id);
        $data['categories'] = $this->Category_model->get_all_categories();
        
        if(isset($data['producte']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $actiu = $this->input->post('actiu');
                if($this->input->post('actiu')=="on"){
                  $actiu = 1;
                }
                else{
                  $actiu=0;
                }
                $params = array(
                'actiu' => $actiu,
                'nom' => $this->input->post('nom'),
                'preu' => $this->input->post('preu'),
                'id_categoria' => $this->input->post('id_categoria'),
                'sku' => $this->input->post('sku'),
                'descripcio' => $this->input->post('descripcio'),
                'imatge' => $this->input->post('imatge'),//$this->input->post('imatge'),
                'miniatura' => $this->input->post('miniatura')//$this->input->post('miniatura'),
                );
                $this->Producte_model->update_producte($id,$params);            
                redirect('producte/index');
            }
            else
            {
                $data['_view'] = 'producte/edit';
                $this->load->view('page_ecom_product_edit',$data);
            }
        }
        else
            show_error('El producte no existeix :( .');
    } 

    /*
     * Deleting producte
     */
    function remove($id)
    {
        $producte = $this->Producte_model->get_producte($id);

        // check if the producte exists before trying to delete it
        if(isset($producte['id']))
        {
            $this->Producte_model->delete_producte($id);
            redirect('producte/index');
        }
        else
            show_error('The producte you are trying to delete does not exist.');
    }




}


/* End of file Productes.php */
/* Location: ./application/controllers/Productes.php */