<?php
class Users extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
      // $this->load->model('events_model');
  }


  public function register() {
    $this->form_validation->set_rules('first-name', 'Imię', 'required|callback_containsOnlyLetters', array(
      'required' => 'Pole jest wymagane.',
      'callback_containsOnlyLetters' => 'Pole może zawierać tylko litery.'
    ));

    $this->form_validation->set_rules('last-name', 'Nazwisko', 'required|callback_containsOnlyLetters', array(
      'required' => 'Pole jest wymagane.',
      'callback_containsOnlyLetters' => 'Pole może zawierać tylko litery.'
    ));

    $this->form_validation->set_rules('uid', 'Login', 'required|callback_containsOnlyLettersAndNumbers|max_length[15]|is_unique[users.uidUsers]', array(
      'required' => 'Pole jest wymagane.',
      'callback_containsOnlyLettersAndNumbers' => 'Pole może zawierać tylko litery i cyfry.',
      'max_length[15]' => 'Login może zawierać maksymalnie 15 znaków.',
      'is_unique[users.uidUsers]' => 'Podany login jest zajęty.'
    ));

    // alpha_numeric (login) OR alpha (first-name/last-name)

    $this->form_validation->set_rules('pwd', 'Hasło', 'required|min_length[8]', array(
      'required' => 'Pole jest wymagane.',
      'required' => 'Hasło musi zawierać minimum 8 znaków.'
    ));

    $this->form_validation->set_rules('pwd-repeat', 'Powtórz hasło', 'required|matches[pwd]', array(
      'required' => 'Pole jest wymagane.',
      'matches[pwd]' => 'Podane hasła różnią się.'
    ));

    $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|is_unique[users.emailUsers]', array(
      'required' => 'Pole jest wymagane.',
      'valid_email' => 'Niepoprawny email.',
      'is_unique[users.emailUsers]' => 'Podany email jest zajęty.'
    ));

    if($this->form_validation->run('register') === true) {
      // TODO: Obsługa rejestracji
      $this->load->view('formsuccess');
    } else {
      // TODO: Niepowodzenie, błędy w formularzu.
      $this->load->view('signup');
    }
  }

  public function login()
  {
      $this->form_validation->set_rules('uid', 'Login', 'required', array(
          'required' => "Login jest wymagany."
      ));
      $this->form_validation->set_rules('pwd', 'Hasło', 'required', array(
          'required' => "Hasło jest wymagane."
      ));

      if ($this->form_validation->run() === true) {

          $userExistenceAndAccountType = $this->users_model->checkUserCredentialsDuringLogin(
            $this->input->post('uid'),
              $this->input->post('pwd'));
          if ($userExistenceAndAccountType) {

                  $this->users_model->createNewSession(
                    $this->input->post('uid'));

                  header('Location: ' . site_url(''));
          }
      } else {
          header('Location: ' . site_url('login'));
      }
  }

  public function logout() {
      $this->session->sess_destroy();

      header('Location: /');
  }

  public function containsOnlyLetters($string) {
    return preg_match("/^[a-ząćęłńóśźżA-ZĄĆĘŁŃÓŚŹŻ]*$/", $string);
  }

  public function containsOnlyLettersAndNumbers($string) {
    return preg_match("/^[a-zA-Z0-9]*$/", $string);
  }

}
