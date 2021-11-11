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

  public function categoria($id_categoria)
  {
    
    $data['productes'] = $this->Producte_model->getAllProductesCategoria($id_categoria);
    $data['categories'] = $this->Category_model->get_all_categories();
    $this->load->view('shop-2', $data);
  }

  public function producte ($id_producte){
    $data['producte'] = $this->Producte_model->get_producte($id_producte);
    $this->load->view('detall_producte', $data);
  }

  public function add($id_producte){
    $producte= $this->Producte_model->get_producte($id_producte);
    $data = array(
      'id'      => $producte['id'],
      'qty'     => 1,
      'price'   => $producte['preu'],
      'img'     => $producte['miniatura'],
      'name'    => $producte['nom'],
      'sku'     => $producte['sku'],
    );
    

   $this->cart->insert($data);
   
   //var_dump($this->cart->contents());
   //$this->cart->destroy();
   //die();
   redirect('botiga');
  }

  public function remove($rowid){

    $this->cart->remove($rowid);
    redirect('botiga');
}


  public function finalitza(){
    $this->load->view('checkout-1', $this->cart->contents());
  }

  public function comingSoon(){
    $this->load->view('coming-soon');
  }

  public function gracies(){
    $this->load->view('gracies');
  }

}


/* End of file Botiga.php */
/* Location: ./application/controllers/Botiga.php */