<?php
class Pages extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->helper('form');
  }
    public function view($page = 'main')
    {
      if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
      {
              // Whoops, we don't have a page for that!
              show_404();
      }

      $data['title'] = ucfirst($page); // Capitalize the first letter

      $this->load->view('templates/header');
      $this->load->view('templates/menu');
      $this->load->view('pages/'.$page, $data);
      if ($page != 'main')
        $this->load->view('templates/footer');
    }
}
