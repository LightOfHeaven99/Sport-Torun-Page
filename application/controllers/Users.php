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

    // TODO: Pozostałe reguły

    if($this->form_validation->run() === true) {
      // TODO: Obsługa rejestracji
      die("Też błąd, ale mniejszy.");
    } else {
      // TODO: Niepowodzenie, błędy w formularzu.
      die("Błąd!");
    }
  }

  private function containsOnlyLetters($string) {
    return preg_match("/^[a-ząćęłńóśźżA-ZĄĆĘŁŃÓŚŹŻ]*$/", $string);
  }

}
