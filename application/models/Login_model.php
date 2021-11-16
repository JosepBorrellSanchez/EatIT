<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Login_model
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

class Login_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index($email,$password)
  {
    $query = $this->db->get_where('usuaris', array('email' => $email));
        if($query->num_rows() == 1)
        {
          $row=$query->row();
            if(password_verify($password, $row->password))
            {              
                $data=array(
                    'nom'=>$row->nom,
                    'id'=>$row->id,
                    'email'=>$row->email
                );
                $this->session->set_userdata('logged_in',$data);
                return true;
            }
        }
        $this->session->unset_userdata('user_data');
        return false;
  }

  // ------------------------------------------------------------------------

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */