<?php

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
    // if($this->session->login == 'true'){
    //   redirect('/');
    // }
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

    // CZY DOBRZE WPROWADZONO DANE
    if ($this->form_validation->run() == FALSE)
    {
      $this->login();
    }
    else
    {
      // CZY DANE ISTNIEJĄ W BAZIE
      if($this->login_model->login_user($uid, $pwd) == true)
      {
        $result = $this->login_model->read_user_information($uid);
        if ($result != false) {
          $session_data = array(
          'id' => $result[0]->id,
          'first_name' => $result[0]->first_name,
          'last_name' => $result[0]->last_name,
          'uid' => $result[0]->uid,
          'pwd' => $result[0]->pwd,
          'email' => $result[0]->email,
          'display_login' => $result[0]->display_login,
          'is_admin' => $result[0]->is_admin,
          'is_active' => $result[0]->is_active,
          'code' => $result[0]->code,
          'last_login_date' => $result[0]->last_login_date,
          'logged_in' => TRUE
          );

          // Dodanie informacji o użytkowniku do sesji
          $this->session->set_userdata($session_data);
        }
        else {
          // blad przy czytaniu z bazy danych
        }

          $this->login();
      }
      else {
        $this->session->set_flashdata('login_info', 'Nie udało się zalogować.');
        //$this->session->flashdata('login_info');
        $this->login();
      }
    }
  }

  public function logout()
  {
    $this->session->unset_userdata($session_data);
    $this->session->sess_destroy();

    redirect('login');
  }

  public function login_date_update()
  {
    $this->login_model->update_user(
      $this->session->userdata('id'),
      $this->session->userdata('first_name'),
      $this->session->userdata('last_name'),
      $this->session->userdata('uid'),
      $this->session->userdata('pwd'),
      $this->session->userdata('email'),
      $this->session->userdata('display_login'),
      $this->session->userdata('is_admin'),
      $this->session->userdata('is_active'),
      $this->session->userdata('code'),
      date("Y-m-d H:i:s")
    );
  }


  public function registration()
  {
    $this->form_validation->set_rules('first-name', 'Imię', 'required');
    $this->form_validation->set_rules('last-name', 'Nazwisko', 'required');
    $this->form_validation->set_rules('uid', 'Login', 'required|is_unique[users.uid]');
    $this->form_validation->set_rules('pwd', 'Hasło', 'required');
    $this->form_validation->set_rules('pwd-repeat', 'Powtórz hasło', 'required|matches[pwd]');
    $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|is_unique[users.email]');

    if ($this->form_validation->run() == FALSE)
    {
      // TODO: niepowowdzenie
      redirect('register');
    }
    else
    {
      $firstName = $this->input->post('first-name');
      $lastName = $this->input->post('last-name');
      $uid = $this->input->post('uid');
      $pwd = $this->input->post('pwd');
      $email =  $this->input->post('email');
      $displayLogin = isset($_POST['display-login']) ? 1 : 0;

      $this->login_model->insert_user($firstName, $lastName, $uid, $pwd, $email, $displayLogin);
      $this->session->set_flashdata('register_info', 'Zarejestrowano pomyślnie!');
      redirect('login');
    }
  }

  public function change_display_login(choice)
  {
    $this->login_model->update_user(
      $this->session->userdata('id'),
      $this->session->userdata('first_name'),
      $this->session->userdata('last_name'),
      $this->session->userdata('uid'),
      $this->session->userdata('pwd'),
      $this->session->userdata('email'),
      $choice,  // 1 -> login,  0 -> firstname lastname
      $this->session->userdata('is_admin'),
      $this->session->userdata('is_active'),
      $this->session->userdata('code'),
      $this->session->userdata('last_login_date')
    );

    $result = $this->login_model->read_user_information($this->session->userdata('uid'));
    if ($result != false) {
      $session_data = array(
      'id' => $result[0]->id,
      'first_name' => $result[0]->first_name,
      'last_name' => $result[0]->last_name,
      'uid' => $result[0]->uid,
      'pwd' => $result[0]->pwd,
      'email' => $result[0]->email,
      'display_login' => $result[0]->display_login,
      'is_admin' => $result[0]->is_admin,
      'is_active' => $result[0]->is_active,
      'code' => $result[0]->code,
      'last_login_date' => $result[0]->last_login_date,
      'logged_in' => TRUE
      );
      // Dodanie informacji o użytkowniku do sesji
      $this->session->set_userdata($session_data);
    }
    redirect('login');
  }

  // public function change_display_to_login()
  // {
  //   $this->login_model->update_user(
  //     $this->session->userdata('id'),
  //     $this->session->userdata('first_name'),
  //     $this->session->userdata('last_name'),
  //     $this->session->userdata('uid'),
  //     $this->session->userdata('pwd'),
  //     $this->session->userdata('email'),
  //     1,
  //     $this->session->userdata('is_admin'),
  //     $this->session->userdata('is_active'),
  //     $this->session->userdata('code'),
  //     $this->session->userdata('last_login_date')
  //   );
  //
  //   $result = $this->login_model->read_user_information($this->session->userdata('uid'));
  //   if ($result != false) {
  //     $session_data = array(
  //     'id' => $result[0]->id,
  //     'first_name' => $result[0]->first_name,
  //     'last_name' => $result[0]->last_name,
  //     'uid' => $result[0]->uid,
  //     'pwd' => $result[0]->pwd,
  //     'email' => $result[0]->email,
  //     'display_login' => $result[0]->display_login,
  //     'is_admin' => $result[0]->is_admin,
  //     'is_active' => $result[0]->is_active,
  //     'code' => $result[0]->code,
  //     'last_login_date' => $result[0]->last_login_date,
  //     'logged_in' => TRUE
  //     );
  //     // Dodanie informacji o użytkowniku do sesji
  //     $this->session->set_userdata($session_data);
  //   }
  //   redirect('login');
  // }
  //
  //
  // public function change_display_to_name()
  // {
  //   $this->login_model->update_user(
  //     $this->session->userdata('id'),
  //     $this->session->userdata('first_name'),
  //     $this->session->userdata('last_name'),
  //     $this->session->userdata('uid'),
  //     $this->session->userdata('pwd'),
  //     $this->session->userdata('email'),
  //     0,
  //     $this->session->userdata('is_admin'),
  //     $this->session->userdata('is_active'),
  //     $this->session->userdata('code'),
  //     $this->session->userdata('last_login_date')
  //   );
  //
  //   $result = $this->login_model->read_user_information($this->session->userdata('uid'));
  //   if ($result != false) {
  //     $session_data = array(
  //     'id' => $result[0]->id,
  //     'first_name' => $result[0]->first_name,
  //     'last_name' => $result[0]->last_name,
  //     'uid' => $result[0]->uid,
  //     'pwd' => $result[0]->pwd,
  //     'email' => $result[0]->email,
  //     'display_login' => $result[0]->display_login,
  //     'is_admin' => $result[0]->is_admin,
  //     'is_active' => $result[0]->is_active,
  //     'code' => $result[0]->code,
  //     'last_login_date' => $result[0]->last_login_date,
  //     'logged_in' => TRUE
  //     );
  //     // Dodanie informacji o użytkowniku do sesji
  //     $this->session->set_userdata($session_data);
  //   }
  //   redirect('login');
  // }


  public function activate_account() {

  }



}
