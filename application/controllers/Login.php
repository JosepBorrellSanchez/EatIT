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
    $this->form_validation->set_rules('login-email' ,'Email', 'required');
    $this->form_validation->set_rules('login-password' ,'Password', 'required|callback_verifica');
    if($this->form_validation->run() == false)
        {
          $this->load->view('login');
        }
        else
        {
          die();
            redirect('eatit/index');
        }
  }

  public function verifica()
    {
        $email = $this->input->post('login-email');
        $password = $this->input->post('login-password');

        var_dump($password);
        //die();
        //$password_hash = password_hash($password, PASSWORD_BCRYPT);
        if($this->login_model->index($email, $password))
        {
            redirect('Comanda');
        }
        else
        {
            $this->form_validation->set_message('verifica','Contraseña incorrecta');
            redirect('login');
        }
    }

}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */