<?php

class Match extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->load->model('match_model');
  }

  public function add_match()
  {
    $this->form_validation->set_rules('match-date', 'Data', 'required');
    $this->form_validation->set_rules('match-hour', 'Godzina', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      // TODO: komunikaty błędów
      redirect('matches-panel');
    }
    else
    {
      $match_date = $this->input->post('match_date');
      $match_hour = $this->input->post('match_hour');
      $team1_id = $this->input->post('team1_id');
      $team2_id = $this->input->post('team2_id');

      $this->match_model->insert_match($match_date,
                                    $match_hour,
                                    $team1_id,
                                    $team2_id
                                    );

      redirect('timetable');
    }
  }
}
