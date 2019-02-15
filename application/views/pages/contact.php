<!-- Own CSS style -->
  <link href="../../../assets/css/contact.css" rel="stylesheet">
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
		      <li class="nav-item">
            <a class="nav-link" href="community">Społeczność</a>
          </li>
          <div class="dropdown">
          <button class="dropbtn dropbtnClicked">O lidze</button>
          <div class="dropdown-content">
            <a class="nav-link" href="contact">Kontakt
            <span class="sr-only">(current)</a>
            <a href="regulations">Regulamin</a>
           <a href="documents">Dokumenty</a>
       </div>
    </div>
		      <li class="nav-item">
            <a class="nav-link" href="./join">Zgłoś się!</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <form acton="action_page.php">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 left">
        <br/>
        <h1><font color="#3d46c2">Kontakt</font></h1>
        <p><font size="4">E-mail: biuro.tls-torun@torun.pl</p>
          <p><b>Łukasz Bania</b> - koordynator rozgrywek.</p>
          <p>kom. (+48) 612 231 512</p><br/>
          <div class="row">
            <div class="col-md-3">
              <label for="name-surname">Imię i nazwisko (<font color="red">*</font>)</label>
              <input type="text" name="name-surname" required><br/>

              <label for="email">E-mail (<font color="red">*</font>)</label>
              <input type="text" name="email" required><br>

              <label for="phone">Telefon</label>
              <input type="text" name="phone" optional><br/>

              <label for="topic">Temat (<font color="red">*</font>)</label>
              <input type="text" name="topic" required><br/>

            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <label for="message">Wiadomość (<font color="red">*</font>)</label>
                <div class="message">
                  <input type="text" name="message" required>
                <!--  <textarea placeholder="Enter Your text here..."></textarea> -->
                </div>
            </div>
          </div>
          <br>
          <p>Pola oznaczone (<font color="red">*</font>) są wymagane.</p><br>

          <button type="submit" class="registerbtn">Wyślij wiadomość!</button>

        <ul class="list-unstyled">
		  <li> <br/> </li>
        </ul>
      </div>
    </div>
  </div>
