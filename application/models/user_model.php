<?php

class User_model extends CI_Model
{
  public function insert_user($firstName, $lastName, $uid, $pwd, $email, $displayLogin){
    $query = $this->db->query("INSERT INTO users (first_name, last_name, uid, pwd, email, display_login) VALUES ('$firstName', '$lastName', '$uid', md5('$pwd'), '$email', '$displayLogin')");
  }

  public function login_user($uid, $pwd){
    $query = $this->db->query("SELECT * FROM users WHERE uid='$uid' AND pwd=md5('$pwd')");
    if($query->num_rows() == 1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

}
