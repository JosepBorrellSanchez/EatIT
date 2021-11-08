<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Comanda_model
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

class Comanda_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get comanda by id
     */
    function get_comanda($id)
    {
        return $this->db->get_where('comandes',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all comandes
     */
    function get_all_comandes()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('comandes')->result_array();
    }
        
    /*
     * function to add new comanda
     */
    function add_comanda($params)
    {
        $this->db->insert('comandes',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update comanda
     */
    function update_comanda($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('comandes',$params);
    }
    
    /*
     * function to delete comanda
     */
    function delete_comanda($id)
    {
        return $this->db->delete('comandes',array('id'=>$id));
    }
}

/* End of file Comanda_model.php */
/* Location: ./application/models/Comanda_model.php */