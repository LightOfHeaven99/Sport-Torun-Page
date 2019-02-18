<?php

$servername = "localhost";
$dBUsername = "tlstoru1_bania";
$dBPassword = "witkowskiego123";
$dBName = "tlstoru1_tls-torun";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
$conn->query('SET NAMES utf8');

 ?>
