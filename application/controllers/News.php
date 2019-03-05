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


  public function index()
  {
    $this->data['posts'] = $this->news_model->get_posts();
  }


  public function add_news()
  {
    $this->form_validation->set_rules('title-news', 'Tytuł', 'required');
    $this->form_validation->set_rules('content-news', 'Treść', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      // TODO: komunikaty błędów
      redirect('news-panel');
    }
    else
    {
      $title = $this->input->post('title-news');
      $content = $this->input->post('content-news');
      $image = $this->input->post('image-news');
      $voting = isset($_POST['voting-news']) ? 0 : 1;
      $commenting = isset($_POST['commenting-news']) ? 0 : 1;


      $config['upload_path'] = '../../assets/uploads/';
      $config['allowed_types'] = 'gif|jpg|png';
      $this->load->library('upload', $config);
      $this->upload->do_upload();
      $data = $this->upload->data();


      $image = addslashes(file_get_contents($_FILES['image-news']['tmp_name'])); //SQL Injection defence!
      $image_name = addslashes($_FILES['image-news']['name']);

      $this->news_model->insert_news($title,
                                    $content,
                                    $image,
                                    $voting,
                                    $commenting);

      redirect('news-panel');
    }
  }

  public function remove_news($id)
  {
      //$this->db->delete('frekwencja', array('Wydarzenie' => $id));
      //$this->db->delete('lista_repertuarowa', array('Wydarzenie' => $id));

      return $this->db->delete('news', array('id' => $id));
  }

}
