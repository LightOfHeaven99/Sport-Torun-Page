  <!-- Own CSS style -->
  <link href="../../../assets/css/community.css" rel="stylesheet">
  <link href="../../../assets/css/about-dropdown.css" rel="stylesheet">

  <!-- Font Awesome icons -->
  <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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

  <!-- Login widnow -->
  <div class="container">
      <div class="space50"></div>
      <div class="space50"></div>
  		<div class="d-flex justify-content-center">
  			<div class="card">


    <!--
					<div class="card-header">
						<h3>Zalogowany jako</h3>
					</div>
					<div class="card-header">
						<div class ="space10"></div>
						<h4 style="color: white; text-align: center;">Imię Nazwisko</h4>
						<p style="color: gray; text-align: center;">(pod taką nazwą będziesz komentować)</p>
					</div>
					<div class="card-body">
						<a href="#" style="color: #8AFF8C;">Zmień wyświetlanie na login</a></br>
						<a href="#" style="color: #8AFF8C;">Edytuj swoje dane</a></br>
						<a href="#" style="color: #8AFF8C;">Usuń konto</a>
					</div>
					<div class="card-footer">
						<div class="form-group">
							<input type="submit" value="Wyloguj" name="logout-submit" class="btn float-right logout_btn">
						</div>
						<div class="space20"></div>
					</div>
    -->



          <?php echo form_open('login/login'); ?>
  					<div class="card-header">
  						<h3>Zaloguj się</h3>
  						<div class="d-flex justify-content-end social_icon">
  							<span><i class="fab fa-facebook-square"></i></span>
  							<span><i class="fab fa-google-plus-square"></i></span>
  							<span><i class="fab fa-twitter-square"></i></span>
  						</div>
  					</div>

  					<div class="card-body">
  						<div class="input-group form-group">
  							<div class="input-group-prepend">
  								<span class="input-group-text"><i class="fas fa-user"></i></span>
  							</div>
  							<input type="text" name="uid" class="form-control" placeholder="login...">
  						</div>
  						<div class="input-group form-group">
  							<div class="input-group-prepend">
  								<span class="input-group-text"><i class="fas fa-key"></i></span>
  							</div>
  							<input type="password" name="pwd" class="form-control" placeholder="hasło...">
  						</div>
  						<div class="row align-items-center remember">
  							<input type="checkbox">Zapamiętaj mnie
  						</div>
  						<div class="form-group">
  							<input type="submit" name="login-submit" value="OK" class="btn float-right login_btn">
  						</div>
  						<div class="space30"></div>
  					</div>
          <?php echo form_close(); ?>

					<div class="card-footer">
						<div class="d-flex justify-content-center links">
							Nie masz konta?<a href="signup">Zarejestruj się!</a>
						</div>
						<div class="d-flex justify-content-center links">
							<a href="reset-password">Zapomniałeś hasła?</a>
						</div>
					</div>


  			</div>
  		</div>
  	</div>
