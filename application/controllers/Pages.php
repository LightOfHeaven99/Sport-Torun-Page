<?php
class Pages extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->helper('form');
      // $this->load->model('news_model');
  }

  public function view($page = 'start')
  {
    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
        show_404();
    }

    $data['title'] = ucfirst($page);


    $this->load->view('templates/header');
    if ($page != 'main')
      $this->load->view('templates/menu');

    if($page == 'login') {
      if($this->session->userdata('is_active') == 1) {
          $this->load->view('pages/login', $data);
      }
      else {
          $this->load->view('pages/enter-activation-code', $data);
      }
    }
    else {
      $this->load->view('pages/'.$page, $data);
    }

    if ($page != 'main')
      $this->load->view('templates/footer');
  }

  // PANEL ADMINA
  public function admin($page = 'admin-panel')
  {
    if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
    {
        show_404();
    }

    $data['title'] = ucfirst($page);

    if($this->session->userdata('logged_in') == TRUE)
    {
      if($this->session->userdata('is_admin') == 1)
      {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/menu');
        $this->load->view('admin/'.$page, $data);
        $this->load->view('admin/templates/footer');
      }
      else {
        show_404(); // BRAK UPRAWNIEŃ
      }
    }
    else {
      show_404(); // NIEZALOGOWANY
    }
  }
}
