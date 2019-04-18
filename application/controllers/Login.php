<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
    parent::__construct();
    $this->load->model('login_model','m_login');
    $this->load->helper('url');
  }

 public function index()
 {
  $this->load->view('header');
  $this->load->view('login_view');
  $this->load->view('footer');
 }


 public function index_register()
 {

  $this->load->view('header');
      $this->load->view('aside');
  $this->load->view('form_register');
  $this->load->view('footer');
 }

 public function go(){
  
  if(isset($this->session->userdata['logged_in'])){
      $this->load->view('home.php');
    }
    $data = array(
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password')
    );
    $result = $this->m_login->login($data);
    if ($result != FALSE) {
        $session_data = $result[0]->email;
        $this->session->set_userdata('logged_in', $session_data);
        redirect(base_url());
    } else {
      $data['message_display'] =  'Invalid Username or Password';
      $this->load->view('header');
      $this->load->view('Login_view', $data);
      $this->load->view('footer');
    }
 }

 public function do_logout() 
 {
  $this->session->sess_destroy();
  redirect(base_url());
 }

}