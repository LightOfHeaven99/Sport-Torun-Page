<?php
  $firstName = $this->input->post('first-name');
  $lastName = $this->input->post('last-name');
  $uid = $this->input->post('uid');
  $pwd = $this->input->post('pwd');
  $email =  $this->input->post('email');
  $displayLogin = isset($_POST['display-login']) ? 1 : 0;

  $this->user_model->insert_user($firstName, $lastName, $uid, $pwd, $email, $displayLogin);
  $this->session->set_flashdata('signup_info', 'Zarejestrowano pomyślnie!');
  redirect('signup');
?>
