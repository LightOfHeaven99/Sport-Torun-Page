<?php
class Mailer extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->helper('email');
      $this->load->library('email');
      $this->load->helper('form');
      $this->load->library('form_validation');
  }

  public function sendmail()
  {
      // $this->email->clear();
      //
      // $this->email->from('kacburza@interia.pl', 'Kacper Burzała');
      // $this->email->to('biuro@tls-torun.pl');
      // //$this->email->cc('another@another-example.com');
      // //$this->email->bcc('them@their-example.com');
      //
      // $this->email->subject('Email Test');
      // $this->email->message('Testowanie klasy email.');
      //
      // $this->email->send();
      //
      // echo $this->email->print_debugger();
      // echo "Dziękujemy za wiadomość!";



      //$name = $_POST['name'];
      //$visitor_email = $_POST['email'];
      //$message = $_POST['message'];

      // $name = 'Kacper Burzała';
      // $visitor_email = 'kacburza@interia.pl';
      // $message = 'Siemka, jak się zapisać?';
      //
      // $email_from = 'no-reply@tls-torun.pl';
      //
      // $email_subject = "New Form submission";
      //
      // $email_body = "You have received a new message from the user $name.\n".
      //                         "Here is the message:\n $message";
      //
      // $to = "biuro@tls-torun.pl";
      // $headers = "From: $email_from \r\n";
      // $headers .= "Reply-To: $visitor_email \r\n";
      //
      // mail($to,$email_subject,$email_body,$headers);




      // $name = $_POST['name'];
      // $visitor_email = $_POST['email'];
      // $message = $_POST['message'];

      $name = 'Kacper Burzała';
      $visitor_email = 'kacburza@interia.pl';
      $message = 'Siemka, jak się zapisać?';

      // if(IsInjected($visitor_email))
      // {
      //     echo "Bad email value!";
      //     exit;
      // }

      $email_from = 'no-reply@tls-torun.pl';
      $email_subject = "ZAPISY";
      $email_body = "You have received a new message from the user $name.\n".
          "Here is the message:\n $message".

      $to = "biuro@tls-torun.pl";
      $headers = "From: $email_from \r\n";
      $headers .= "Reply-To: $visitor_email \r\n";

      mail($to,$email_subject,$email_body,$headers);


      // function IsInjected($str)
      // {
      //   $injections = array('(\n+)',
      //               '(\r+)',
      //               '(\t+)',
      //               '(%0A+)',
      //               '(%0D+)',
      //               '(%08+)',
      //               '(%09+)'
      //               );
      //   $inject = join('|', $injections);
      //   $inject = "/$inject/i";
      //   if(preg_match($inject,$str)){
      //     return true;
      //   }
      //   else {
      //     return false;
      //   }
      // }
  }


}
