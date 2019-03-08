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
      $this->load->model('login_model');
  }

  public function send_contact()
  {
      if($this->session->userdata('logged_in') == TRUE) {
        $nameContact = $this->session->userdata('first_name').' '.$this->session->userdata('last_name');
        $emailContact = $this->session->userdata('email');
      }
      else {
        $nameContact = $this->input->post('name-contact');
        $emailContact = $this->input->post('email-contact');
      }
      $topicContact = $this->input->post('topic-contact');
      $messageContact = $this->input->post('message-contact');


      if($this->session->userdata('logged_in') == FALSE) {
        $this->form_validation->set_rules('name-contact', 'Imię Nazwisko', 'required');
        $this->form_validation->set_rules('email-contact', 'E-mail', 'required|valid_email');
      }
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

  public function send_team()
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
      $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
      "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

      $file1 = file_get_contents($logoJoin);
      $file2 = file_get_contents($squadJoin);
      $file3 = file_get_contents($paymentJoin);

      //preparing attachment 1
      $message .= "--{$mime_boundary}\n";
      $fp =    @fopen($file1,"rb");
      $data =  @fread($fp,filesize($file1));

      @fclose($fp);
      $data = chunk_split(base64_encode($data));
      $message .= "Content-Type: application/octet-stream; name=\"".basename($file1)."\"\n" .
      "Content-Description: ".basename($file1)."\n" .
      "Content-Disposition: attachment;\n" . " filename=\"".basename($file1)."\"; size=".filesize($file1).";\n" .
      "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";


      //preparing attachment 2
      $message .= "--{$mime_boundary}\n";
      $fp =    @fopen($file2,"rb");
      $data =  @fread($fp,filesize($file2));

      @fclose($fp);
      $data = chunk_split(base64_encode($data));
      $message .= "Content-Type: application/octet-stream; name=\"".basename($file2)."\"\n" .
      "Content-Description: ".basename($file2)."\n" .
      "Content-Disposition: attachment;\n" . " filename=\"".basename($file2)."\"; size=".filesize($file2).";\n" .
      "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";


      //preparing attachment 3
      $message .= "--{$mime_boundary}\n";
      $fp =    @fopen($file3,"rb");
      $data =  @fread($fp,filesize($file3));

      @fclose($fp);
      $data = chunk_split(base64_encode($data));
      $message .= "Content-Type: application/octet-stream; name=\"".basename($file3)."\"\n" .
      "Content-Description: ".basename($file3)."\n" .
      "Content-Disposition: attachment;\n" . " filename=\"".basename($file3)."\"; size=".filesize($file3).";\n" .
      "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";

      $message .= "--{$mime_boundary}--";


      $returnpath = "-f" . $from;

      //send email
      $mail = mail($to, $subject, $message, $headers, $returnpath);

      //email sending status
      echo $mail?"<h1>Mail wysłany.</h1>":"<h1>Nieudana próba wysłania maila.</h1>";


/*      $mail = new PHPMailer;

      $mail->IsSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'tls-torun.pl';                       // Specify main and backup server
      $mail->Port = 587;                                    // Set the SMTP port
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'biuro@tls-torun.pl';               // SMTP username
      $mail->Password = 'witkowskiego123';                  // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

      $mail->From = $emailJoin;
      $mail->FromName = $nameJoin;
      $mail->AddAddress('biuro@tls-torun.pl', 'Łukasz Bania');  // Add a recipient
      //$mail->AddAddress('ellen@example.com');               // Name is optional

      $mail->IsHTML(true);                                  // Set email format to HTML

      $mail->Subject = '[ZGŁOSZENIE] '.$teamJoin;
      $mail->Body    = "<b>Drużyna:</b> ".$teamJoin.
                      "<br><br><b>Zgłaszający:</b> ".$nameJoin.
                      "<br><b>Numer PESEL:</b> ".$peselJoin.
                      "<br><b>Numer dowodu:</b> ".$idcardJoin.
                      "<br><br><b>Adres:</b><br>ul. ".
                      $streetJoin."<br>".
                      $postcodeJoin.", ".$cityJoin.
                      "<br><br><b>E-mail:</b> ".$emailJoin.
                      "<br><b>Telefon:</b> ".$phoneJoin.
                      "<br><br>=========================".
                      "<br>Czy dołączono logo: ";

                      if($logoJoin){
                        $mail->Body .= "TAK";
                        $mail->AddAttachment($logoJoin);
                      } else {
                        $mail->Body .= "NIE";
                      }

                      $mail->Body .= "<br>Czy dołączono skład: ";

                      if($squadJoin){
                        $mail->Body .= "TAK";
                        $mail->AddAttachment($squadJoin);
                      } else {
                        $mail->Body .= "NIE";
                      }

                      $mail->Body .= "<br>Czy dołączono potwierdzenie: ";

                      if($paymentJoin){
                        $mail->Body .= "TAK";
                        $mail->AddAttachment($paymentJoin);
                      } else {
                        $mail->Body .= "NIE";
                      }


      if(!$mail->Send()) {
         echo 'Zgłoszenie nie mogło zostać wysłane.';
         echo 'Błąd: ' . $mail->ErrorInfo;
         exit;
      }

      echo 'Zgłoszenie wysłano pomyślnie!';
*/
      redirect('join');
  }


  public function generate_random_string($length = 10) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }


  public function send_code($email)
  {

      $this->email->clear();

      $this->email->from('no-reply@tls-torun.pl', 'Administracja');
      $this->email->to($email);

      $code = $this->generate_random_string(10);
      $date = date("D M d, Y G:i");

      $this->email->subject('Kod aktywacyjny konta na TLS-Toruń: '.$email);
      $this->email->message(
      'Drogi użytkowniku,'."\n".'dnia '.$date.' został wygenerowany'
      ."\n".'dla Ciebie kod aktywacyjny konta na stronie www.tls-torun.pl.'.
      "\n\n".'Zaloguj się swoimi danymi i wprowadź 10-znakowy kod:'.
      "\n\n".'                 '.$code."\n\n\n".
      'Po wciśnięciu przycisku [Aktywuj] zostaniesz zalogowany,'.
      "\n".'a Twoje konto przygotowane do wykorzystywania funkcji'.
      "\n".'na stronie. Od teraz możesz dodawać ogłoszenia, a także'.
      "\n".'wyrażać opinie pod dodawanymi postami.'.
      "\n\n".'Gorąco pozdrawiamy,'."\n".'Administracja TLS-Toruń');

      if($nameContact && $emailContact && $topicContact && $messageContact){
        $this->email->send();
      }

      echo $this->email->print_debugger();
      echo "Kod aktywacyjny został wysłany na skrzynkę pocztową!";

      redirect('login');
  }


  public function send_reset_code()
  {
      $emailReset = $this->input->post('reset-email');

      $this->form_validation->set_rules('reset-email', 'E-mail', 'required|valid_email');

      if($this->login_model->check_user_mail($emailReset) == true)
      {
        $this->email->clear();

        $this->email->from('no-reply@tls-torun.pl', 'Administracja');
        $this->email->to($emailReset);

        $code = $this->generate_random_string(10);
        $date = date("D M d, Y G:i");

        $this->email->subject('Kod odzyskania konta na TLS-Toruń: '.$emailReset);
        $this->email->message(
        'Drogi użytkowniku,'."\n".'dnia '.$date.' został wygenerowany'
        ."\n".'dla Ciebie kod do odzyskania konta na stronie www.tls-torun.pl.'.
        "\n\n".'Powróć na otwarte okno naszej strony albo bezpośrednio pod link'.
        "\n".'www.tls-torun.pl/enter-reset-code i wprowadź 10-znakowy kod:'.
        "\n\n".'                 '.$code."\n\n\n".
        'Po wciśnięciu przycisku [Odblokuj] zostaniesz zalogowany,'.
        "\n".'a powyższy kod zresetowany. Koniecznie zmień w ustawieniach '.
        "\n".'swoje hasło, które od teraz z łatwością zapamiętasz!'.
        "\n\n".'Gorąco pozdrawiamy,'."\n".'Administracja TLS-Toruń');

        if($nameContact && $emailContact && $topicContact && $messageContact){
          $this->email->send();
        }

        echo $this->email->print_debugger();
        echo "Kod został wysłany na podaną skrzynkę pocztową!";

        redirect('enter-reset-code');
      }
      else
      {
        redirect('reset-account');
      }
  }

}
