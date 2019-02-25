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
      $this->form_validation->set_rules('email-contact', 'E-mail', 'required|valid_email');
      $this->form_validation->set_rules('topic-contact', 'Wiadomość', 'required');

      $this->email->clear();

      $this->email->from($emailContact, $nameContact);
      $this->email->to('biuro@tls-torun.pl');

      //$this->email->cc($emailContact);
      //$this->email->bcc('them@their-example.com');

      $this->email->subject('[KONTAKT] '.$topicContact);
      $this->email->message('Wiadomość od użytkownika: '.$nameContact.".\n\n".$messageContact);

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
      $nipJoin = $this->input->post('nip-join');
      $nameJoin = $this->input->post('name-join');
      $phoneJoin = $this->input->post('phone-join');
      $emailJoin = $this->input->post('email-join');
      $idcardJoin = $this->input->post('idcard-join');
      $peselJoin = $this->input->post('pesel-join');

      $squadJoin = null; //załącznik PDF
      $logoJoin = null; //załącznik PNG
      $paymentJoin = null; //potwierdzenie wpłaty

      $this->form_validation->set_rules('team-join', 'Drużyna', 'required');
      $this->form_validation->set_rules('street-join', 'Ulica', 'required');
      $this->form_validation->set_rules('city-join', 'Miejscowość', 'required');
      $this->form_validation->set_rules('postcode-join', 'Kod pocztowy', 'required');
      $this->form_validation->set_rules('nip-join', 'NIP');
      $this->form_validation->set_rules('name-join', 'Imię nazwisko', 'required');
      $this->form_validation->set_rules('phone-join', 'Numer telefonu', 'required');
      $this->form_validation->set_rules('email-join', 'E-mail', 'required|valid_email');
      $this->form_validation->set_rules('idcard-join', 'Numer dowodu', 'required');
      $this->form_validation->set_rules('pesel-join', 'PESEL', 'required|exact_length[11]');

      $this->email->clear();

      $this->email->from($emailJoin, $nameJoin);
      $this->email->to('biuro@tls-torun.pl');

      //$this->email->cc($emailContact);
      //$this->email->bcc('them@their-example.com');

      $messageJoin =  "Drużyna: ".$teamJoin.
                      "\n\nZgłaszający: ".$nameJoin.
                      "\nNumer PESEL: ".$peselJoin.
                      "\nNumer dowodu: ".$idcardJoin.
                      "\n\nAdres:\n".
                      $streetJoin."\n".
                      $postcodeJoin.", ".$cityJoin.
                      "\n\nE-mail: ".$emailJoin.
                      "\nTelefon: ".$phoneJoin.
                      "\n\n=========================".
                      "\nCzy dołączono skład: ";

      if($squadJoin){
        $messageJoin .= "TAK";
      } else {
        $messageJoin .= "NIE";
      }

      $messageJoin .= "\nCzy dołączono logo: ";

      if($logoJoin){
        $messageJoin .= "TAK";
      } else {
        $messageJoin .= "NIE";
      }

      $messageJoin .= "\nCzy dołączono potwierdzenie: ";

      if($paymentJoin){
        $messageJoin .= "TAK";
      } else {
        $messageJoin .= "NIE";
      }



      $this->email->subject('[ZGŁOSZENIE] '.$teamJoin);
      $this->email->message($messageJoin);

      $this->email->send();

      echo $this->email->print_debugger();
      echo "Dziękujemy za zgłoszenie!";

      redirect('join');
  }


}
