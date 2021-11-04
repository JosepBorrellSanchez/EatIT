<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Detallscomanda
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
class Detallscomanda extends CI_Controller{
  function __construct()
  {
      parent::__construct();
      $this->load->model('Detallscomanda_model');
  } 

  /*
   * Listing of detallscomandes
   */
  function index()
  {
      $data['detallscomandes'] = $this->Detallscomanda_model->get_all_detallscomandes();
      
      $data['_view'] = 'detallscomanda/index';
      $this->load->view('layouts/main',$data);
  }

  /*
   * Adding a new detallscomanda
   */
  function add()
  {   
      if(isset($_POST) && count($_POST) > 0)     
      {   
          $params = array(
      'id_comanda' => $this->input->post('id_comanda'),
      'id_producte' => $this->input->post('id_producte'),
      'preu' => $this->input->post('preu'),
      'descompte' => $this->input->post('descompte'),
      'quantitat' => $this->input->post('quantitat'),
      'sku' => $this->input->post('sku'),
          );
          
          $detallscomanda_id = $this->Detallscomanda_model->add_detallscomanda($params);
          redirect('detallscomanda/index');
      }
      else
      {            
          $data['_view'] = 'detallscomanda/add';
          $this->load->view('layouts/main',$data);
      }
  }  

  /*
   * Editing a detallscomanda
   */
  function edit($id)
  {   
      // check if the detallscomanda exists before trying to edit it
      $data['detallscomanda'] = $this->Detallscomanda_model->get_detallscomanda($id);
      
      if(isset($data['detallscomanda']['id']))
      {
          if(isset($_POST) && count($_POST) > 0)     
          {   
              $params = array(
        'id_comanda' => $this->input->post('id_comanda'),
        'id_producte' => $this->input->post('id_producte'),
        'preu' => $this->input->post('preu'),
        'descompte' => $this->input->post('descompte'),
        'quantitat' => $this->input->post('quantitat'),
        'sku' => $this->input->post('sku'),
              );

              $this->Detallscomanda_model->update_detallscomanda($id,$params);            
              redirect('detallscomanda/index');
          }
          else
          {
              $data['_view'] = 'detallscomanda/edit';
              $this->load->view('layouts/main',$data);
          }
      }
      else
          show_error('The detallscomanda you are trying to edit does not exist.');
  } 

  /*
   * Deleting detallscomanda
   */
  function remove($id)
  {
      $detallscomanda = $this->Detallscomanda_model->get_detallscomanda($id);

      // check if the detallscomanda exists before trying to delete it
      if(isset($detallscomanda['id']))
      {
          $this->Detallscomanda_model->delete_detallscomanda($id);
          redirect('detallscomanda/index');
      }
      else
          show_error('The detallscomanda you are trying to delete does not exist.');
  }
  
}

/* End of file Detallscomanda.php */
/* Location: ./application/controllers/Detallscomanda.php */