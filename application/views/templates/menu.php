<!-- Navigation -->
<div class="header-up-nav">
  <img src="../assets/img/navbar-logo.png" style="display: block; margin-left: auto; margin-right: auto;" alt="">
  <!-- <h1><b>Toruńska Liga Siatkówki</b></h1> -->
</div>
<nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color:#002266">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <div class="row">
      <ul class="nav ml-left">
        <li class="no-color">
          <a class="nav-link"></a>
        </li>
        <li class="no-color">
          <a class="nav-link"></a>
          </li>
        <li class="no-color">
          <a class="nav-link"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="start">Start</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news">Aktualności</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="timetable">Terminarz</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="results">Wyniki</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="table">Tabela</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="statistics">Statystyki</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="video">Video</a>
        </li>
        <div class="dropdown">
        <button class="dropbtn">Liga</button>
        <div class="dropdown-content">
          <a href="teams">Drużyny</a>
          <a href="players">Zawodnicy</a>
         <a href="information">Informacje</a>
         <a href="regulations">Regulamin</a>
     </div>
  </div>
  <div class="dropdown">
  <button class="dropbtn">Forum</button>
  <div class="dropdown-content">
    <a href="forum-categories">Ogłoszenia</a>
    <a href="forum-add">Dodaj ogłoszenie</a>
    <a href="forum-my">Moje ogłoszenia</a>
    <a href="forum-message">Wiadomości</a>
</div>
</div>
        <li class="nav-item">
          <a class="nav-link" href="join">Zgłoszenie</a>
        </li>
        <li class="nav-item">
          <?php if($this->session->userdata('logged_in') == TRUE) : ?>
            <a class="nav-link" href="login">Profil</a>
          <?php else : ?>
            <a class="nav-link" href="login">Zaloguj się!</a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
    </div>
  </div>
</nav>
