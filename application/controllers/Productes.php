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

class Productes extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Productes_model');
  }

  public function index()
  {
    // 
    $data['user'] = $this->session->userdata('logged_in');
    $data['productes'] = $this->Productes_model->getAllProductes();
    var_dump($data);
   // die();
    $this->load->view('page_ecom_products', $data);
  }

  public function crear(){
    $this->load->view('page_ecom_product_edit', $data);
  }

  public function afegir(){
  }

}


/* End of file Productes.php */
/* Location: ./application/controllers/Productes.php */