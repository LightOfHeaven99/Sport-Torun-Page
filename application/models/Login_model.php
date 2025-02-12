<?php

class Login_model extends CI_Model
{
  public function insert_user($first_name, $last_name, $uid, $pwd, $email, $display_login){
    $query = $this->db->query("INSERT INTO users (first_name, last_name, uid, pwd, email, display_login) VALUES ('$first_name', '$last_name', '$uid', md5('$pwd'), '$email', '$display_login')");
  }

  public function update_user(
    $id,
    $first_name,
    $last_name,
    $uid,
    $pwd,
    $email,
    $display_login,
    $is_admin,
    $is_active,
    $code,
    $last_login_date
  ) {

      $query = $this->db->query("UPDATE users SET
        first_name = '$first_name',
        last_name = '$last_name',
        uid = '$uid',
        pwd = '$pwd',
        email = '$email',
        display_login = '$display_login',
        is_admin = '$is_admin',
        is_active = '$is_active',
        code = '$code',
        last_login_date = '$last_login_date'
        WHERE id = '$id'");

      return $query;
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

  public function login_user_by_code($email, $code){
    $query = $this->db->query("SELECT * FROM users WHERE email='$email' AND code='$code'");
    if($query->num_rows() == 1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function activation_user($id, $code){
    $query = $this->db->query("SELECT * FROM users WHERE id='$id' AND code='$code'");
    if($query->num_rows() == 1)
    {
      $query = $this->db->query("UPDATE users SET is_active = 1, code = '' WHERE id = '$id'");
      return true;
    }
    else
    {
      return false;
    }
  }

  public function check_user_mail($email){
    $query = $this->db->query("SELECT * FROM users WHERE email='$email'");
    if($query->num_rows() == 1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function read_user_information($uid) {

    $condition = "uid =" . "'" . $uid . "'";
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->result();
    }
    else {
      return false;
    }
  }

  public function read_user_information_by_email($email) {

    $condition = "email =" . "'" . $email . "'";
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->result();
    }
    else {
      return false;
    }
  }

}
