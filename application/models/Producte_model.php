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

class Producte_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  // ------------------------------------------------------------------------

  function get_producte($id)
    {
        return $this->db->get_where('productes',array('id'=>$id))->row_array();
    }
    
  public function getAllProductes(){
      $productes=$this->db->get('productes');
      return $productes->result();
  }
  public function getAllProductesActius(){
    $this->db->where('actiu',1);
    $productes=$this->db->get('productes');
    return $productes->result();
}

  public function getAllProductesCategoria($id_categoria){
    $this->db->where('id_categoria',$id_categoria);
    $this->db->where('actiu',1);
    $productes=$this->db->get('productes');
    return $productes->result();
}

  public function newProducte($params){
    $this->db->insert('productes',$params);
        return $this->db->insert_id();

}

function update_producte($id,$params)
{
    $this->db->where('id',$id);
    return $this->db->update('productes',$params);
}

/*
 * function to delete producte
 */
function delete_producte($id)
{
    return $this->db->delete('productes',array('id'=>$id));
}



  // ------------------------------------------------------------------------

}

/* End of file Productes_model.php */
/* Location: ./application/models/Productes_model.php */