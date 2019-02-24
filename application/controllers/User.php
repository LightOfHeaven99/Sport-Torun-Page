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
      $this->load->helper('email');
      $this->load->library('email');
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
          'is_admin' => $result[0]->is_admin,
          'logged_in' => TRUE
          );
          // Dodanie informacji o użytkowniku do sesji
          $this->session->set_userdata($session_data);

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

  public function register()
  {
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

  public function logout()
  {
    $this->session->unset_userdata($session_data);
    $this->session->sess_destroy();

    redirect('login');
  }

  public function sendmail()
  {
      $this->email->clear();

      $nameContact = $this->input->post('name-contact');
      $emailContact = $this->input->post('email-contact');
      $topicContact = $this->input->post('topic-contact');
      $messageContact = $this->input->post('message-contact');

      $this->form_validation->set_rules('name-contact', 'Imię Nazwisko', 'required');
      $this->form_validation->set_rules('email-contact', 'E-mail', 'required');
      $this->form_validation->set_rules('topic-contact', 'Wiadomość', 'required');

      $this->email->from($emailContact, $nameContact);
      $this->email->to('biuro@tls-torun.pl');

      $this->email->cc($emailContact);
      //$this->email->bcc('them@their-example.com');

      $this->email->subject('[Forumularz kontaktowy] '.$topicContact);
      $this->email->message('Wiadomość od użytkownika: '.$nameContact.'\r\n\r\n'.$messageContact);

      $this->email->send();

      echo $this->email->print_debugger();
      echo "Dziękujemy za wiadomość!";

      redirect('contact');
  }
}
