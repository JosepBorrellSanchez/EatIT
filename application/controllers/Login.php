<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Login

 *
 */

class Login extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    //carrega vista
    $this->load->view('login');
  }

}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */