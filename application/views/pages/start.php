<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:2000px">

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h2>Liga rusza już w kwietniu!</h2>
          <h3><span class="w3-opacity">3 Marca, 2019</span></h3>
        </div>

        <div class="w3-justify">
          <br>
          <p><strong>Serdecznie zapraszamy</strong> wszystkich chętnych do zapisania się do Toruńskiej Ligi Siatkówki! Dostępny jest Formulraz Zgłoszeniowy w zakładce "Zgłoszenie", gdzie można wypełnić i przesłać potrzebne dokumenty, aby zgłosić się do nadchodzących rozgrywek. W razie jakichkolwiek pytań, proszę kontaktować się ze mną za pomocą Formularza Kontaktowego, który znajduje się w stopce strony.</p>
          <p class="w3-left"><button class="w3-button w3-indigo w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-indigo" onclick="myFunction('demo1')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white">1</span></button></p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
          </div>
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
          <p>TLS czyli Toruńska Liga Siatkówki to nowa inicjatywa sportowa, która będzie zrzeszać każdego, kto zechce zebrać swoją drużynę i wystartować w rozgrywkach. Zapraszamy do zapisania się i spróbowania swoich sił w piłce siatkowej!.</p>
        </div>
      </div>
      <hr>

      <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-indigo">
          <h4>Popularne Posty</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <li class="w3-padding-16">
            <span class="w3-large">Liga rusza już w kwietniu!</span>
            <br>
            <span><font size="2,5">Zapisz się już dziś.</font></span>
          </li>
          <li class="w3-padding-16">
            <span class="w3-large">Zapraszamy do współpracy!</span>
            <br>
            <span><font size="2,5">Zachęcamy do kontaktu.</font></span>
          </li>
          <li class="w3-padding-16">
            <span class="w3-large">Zbierz swoją drużynę!</span>
            <br>
            <span><font size="2,5">Wraz ze znajomymi pokonaj tytanów siatkówki.</font></span>
          </li>
          <li class="w3-padding-16">
            <span class="w3-large">Strona w budowie!</span>
            <br>
            <span><font size="2,5">Cały czas pracujemy, aby strona się rozwijała.</font></span>
          </li>
        </ul>
      </div>
      <hr>

      <!-- Advertising -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-indigo">
          <h4>Reklamy</h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:200px">
            <span class="w3-display-middle">Miejsce na reklamę</span>
          </div>
        </div>
      </div>
      <hr>

      <!-- Inspiration -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-indigo">
          <h4>Nasz film promocyjny!</h4>
        </div>
        <div class="w3-row-padding w3-white">
          <div class="w3-col s6">
            <iframe width="250" height="250"
            src="https://www.youtube.com/embed/UL8_o0RaHf0">
            </iframe>
          </div>
          <div class="w3-col s6">
         </div>
        </div>
      </div>
      <hr>

      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-indigo">
          <h4>Obserwuj Nas!</h4>
        </div>
        <div class="w3-container w3-xlarge w3-padding">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
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
  x.innerHTML = "✓ Liked";
}
</script>

</body>
</html>
