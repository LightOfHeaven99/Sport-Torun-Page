<?php
class Mailer extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->load->helper('email');
      $this->load->library('email');
  }

  public function sendcontact()
  {
      $nameContact = $this->input->post('name-contact');
      $emailContact = $this->input->post('email-contact');
      $topicContact = $this->input->post('topic-contact');
      $messageContact = $this->input->post('message-contact');

      $this->form_validation->set_rules('name-contact', 'Imię Nazwisko', 'required');
      $this->form_validation->set_rules('email-contact', 'E-mail', 'required');
      $this->form_validation->set_rules('topic-contact', 'Wiadomość', 'required');

      $this->email->clear();

      $this->email->from($emailContact, $nameContact);
      $this->email->to('biuro@tls-torun.pl');

      //$this->email->cc($emailContact);
      //$this->email->bcc('them@their-example.com');

      $this->email->subject('[Forumularz kontaktowy] '.$topicContact);
      $this->email->message('Wiadomość od użytkownika: '.$nameContact.'. Treść: '.$messageContact);

      $this->email->send();

      echo $this->email->print_debugger();
      echo "Dziękujemy za wiadomość!";

      redirect('contact');
  }

  public function sendteam()
  {
      $teamJoin = $this->input->post('team-join');
      $streetJoin = $this->input->post('street-join');
      $cityJoin = $this->input->post('city-join');
      $postcodeJoin = $this->input->post('postcode-join');
      $postcodeJoin = $this->input->post('postcode-join');

      $this->form_validation->set_rules('team-join', 'Drużyna', 'required');

      $this->email->clear();

      $this->email->from($emailContact, $nameContact);
      $this->email->to('biuro@tls-torun.pl');

      //$this->email->cc($emailContact);
      //$this->email->bcc('them@their-example.com');

      $this->email->subject('[Forumularz zgłoszeniowy] '.$topicContact);
      $this->email->message('Wiadomość od użytkownika: '.$nameContact.'. Treść: '.$messageContact);

      $this->email->send();

      echo $this->email->print_debugger();
      echo "Dziękujemy za zgłoszenie!";

      redirect('join');
  }


}
