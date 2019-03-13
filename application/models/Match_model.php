<?php

class Match_model extends CI_Model
{
  public function insert_match($match_date, $match_hour, $team1_id, $team2_id)
  {
    $query = $this->db->query("INSERT
        INTO matches (match_date, match_hour, team1_id, team2_id)
        VALUES ('$match_date', '$match_hour', '$team1_id', '$team2_id')");
  }
}
