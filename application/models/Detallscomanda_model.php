<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Detallscomanda_model
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

class Detallscomanda_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get detallscomanda by id
     */
    function get_detallscomanda($id_comanda)
    {
        return $this->db->get_where('detallscomandes',array('id_comanda'=>$id_comanda))->result();
    }
        
    /*
     * Get all detallscomandes
     */
    function get_all_detallscomandes()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('detallscomandes')->result_array();
    }
        
    /*
     * function to add new detallscomanda
     */
    function add_detallscomanda($params)
    {
        $this->db->insert('detallscomandes',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update detallscomanda
     */
    function update_detallscomanda($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('detallscomandes',$params);
    }
    
    /*
     * function to delete detallscomanda
     */
    function delete_detallscomanda($id)
    {
        return $this->db->delete('detallscomandes',array('id'=>$id));
    }
}

/* End of file Detallscomanda_model.php */
/* Location: ./application/models/Detallscomanda_model.php */