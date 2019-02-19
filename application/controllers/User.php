<?php

class User extends CI_Controller
{

  public function index(){
    echo "index";
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
    $username = $this->input->post('uid');
    $password = $this->input->post('pwd');

    $this->load->model('user_model', 'auth');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('uid', 'Login', 'required');
    $this->form_validation->set_rules('pwd', 'Hasło', 'required');

    if ($this->form_validation->run() == FALSE)
      {
        $this->login();
      }
      else
      {
        $response_val = $this->auth->login_user($uid, $pwd);
        if($response_val == true){
          $val = $this->auth->get_user_info($uid);
          $this->session->set_userdata($val[0]);
          $this->session->set_userdata('login', 'true');
          redirect('/');

        }elseif($response_val == false){
          $this->session->set_flashdata('login_info', 'Nie udało się zalogować.');
          //$this->session->flashdata('login_info');
          $this->login();
        }
      }
  }

  public function register(){
    if($this->session->login == 'true'){
      redirect('/');
    }

    $this->load->model('user_model', 'auth');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('first-name', 'Imię', 'required|alpha');
    $this->form_validation->set_rules('last-name', 'Nazwisko', 'required|alpha');
    $this->form_validation->set_rules('uid', 'Login', 'required|alpha_num|max_length[15]|is_unique[users.uid]');
    $this->form_validation->set_rules('pwd', 'Hasło', 'required|min_length[8]');
    $this->form_validation->set_rules('pwd-repeat', 'Powtórz hasło', 'required|matches[pwd]');
    $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|is_unique[users.email]');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('templates/header');
      $this->load->view('templates/menu');
      $this->load->view('pages/signup');
      $this->load->view('templates/footer');
    }
    else
    {
      $this->load->view('templates/header');
      $this->load->view('templates/menu');
      $this->load->view('pages/signup-update');
      $this->load->view('templates/footer');
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
}
