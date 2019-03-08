<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.fa{}


.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:2000px">

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">


      <h2 class="w3-center"></h2>

<div class="w3-content w3-display-container">
	<?php
		$query = $this->db->query("SELECT * FROM news ORDER BY id DESC");

		$counter = 0;
		foreach ($query->result() as $row)
		{
			echo '<img src="data:image/jpeg;base64,'.base64_encode( $row->image ).'" style="width:100%" class="mySlides w3-animate-fading"/>';
	  	//<img class="mySlides w3-animate-fading" src="../assets/img/siat1.jpg" style="width:100%">

			$counter++;
			if($counter == 3) {
				break;
			}

		} ?>

  <div class="w3-display-center w3-container w3-padding-16 w3-indigo">
    <p align="center" style="font-size: 20px;"><b>Toruńska Liga Siatkówki - <a href="join" style="color: #ffd200;">dołącz</a> już teraz!</b></p>
  </div>
  <!-- <button class="w3-button w3-indigo w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-indigo w3-display-right" onclick="plusDivs(1)">&#10095;</button> -->
</div>
<br><br>

<div class="parallax-wrapper">
	<div style="background-color:#3F51B5;"
 <div class="parallax-card">
	 <div class="card__cometOuter">
	 </div>
	 <div style="height: 20px;"></div>
	 <div class="row justify-content-center">
		 <div class="col">
			 <center><h4 class="header">Najbliższy mecz</h4></center>
		 </div>
	 </div>
	 <div class="row justify-content-center">
		 <div class="col">
			 <center><h5 class="header">odbędzie się za:</h5></center>
		 </div>
	 </div>
	 <div class="row justify-content-center">
		 <center><div id="clockdiv" class="clockdiv card__circle">
			 <div style="background-color:  #e6b800;">
				 <span class="days" style="background-color: #e6b800 "></span>
				 <div class="smalltext"><b>Dni</b></div>
			 </div>
			 <div style="background-color:  #e6b800;">
				 <span class="hours" style="background-color: #e6b800 "></span>
				 <div class="smalltext"><b>Godzin</b></div>
			 </div>
			 <div style="background-color:  #e6b800;">
				 <span class="minutes" style="background-color: #e6b800"></span>
				 <div class="smalltext"><b>Minut</b></div>
			 </div>
			 <div style="background-color:  #e6b800;">
				 <span class="seconds" style="background-color: #e6b800"></span>
				 <div class="smalltext"><b>Sekund</b></div>
			 </div>
		 </div></center>
	 </div>
	 <div style="height: 20px;"></div>
	 <div class="row justify-content-center">
			<div class="row" style="padding: 2rem;">
				<div class="row-sm-5"><center><h6 class="header"><img src="../assets/downloads/Schemat Logo.png" style="height: 50px; width: 50px;"></img>Drużyna Pierwsza</h6></center></div>
				<div class="row-sm-5"><center><h6 class="header">:</h4></center></div>
				<div class="row-sm-5"><center><h6 class="header">Drużyna Druga<img src="../assets/downloads/Schemat Logo.png" style="height: 50px; width: 50px;"></img></h6></center></div>
			</div>
	 </div>
	</div>
</div>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h2>Liga rusza już w kwietniu!</h2>
          <h3><span class="w3-opacity">
						<?php
							$today = date("Y-m-d H:i:s");

							list($year, $month, $day) = explode("-", $today);
							$day = substr($day, 0, 2);

							echo $day.'.'.$month.'.'.$year;

						?></span></h3>
        </div>

        <div class="w3-justify">
          <br>
          <p><strong>Serdecznie zapraszamy</strong> wszystkich chętnych do zapisania się do Toruńskiej Ligi Siatkówki! Dostępny jest Formularz Zgłoszeniowy w zakładce "<a href="join">Zgłoszenie</a>", gdzie można wypełnić i przesłać potrzebne dokumenty, aby zgłosić się do nadchodzących rozgrywek. W razie jakichkolwiek pytań, proszę kontaktować się ze mną za pomocą Formularza Kontaktowego, który znajduje się w stopce strony.</p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
          </div>
        </div>
      </div>

			<!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h2>Czego szukasz?</h2>
        </div>

        <div class="w3-justify">
          <br>
          <p><strong>Nie zwlekaj</strong>, tylko przejdź do zakładki "<a href="login">Zaloguj się!</a>" i załóż swoje unikalne konto! Będąc użytkownikiem naszej strony możesz m.in. lajkować i komentować posty, dodawać i reagować na ogłoszenia innych użytkowników, a także głosować na zwycięzcę nadchodzącego meczu.</p>
					<br>
					<p><strong>Profesjonalny fotograf</strong> zadba, aby w zakładkach "<a href="gallery">Galeria</a>" oraz "<a href="video">Video</a>" pojawiały się na bieżąco relacje z najgorętszych meczów tego sezonu. Jeśli to wciąż będzie dla Was za mało, więcej materiałów możecie poszukać na naszym <a href="https://www.facebook.com/tls.torun/">facebooku</a>.</p>
					<br>
					<p><strong>Rzecz 3</strong></p>
				</div>

      </div>

      <hr>
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-blue w3-margin">
        <div class="w3-container w3-indigo">
          <h4>Czym jest TLS?</h4>
          <p><b>Toruńska Liga Siatkówki</b> to nowa inicjatywa sportowa, która będzie zrzeszać każdego, kto zechce zebrać swoją drużynę i wystartować w rozgrywkach. Zapraszamy do zapisania się i spróbowania swoich sił w piłce siatkowej!</p>
        </div>
      </div>
      <hr>

      <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-indigo">
          <h4>Najnowsze posty</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
					<?php
						$counter = 0;
						foreach ($query->result() as $row) :
					?>
          <li class="w3-padding-16">
            <span class="w3-large"><?= $row->title; ?></span>
            <br>
            <span><font size="2"><?= substr($row->content, 0, 180).'...'; ?></font></span>
          </li>
					<?php
						$counter++;
						if($counter == 4) {
							break;
						}

						endforeach;
					?>
        </ul>
      </div>
      <hr>

      <!-- Advertising -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-indigo">
          <h4>Reklama</h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:200px">
            <span class="w3-display-middle">[miejsce na <b>Twoją</b> reklamę]
																						<center><font size="1"><a href="contact" style="text-align: center;">napisz do nas</a></font><center>
						</span>
          </div>
        </div>
      </div>
      <hr>

      <!-- Inspiration -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-indigo">
          <h4>Teaser</h4>
        </div>
        <div class="w3-row-padding w3-white">
          <div class="w3-col s12">
            <div class="videoWrapper">
      <!-- Copy & Pasted from YouTube -->
      <iframe width="560" height="500" src="http://www.youtube.com/embed/UL8_o0RaHf0" frameborder="0" allowfullscreen></iframe>
  </div>
          <div class="w3-col s6">
         </div>
        </div>
      </div>
		</div>
      <hr>
			<br>

      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-indigo">
          <h4 style="text-align: center;">OBSERWUJ NAS</h4>
        </div>
        <div class="w3-container w3-large w3-padding" style="text-align: center;">
          <a href="https://www.facebook.com/tls.torun/" class="fa fa-facebook" style="padding: 15px; width: 50px;"></a>
          <a href="#" class="fa fa-youtube" style="padding: 15px; width: 50px;"></a>
          <a href="#" class="fa fa-instagram" style="padding: 15px; width: 50px;"></a>

        </div>
      </div>
      <hr>

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script src="../../../assets/js/blueimp-gallery.min.js"></script>
<script src="../../../assets/js/countDown.js"></script>
<!-- <script src="../../../assets/js/parallax-card.js"></script> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127827042-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127827042-3');
</script>

<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Polubiono";
}
</script>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>

</body>
</html>
