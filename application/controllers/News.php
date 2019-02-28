<?php

class News extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->load->model('news_model');
  }

  public function add_news()
  {
    $this->form_validation->set_rules('first-name', 'Imię', 'required');
    $this->form_validation->set_rules('last-name', 'Nazwisko', 'required');


    if ($this->form_validation->run() == FALSE)
    {
      redirect('news-panel');
    }
    else
    {
      $title = $this->input->post('title-news');
      $content = $this->input->post('content-news');
      $image = $this->input->post('image-news');
      $voting = isset($_POST['voting-news']) ? 0 : 1;
      $commenting = isset($_POST['commenting-news']) ? 0 : 1;

      $this->login_model->insert_user($firstName, $lastName, $uid, $pwd, $email, $displayLogin);
      $this->session->set_flashdata('register_info', 'Zarejestrowano pomyślnie!');
      redirect('login');
    }
  }
}
