<?php
class Mailer extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->helper('email');
      $this->load->library('email');
  }

  public function SendMail()
  {
  $this->email->from('kacburza@interia.pl', 'Kacper Burzała');
  $this->email->to('biuro@tls-torun.pl');
  //$this->email->cc('another@another-example.com');
  //$this->email->bcc('them@their-example.com');

  $this->email->subject('Email Test');
  $this->email->message('Testowanie klasy email.');

  $this->email->send();
  }



}
