<?php

$firstNameUser = null;
$lastNameUser = null;
$uidUser = null;
$emailUser = null;
$displayLoginUser = null;
$isLoggedUser = null;

class User extends CI_Controller
{
  public $session_data;

  public function __construct()
  {
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('login_model');
  }

  public function login(){
    if($this->session->login == 'true'){
      redirect('/');
    }
    $this->load->view('templates/header');
    $this->load->view('templates/menu');
    $this->load->view('pages/login');
    $this->load->view('templates/footer');
  }

  public function login_post(){
    $uid = $this->input->post('uid');
    $pwd = $this->input->post('pwd');

    $this->form_validation->set_rules('uid', 'Login', 'required');
    $this->form_validation->set_rules('pwd', 'Hasło', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $this->login();
    }
    else
    {
      if($this->login_model->login_user($uid, $pwd) == true)
      {
        /*
        $val = $this->login_model->get_user_info($uid);
        $this->session->set_userdata($val[0]);
        $this->session->set_userdata('login', 'true');
        redirect('login');
        */

        $result = $this->login_model->read_user_information($uid);
        if ($result != false) {
          $session_data = array(
          'first_name' => $result[0]->first_name,
          'last_name' => $result[0]->last_name,
          'uid' => $result[0]->uid,
          'email' => $result[0]->email,
          'display_login' => $result[0]->display_login,
          'logged_in' => TRUE
          );
          // Dodanie informacji o użytkowniku do sesji
          $this->session->set_userdata($session_data);

          // Uzupełnienie zmiennych globalnych do użycia na stronie
          global $firstNameUser, $lastNameUser, $uidUser, $emailUser, $displayLoginUser, $isLoggedUser;
          $firstNameUser = $this->session->userdata($session_data['first_name']);
          $lastNameUser = $this->session->userdata($session_data["last_name"]);
          $uidUser = $this->session->userdata($session_data['uid']);
          $emailUser = $this->session->userdata($session_data['email']);
          $displayLoginUser = $this->session->userdata($session_data['display_login']);
          $isLoggedUser = $this->session->userdata($session_data['logged_in']);

          $this->login();
        }
        else {
          // Błąd przy czytaniu informacji z bazy danych
        }
      }
      else {
        $this->session->set_flashdata('login_info', 'Nie udało się zalogować.');
        //$this->session->flashdata('login_info');
        $this->login();
      }
    }
  }

  public function register(){
    if($this->session->login == 'true'){
      redirect('');
    }

    $this->form_validation->set_rules('first-name', 'Imię', 'required');
    $this->form_validation->set_rules('last-name', 'Nazwisko', 'required');
    $this->form_validation->set_rules('uid', 'Login', 'required|is_unique[users.uid]');
    $this->form_validation->set_rules('pwd', 'Hasło', 'required');
    $this->form_validation->set_rules('pwd-repeat', 'Powtórz hasło', 'required|matches[pwd]');
    $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|is_unique[users.email]');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('templates/header');
      $this->load->view('templates/menu');
      $this->load->view('pages/register');
      $this->load->view('templates/footer');
    }
    else
    {
      $this->load->view('templates/header');
      $this->load->view('templates/menu');
      $this->load->view('pages/register-update');
      $this->load->view('templates/footer');
    }
  }

  public function logout(){
    $this->session->unset_userdata($session_data);
    $this->session->sess_destroy();

    global $firstNameUser = null;
    global $lastNameUser = null;
    global $uidUser = null;
    global $emailUser = null;
    global $displayLoginUser = null;
    global $isLoggedUser = null;

    redirect('login');
  }
}
