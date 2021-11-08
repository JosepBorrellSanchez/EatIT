<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Botiga
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

class Botiga extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Producte_model');
    $this->load->model('Category_model');
    $this->load->helper('url');
    $this->load->library('cart');
  }

  public function index()
  {
    
    $data['productes'] = $this->Producte_model->getAllProductes();
    $data['categories'] = $this->Category_model->get_all_categories();
    $this->load->view('shop-2', $data);
  }

  public function add($id_producte){
    $producte= $this->Producte_model->get_producte($id_producte);
    $data = array(
      'id'      => $producte['id'],
      'qty'     => 1,
      'price'   => $producte['preu'],
      'name'    => $producte['nom']
    );

   $this->cart->insert($data);
   
   var_dump($this->cart->contents());
   //$this->cart->destroy();
   die();
   redirect('botiga');
  }

}


/* End of file Botiga.php */
/* Location: ./application/controllers/Botiga.php */