<?php

$isLogged = isset($this->session->userdata['logged_in']);

if(isset($isLogged))
{
  $firstNameUser = ($this->session->userdata['logged_in']['first_name']);
  $lastNameUser = ($this->session->userdata['logged_in']['last_name']);
  $uidUser = ($this->session->userdata['logged_in']['uid']);
  $emailUser = ($this->session->userdata['logged_in']['email']);
  $displayLoginUser = ($this->session->userdata['logged_in']['display_login']);
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TLS Toruń</title>

  <!-- Bootstrap core CSS -->
  <link href="../../../assets/default/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Own CSS files -->
  <link href="../../../assets/css/style.css" rel="stylesheet">
  <link href="../../../assets/css/about-dropdown.css" rel="stylesheet">
  <link href="../../../assets/css/highlight.css" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Bootstrap core JavaScript -->
  <script src="../../../assets/default/jquery/jquery.min.js"></script>
  <script src="../../../assets/default/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Own JavaScript files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="../../../assets/js/highlight.js"></script>

</head>

<body>
