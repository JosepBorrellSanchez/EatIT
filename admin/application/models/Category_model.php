<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Categories_model
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

class Category_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

  function get_category($id)
  {
      return $this->db->get_where('categories',array('id'=>$id))->row_array();
  }
      
  /*
   * Get all categories
   */
  function get_all_categories()
  {
      $this->db->order_by('id', 'desc');
      return $this->db->get('categories')->result_array();
  }
      
  /*
   * function to add new category
   */
  function add_category($params)
  {
      $this->db->insert('categories',$params);
      return $this->db->insert_id();
  }
  
  /*
   * function to update category
   */
  function update_category($id,$params)
  {
      $this->db->where('id',$id);
      return $this->db->update('categories',$params);
  }
  
  /*
   * function to delete category
   */
  function delete_category($id)
  {
      return $this->db->delete('categories',array('id'=>$id));
  }

}

/* End of file Categories_model.php */
/* Location: ./application/models/Categories_model.php */