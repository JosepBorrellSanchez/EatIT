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
      $this->load->library('cart');
  } 


  function add($id_comanda)
  {   

    foreach($this->cart->contents() as $items){ 
        
      $params = array(
      'id_comanda' => $id_comanda,
      'id_producte' => $items['id'],
      'preu' => $items['price'],
      'descompte' => 0,
      'quantitat' => $items['qty'],
      'sku' => $items['sku']
       );
          $detallscomanda_id = $this->Detallscomanda_model->add_detallscomanda($params);
    }
    $this->cart->destroy();
          redirect('botiga/gracies');
  }  

  /*
   * Editing a detallscomanda
   */
  
}

/* End of file Detallscomanda.php */
/* Location: ./application/controllers/Detallscomanda.php */