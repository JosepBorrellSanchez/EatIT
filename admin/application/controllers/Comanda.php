<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Comanda
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

class Comanda extends CI_Controller{
  function __construct()
  {
      parent::__construct();
      $this->load->model('Comanda_model');
      $this->load->model('Detallscomanda_model');
  } 

  /*
   * Listing of comandes
   */
  function index()
  {
      $data['comandes'] = $this->Comanda_model->get_all_comandes();
      $data['user'] = $this->session->userdata('logged_in');
      $data['_view'] = 'comanda/index';
      $this->load->view('page_ecom_orders',$data);
  }

  /*
   * Adding a new comanda
   */
  function add()
  {   
      if(isset($_POST) && count($_POST) > 0)     
      {   
          $params = array(
      'id_client' => $this->input->post('id_client'),
      'preuTotal' => $this->input->post('preuTotal'),
      'data' => $this->input->post('data'),
      'estat' => $this->input->post('estat'),
      'enviament' => $this->input->post('enviament'),
      'facturacio' => $this->input->post('facturacio'),
          );
          
          $comanda_id = $this->Comanda_model->add_comanda($params);
          redirect('comanda/index');
      }
      else
      {            
          $data['_view'] = 'comanda/add';
          $this->load->view('layouts/main',$data);
      }
  }  

  /*
   * Editing a comanda
   */
  function veure($id)
  {   
      // check if the comanda exists before trying to edit it
      $data['comanda'] = $this->Comanda_model->get_comanda($id);
      $data['detallscomanda'] = $this->Detallscomanda_model->get_detallscomanda($id);
      $data['user'] = $this->session->userdata('logged_in');
      
      //var_dump($data['detallscomanda']);
      //die();
      if(isset($data['comanda']['id']))
      {
        $data['_view'] = 'comanda/veure';
        $this->load->view('page_ecom_order_view',$data);
      }
      else
          show_error('The comanda you are trying to edit does not exist.');
  } 

  /*
   * Deleting comanda
   */
  function remove($id)
  {
      $comanda = $this->Comanda_model->get_comanda($id);

      // check if the comanda exists before trying to delete it
      if(isset($comanda['id']))
      {
          $this->Comanda_model->delete_comanda($id);
          redirect('comanda/index');
      }
      else
          show_error('The comanda you are trying to delete does not exist.');
  }
  
}


/* End of file Comanda.php */
/* Location: ./application/controllers/Comanda.php */