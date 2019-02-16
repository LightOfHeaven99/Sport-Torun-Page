<?php
class Users extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('form_validation');
      // $this->load->model('events_model');
  }

  public function signup() {
    $this->form_validation->set_rules('first-name', 'Imię', 'required|callback_containsOnlyLetters', array(
      'required' => 'Pole jest wymagane.',
      'callback_containsOnlyLetters' => 'Pole zawiera znaki inne niż litery.'
    ));

    $this->form_validation->set_rules('last-name', 'Nazwisko', 'required|callback_containsOnlyLetters', array(
      'required' => 'Pole jest wymagane.',
      'callback_containsOnlyLetters' => 'Pole zawiera znaki inne niż litery.'
    ));

    $this->form_validation->set_rules('uid', 'Login', 'required|callback_containsOnlyLettersAndNumbers', array(
      'required' => 'Pole jest wymagane.',
      'callback_containsOnlyLettersAndNumbers' => 'Pole zawiera znaki inne niż litery i cyfry.'
    ));

    $this->form_validation->set_rules('pwd', 'Hasło', 'required', array(
      'required' => 'Pole jest wymagane.'
    ));

    $this->form_validation->set_rules('pwd-repeat', 'Hasło-powtórz', 'required', array(
      'required' => 'Pole jest wymagane.'
    ));

    $this->form_validation->set_rules('mail', 'E-mail', 'required', array(
      'required' => 'Pole jest wymagane.'
    ));

    if($this->form_validation->run() === true) {
      // TODO: Obsługa rejestracji
      die("Też błąd, ale mniejszy.");
    } else {
      // TODO: Niepowodzenie, błędy w formularzu.
      die("Błąd!");
    }
  }

  public function containsOnlyLetters($string) {
    return preg_match("/^[a-ząćęłńóśźżA-ZĄĆĘŁŃÓŚŹŻ]*$/", $string);
  }

  public function containsOnlyLettersAndNumbers($string) {
    return preg_match("/^[a-zA-Z0-9]*$/", $string);
  }

}
