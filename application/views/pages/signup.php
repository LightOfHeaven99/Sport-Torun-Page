<!-- Own CSS style -->
<link href="../../../assets/css/community.css" rel="stylesheet">
<link href="../../../assets/css/about-dropdown.css" rel="stylesheet">

</head>

<body>

	<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="main">TLS Toruń</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
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
		      <li class="nav-item active">
            <a class="nav-link" href="community">Społeczność
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <div class="dropdown">
	          <button class="dropbtn">O lidze</button>
	          <div class="dropdown-content">
	            <a href="contact">Kontakt</a>
	            <a href="regulations">Regulamin</a>
	           <a href="documents">Dokumenty</a>
	       		</div>
    			</div>
		      <li class="nav-item">
            <a class="nav-link" href="join">Zgłoś się!</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

	<!-- Signup window -->
  <div class="container">
		<div class="space50"></div>
    <div class="d-flex justify-content-center">
      <div class="card-signup">
        <div class="card-header">
          <h3>Zarejestruj się</h3>
        </div>
        <div class="card-body">
          <h4 style="color:white">Podaj dane</h4>
					<?php
						if (isset($_GET["error"])) {
							if ($_GET["error"] == "emptyfields") {
								echo '<p class="signuperror">Uzupełnij wszystkie pola!</p>';
							}
							else if ($_GET["error"] == "invalidfirstname") {
								echo '<p class="signuperror">Błędne imię!</p>';
							}
							else if ($_GET["error"] == "invalidlastname") {
								echo '<p class="signuperror">Błędne nazwisko!</p>';
							}
							else if ($_GET["error"] == "invaliduid") {
								echo '<p class="signuperror">Błędny login!</p>';
							}
							else if ($_GET["error"] == "invalidmail") {
								echo '<p class="signuperror">Błędny e-mail!</p>';
							}
							else if ($_GET["error"] == "passwordcheck") {
								echo '<p class="signuperror">Podane hasła nie są poprawne!</p>';
							}
							else if ($_GET["error"] == "usertaken") {
								echo '<p class="signuperror">Login jest już zajęty!</p>';
							}
              else if ($_GET["error"] == "mailtaken") {
                echo '<p class="signuperror">E-mail jest już zajęty!</p>';
              }
						}
						else if (isset($_GET["signup"])) {
							echo '<p class="signupsuccess">Zarejestrowano pomyślnie!</p>';
						}
					?>

          <!-- <form action="register" method="post"> -->
          <?php echo validation_errors(); ?>

          <?= form_open('login/register'); ?>

            <div class="input-group form-group">
              <?php echo form_error('first-name'); ?>
              <input type="text" name="first-name" class="form-control" placeholder="Imię" value="<?php echo set_value('first-name'); ?>">
              <?php echo form_error('last-name'); ?>
              <input type="text" name="last-name" class="form-control" placeholder="Nazwisko" value="<?php echo set_value('last-name'); ?>">
            </div>
            <div class="input-group form-group">
              <?php echo form_error('uid'); ?>
              <input type="text" name="uid" class="form-control" placeholder="Login" value="<?php echo set_value('uid'); ?>">
            </div>
            <div class="input-group form-group">
              <?php echo form_error('pwd'); ?>
              <input type="password" name="pwd" class="form-control" placeholder="Hasło" value="<?php echo set_value('pwd'); ?>">
            </div>
            <div class="input-group form-group">
              <?php echo form_error('pwd-repeat'); ?>
              <input type="password" name="pwd-repeat" class="form-control" placeholder="Powtórz hasło" value="<?php echo set_value('pwd-repeat'); ?>">
            </div>
            <div class="input-group form-group">
              <?php echo form_error('email'); ?>
              <input type="text" name="mail" class="form-control" placeholder="E-mail" value="<?php echo set_value('mail'); ?>">
            </div>
            <div class="row align-items-center remember">
              <input type="checkbox" name="display-login" value="<?php echo set_value('display-login'); ?>">Chcę być widoczny jako mój login
            </div>
            <div class="form-group">
              <input type="submit" name="signup-submit" value="Dołącz" class="btn float-right signup_btn">
            </div>
						<div class="space20"></div>

          <!-- </form> -->
          <?= form_close() ?>

        </div>
      </div>
    </div>
  </div>
