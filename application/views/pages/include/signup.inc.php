<?php
if (isset($_POST['signup-submit'])) {

  require 'dbh.inc.php';

  $firstName = $_POST['first-name'];
  $lastName = $_POST['last-name'];
  $username = $_POST['uid'];
  $password = $_POST['pwd'];
  $passwrodRepeat = $_POST['pwd-repeat'];
  $email = $_POST['email'];
  $displayLogin = isset($_POST['display-login']) ? 1 : 0;

  if(empty($username) || empty($firstName) || empty($lastName) || empty($password) || empty($passwrodRepeat) || empty($email)){
    header("Location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email);
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../signup.php?error=invaliduid");
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&uid=".$username);
    exit();
  }
  else if (!preg_match("/^[a-ząćęłńóśźżA-ZĄĆĘŁŃÓŚŹŻ]*$/", $firstName)) {
    header("Location: ../signup.php?error=invalidfirstname&email=".$email);
    exit();
  }
  else if (!preg_match("/^[a-ząćęłńóśźżA-ZĄĆĘŁŃÓŚŹŻ]*$/", $lastName)) {
    header("Location: ../signup.php?error=invalidlastname&email=".$email);
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invaliduid&email=".$email);
    exit();
  }
  else if ($password !== $passwrodRepeat){
    header("Location: ../signup.php?error=passwordcheck&uid=".$username."&email=".$email);
    exit();
  }
  else {

    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultEmailCheck = mysqli_stmt_num_rows($stmt);

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);

      if ($resultEmailCheck > 0) {
        header("Location: ../signup.php?error=mailtaken&user=".$username);
        exit();
      }
      else if ($resultCheck > 0) {
        header("Location: ../signup.php?error=usertaken&email=".$email);
        exit();
      }
      else {
         $sql = "INSERT INTO users (firstNameUsers, lastNameUsers, uidUsers, pwdUsers, emailUsers, displayLogin) VALUES (?, ?, ?, ?, ?, ?);";
         $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("Location: ../signup.php?error=sqlerror");
           exit();
         }
         else {
           $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

           mysqli_stmt_bind_param($stmt, "sssssi", $firstName, $lastName, $username, $hashedPwd, $email, $displayLogin);
           mysqli_stmt_execute($stmt);
           header("Location: ../signup.php?signup=success");
           exit();
         }

      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../signup.php");
  exit();
}

 ?>
