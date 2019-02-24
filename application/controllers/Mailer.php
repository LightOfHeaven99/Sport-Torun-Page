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

  public function sendmail()
  {
      $this->email->clear();

      $nameContact = $this->input->post('name-contact');
      $emailContact = $this->input->post('email-contact');
      $topicContact = $this->input->post('topi-contact');
      $messageContact = $this->input->post('message-contact');

      $this->email->from($emailContact, $nameContact);
      $this->email->to('biuro@tls-torun.pl');

      $this->email->cc($emailContact);
      //$this->email->bcc('them@their-example.com');

      $this->email->subject('[Forumularz kontaktowy] ');
      $this->email->message('Wiadomość od użytkownika: '.$nameContact.'\r\n'.'\r\n'.$messageContact);

      $this->email->send();

      echo $this->email->print_debugger();
      echo "Dziękujemy za wiadomość!";

      redirect('contact');



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

      // $name = $_POST['name'];
      // $visitor_email = $_POST['email'];
      // $message = $_POST['message'];

      // $name = 'Kacper Burzała';
      // $visitor_email = 'kacburza@interia.pl';
      // $message = 'Siemka, jak się zapisać?';

              // if(IsInjected($visitor_email))
              // {
              //     echo "Bad email value!";
              //     exit;
              // }

      // $email_from = 'no-reply@tls-torun.pl';
      // $email_subject = "ZAPISY";
      // $email_body = "You have received a new message from the user $name.\n".
      //     "Here is the message:\n $message".
      //
      // $to = "biuro@tls-torun.pl";
      // $headers = "From: $email_from \r\n";
      // $headers .= "Reply-To: $visitor_email \r\n";
      //
      // mail($to,$email_subject,$email_body,$headers);
  }


}
