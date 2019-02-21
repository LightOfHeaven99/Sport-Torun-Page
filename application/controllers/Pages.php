<?php
class Pages extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->helper('form');
  }

  // GŁÓWNE PODSTRONY
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
