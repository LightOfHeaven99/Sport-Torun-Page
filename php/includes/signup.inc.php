<?php
if (isset($_POST['signup-submit'])) {
  // code...
}

require 'dbh.inc.php';

$username = $_POST['uid'];
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$password = $_POST['pwd'];
$passwrodRepeat = $_POST['pwd-repeat'];
$email = $_POST['mail'];
$displayLogin = isset($_POST['display-login']) ? $_POST['display-login'] : null;

if(empty($username) || empty($firstName) || empty($lastName) || empty($password) || empty($passwrodRepeat) || empty($email)){

}

 ?>
