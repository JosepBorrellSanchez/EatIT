<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Principal
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

class Principal extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

    public function index()
    {
      if($this->session->userdata('logged_in'))
      {
        $data['user'] = $this->session->userdata('logged_in');
        $this->load->view('page_ecom_dashboard', $data);
      }
      else
      {
        //If no session, redirect to login page
        redirect('login', 'refresh');
      }
    }

    public function comingSoon(){
      $data['user'] = $this->session->userdata('logged_in');
      $this->load->view('coming_soon', $data);
    }

    function logout()
    //es carrega la sessió.
    {
      $this->session->unset_userdata('logged_in');
      session_destroy();
      redirect('home', 'refresh');
    }
}


/* End of file Principal.php */
/* Location: ./application/controllers/Principal.php */