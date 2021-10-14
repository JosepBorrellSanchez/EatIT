<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Productes_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Productes_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  public function getAllProductes(){
      $productes=$this->db->get('productes');
      var_dump($productes->result());
      die();
      return $productes;
  }

  // ------------------------------------------------------------------------

}

/* End of file Productes_model.php */
/* Location: ./application/models/Productes_model.php */