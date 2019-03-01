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
      redirect('news-panel');
    }
    else
    {
      $title = $this->input->post('title-news');
      $content = $this->input->post('content-news');
      //$image = $this->input->post('image-news');
      $voting = isset($_POST['voting-news']) ? 0 : 1;
      $commenting = isset($_POST['commenting-news']) ? 0 : 1;


                // $file_name = $_FILES['image-news']['name'];
                // $file_type = $_FILES['image-news']['type'];
                // $file_tmp_name = $_FILES['image-news']['tmp_name'];
                // $file_size = $_FILES['image-news']['size'];

        $imagename = $_FILES["myimage"]["name"];

        //Get the content of the image and then add slashes to it
        $imagetmp = addslashes(file_get_contents($_FILES['myimage']['tmp_name']));

        $this->news_model->insert_news($title,
                                        $content,
                                        $imagetmp,
                                        $voting,
                                        $commenting);
                // // target directory
                // $target_dir = "../../assets/uploads/";

                // // uploding file
                // if(move_uploaded_file($file_tmp_name,$target_dir.$file_name))
                // {
                //   $this->news_model->insert_news($title,
                //                                   $content,
                //                                   "'.$target_dir.$file_name.'",
                //                                   $voting,
                //                                   $commenting);
                // }
                // else
                // {
                //   echo "File can not be uploaded";
                // }

      redirect('news-panel');
    }
  }
}
