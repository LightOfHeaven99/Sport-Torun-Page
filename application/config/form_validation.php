<?php

$config['error_prefix'] = '<div class="error_prefix">';
$config['error_suffix'] = '</div>';

$config = array(
  'signup' => array(
      array(
              'field' => 'first-name',
              'label' => 'Imię',
              'rules' => 'required|callback_containsOnlyLetters'
      ),
      array(
              'field' => 'last-name',
              'label' => 'Nazwisko',
              'rules' => 'required|callback_containsOnlyLetters'
      ),
      array(
              'field' => 'uid',
              'label' => 'Login',
              'rules' => 'required|callback_containsOnlyLettersAndNumbers|max_length[15]|is_unique[users.uidUsers]'
      ),
      array(
              'field' => 'pwd',
              'label' => 'Hasło',
              'rules' => 'required|min_length[8]'
      ),
      array(
              'field' => 'pwd-repeat',
              'label' => 'Powtórz hasło',
              'rules' => 'required|matches[pwd]'
      ),
      array(
              'field' => 'email',
              'label' => 'E-mail',
              'rules' => 'required|valid_email|is_unique[users.emailUsers]'
      )
  ),
  'email' => array(
      array(
              'field' => 'emailaddress',
              'label' => 'EmailAddress',
              'rules' => 'required|valid_email'
      ),
      array(
              'field' => 'name',
              'label' => 'Imię',
              'rules' => 'required|alpha'
      ),
      array(
              'field' => 'title',
              'label' => 'Tytuł',
              'rules' => 'required'
      ),
      array(
              'field' => 'message',
              'label' => 'Wiadomość',
              'rules' => 'required'
      )
  )
);

public function containsOnlyLetters($string) {
  return preg_match("/^[a-ząćęłńóśźżA-ZĄĆĘŁŃÓŚŹŻ]*$/", $string);
}

public function containsOnlyLettersAndNumbers($string) {
  return preg_match("/^[a-zA-Z0-9]*$/", $string);
}
