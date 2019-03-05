<?php

class Forum extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->load->model('forum_model');
  }


  public function index()
  {
    $this->data['advertisements'] = $this->forum_model->get_advertisements();
  }


  public function add_advertisement()
  {
    $this->form_validation->set_rules('topic-forum', 'Temat', 'required');
    $this->form_validation->set_rules('content-forum', 'Treść', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      // TODO: komunikaty błędów
      redirect('forum-add');
    }
    else
    {
      $category = isset($_POST['category-teams-forum']) ? 'teams' : 'players';
      $author_id = $this->session->userdata('id');
      $topic = $this->input->post('topic-forum');
      $content = $this->input->post('content-forum');
      $phone = $this->input->post('phone-forum');
      $email = $this->input->post('email-forum');


      $this->news_model->insert_advertisement($category,
                                              $author_id,
                                              $topic,
                                              $content,
                                              $phone,
                                              $email);

      if($category == 'teams')
        redirect('forum-teams');
      else
        redirect('forum-players');
    }
  }
}