  <!-- Own CSS style -->
  <link href="../../../assets/css/about-dropdown.css" rel="stylesheet">
  <link href="../../../assets/css/start.css" type='text/css' rel="stylesheet">

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
          <li class="nav-item active">
            <a class="nav-link" href="start">Start
              <span class="sr-only">(current)</span>
            </a>
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
            <a class="nav-link" href="/gallery">Galeria</a>
          </li>
		      <li class="nav-item">
            <a class="nav-link" href="video">Video</a>
          </li>
		      <li class="nav-item">
            <a class="nav-link" href="community">Społeczność</a>
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

  <!-- Page Content -->
  <div class="container">
    <div style="height:50px;"></div>
    <div class="col-12 col-md-7 col-sm-12 hover-header d-none d-lg-block">
      <div class="parallax-wrapper">
       <div class="parallax-card">
         <div class="card__cometOuter">
         </div>
         <div style="height: 20px;"></div>
         <div class="row justify-content-center">
           <div class="col">
             <h4 class="header">Najbliższy mecz</h4>
           </div>
         </div>
         <div class="row justify-content-center">
           <div class="col">
             <h5 class="header">odbędzie się za:</h5>
           </div>
         </div>
         <div class="row justify-content-center">
           <div id="clockdiv" class="clockdiv card__circle">
             <div style="background-color: #333EE1;">
               <span class="days"></span>
               <div class="smalltext">Dni</div>
             </div>
             <div style="background-color: #E1D633;">
               <span class="hours"></span>
               <div class="smalltext">Godzin</div>
             </div>
             <div style="background-color: #333EE1;">
               <span class="minutes"></span>
               <div class="smalltext">Minut</div>
             </div>
             <div style="background-color: #E1D633;">
               <span class="seconds"></span>
               <div class="smalltext">Sekund</div>
             </div>
           </div>
         </div>
         <div style="height: 20px;"></div>
         <div class="row justify-content-center">
            <div class="row" style="padding: 2rem;">
              <div class="col-sm-4"><h6 class="header">Toruńskie Pierniki</h6></div>
              <div class="col-sm-4"><h6 class="header">:</h4></div>
              <div class="col-sm-4"><h6 class="header">Wrocławska Zgroza</h6></div>
            </div>
         </div>
        </div>
      </div>
      <div style="height: 30px;"></div>
    </div>
  </div>

  <script src="../../../assets/js/blueimp-gallery.min.js"></script>
  <script src="../../../assets/js/countDown.js"></script>
  <script src="../../../assets/js/parallax-card.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127827042-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-127827042-3');
  </script>
