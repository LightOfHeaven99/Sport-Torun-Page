<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nazwa</title>

  <!-- Bootstrap core CSS -->
  <link href="../default/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Own CSS style -->
  <link href="../css/community.css" rel="stylesheet">

  <!-- Font Awesome icons -->
  <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>
  <header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="./main.html">Nazwa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="./start.html">Start</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./news.html">Aktualności</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./timetable.html">Terminarz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./results.html">Wyniki</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./table.html">Tabela</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./statistics.html">Statystyki</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./gallery.html">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./video.html">Video</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="./community.html">Społeczność
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.html">O lidze</a>
            </li>
            <?php
            if (isset($_SESSION['userId'])) {
                echo  '<li class="nav-item">
                        <a class="nav-link" href="#">ADMIN</a>
                       </li>';
            }
            else {
                echo  '<li class="nav-item">
                        <a class="nav-link" href="./join.html">Zgłoś się!</a>
                       </li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <!-- Bootstrap core JavaScript -->
  <script src="../default/jquery/jquery.min.js"></script>
  <script src="../default/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
