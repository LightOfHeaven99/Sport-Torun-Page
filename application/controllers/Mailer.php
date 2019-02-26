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
      $this->form_validation->set_rules('topic-contact', 'Temat', 'required');
      $this->form_validation->set_rules('message-contact', 'Wiadomość', 'required');

      $this->email->clear();

      $this->email->from($emailContact, $nameContact);
      $this->email->to('biuro@tls-torun.pl');

      //$this->email->cc($emailContact);
      //$this->email->bcc('them@their-example.com');

      $this->email->subject('[KONTAKT] '.$topicContact);
      $this->email->message('Wiadomość od użytkownika: '.$nameContact.".\n\n".$messageContact);

      if($nameContact && $emailContact && $topicContact && $messageContact){
        $this->email->send();
      }

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

      $logoJoin = $this->input->post('logo-join');
      $squadJoin = $this->input->post('squad-join');
      $paymentJoin = $this->input->post('payment-join');

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

      /*
      $this->email->clear();

      $this->email->from($emailJoin, $nameJoin);
      $this->email->to('biuro@tls-torun.pl');

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
      */


      //WERSJA NIE-CODEIGNITEROWA Z ZAŁĄCZNIKAMI

      //recipient
      $to = 'biuro@tls-torun.pl';

      //sender
      $from = $emailJoin;
      $fromName = $nameJoin;

      //email subject
      $subject = '[ZGŁOSZENIE] '.$teamJoin;

      //email body content
      $htmlContent = "<b>Drużyna:</b> ".$teamJoin.
                      "<br><br><b>Zgłaszający:</b> ".$nameJoin.
                      "<br><b>Numer PESEL:</b> ".$peselJoin.
                      "<br><b>Numer dowodu:</b> ".$idcardJoin.
                      "<br><br><b>Adres:</b><br>ul. ".
                      $streetJoin."<br>".
                      $postcodeJoin.", ".$cityJoin.
                      "<br><br><b>E-mail:</b> ".$emailJoin.
                      "<br><b>Telefon:</b> ".$phoneJoin.
                      "<br><br>=========================".
                      "<br>Czy dołączono skład: ";

                      if($squadJoin){
                        $htmlContent .= "TAK";
                      } else {
                        $htmlContent .= "NIE";
                      }

                      $htmlContent .= "<br>Czy dołączono logo: ";

                      if($logoJoin){
                        $htmlContent .= "TAK";
                      } else {
                        $htmlContent .= "NIE";
                      }

                      $htmlContent .= "<br>Czy dołączono potwierdzenie: ";

                      if($paymentJoin){
                        $htmlContent .= "TAK";
                      } else {
                        $htmlContent .= "NIE";
                      }

      //header for sender info
      $headers = "From: $nameJoin"." <".$from.">";

      //boundary
      $semi_rand = md5(time());
      $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

      //headers for attachment
      $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

      //multipart boundary
      $message = "--{$mime_boundary}--\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
      "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";


      //preparing attachment 1
      $message .= "--{$mime_boundary}--\n";
      $fp =    @fopen($logoJoin,"rb");
      $data =  @fread($fp,filesize($logoJoin));

      @fclose($fp);
      $data = chunk_split(base64_encode($data));
      $message .= "Content-Type: application/octet-stream; name=\"".basename($logoJoin)."\"\n" .
      "Content-Description: ".basename($logoJoin)."\n" .
      "Content-Disposition: attachment;\n" . " filename=\"".basename($logoJoin)."\"; size=".filesize($logoJoin).";\n" .
      "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";


      //preparing attachment 2
      $message .= "--{$mime_boundary}--\n";
      $fp =    @fopen($squadJoin,"rb");
      $data =  @fread($fp,filesize($squadJoin));

      @fclose($fp);
      $data = chunk_split(base64_encode($data));
      $message .= "Content-Type: application/octet-stream; name=\"".basename($squadJoin)."\"\n" .
      "Content-Description: ".basename($squadJoin)."\n" .
      "Content-Disposition: attachment;\n" . " filename=\"".basename($squadJoin)."\"; size=".filesize($squadJoin).";\n" .
      "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";


      //preparing attachment 3
      $message .= "--{$mime_boundary}--\n";
      $fp =    @fopen($paymentJoin,"rb");
      $data =  @fread($fp,filesize($paymentJoin));

      @fclose($fp);
      $data = chunk_split(base64_encode($data));
      $message .= "Content-Type: application/octet-stream; name=\"".basename($paymentJoin)."\"\n" .
      "Content-Description: ".basename($paymentJoin)."\n" .
      "Content-Disposition: attachment;\n" . " filename=\"".basename($paymentJoin)."\"; size=".filesize($paymentJoin).";\n" .
      "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";

      $message .= "--{$mime_boundary}--";


      $returnpath = "-f" . $from;

      //send email
      $mail = mail($to, $subject, $message, $headers, $returnpath);

      //email sending status
      echo $mail?"<h1>Mail wysłany.</h1>":"<h1>Nieudana próba wysłania maila.</h1>";

      redirect('join');
  }


}
