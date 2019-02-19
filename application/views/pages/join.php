<!-- Page Content -->
<div class="join-bg">
  <form acton="action_page.php">
  <div class="container">
    <br/>
    <h2>Wypełnij ten formularz, aby zgłosić swoją drużynę!</h2>
    <hr>

<div class="right">
  <div class="col-md-20">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consectetur felis cursus, mollis justo et, aliquet massa. Proin sem dui, auctor nec neque ut, fringilla sodales mauris. Vestibulum convallis ultricies commodo. Duis bibendum pharetra sem vitae feugiat. Duis vulputate et metus id efficitur. Donec vehicula interdum augue, id elementum elit tempus vel. Phasellus ultrices maximus eleifend. Mauris condimentum leo eu risus vestibulum, in consectetur eros ullamcorper.

Phasellus feugiat ante eu mauris mattis, ac sagittis diam pretium. Vivamus metus dui, fermentum ut nulla dapibus, efficitur tempor ipsum. Aenean ipsum urna, dignissim a urna sit amet, porta volutpat neque. Donec at diam sed sapien aliquet bibendum a vel ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
   </div>
</div>

    <div class="row">
    <div class="col-md-6">
    <label for"name-of-team"><b>Pełna nazwa drużyny:</b></label>
    <input type="text" name="name-of-team" required><br/><br/>
  </div>
</div>

    <p><b>Adres firmy lub zgłaszającego:</b></p>

    <div class="row">
    <div class="col-md-3">
    <label for="street"><b>Ulica</b></label>
    <input type="text" name="street" required><br/>
  </div>
    <div class="col-md-3">
    <label for="city"><b>Miejscowość</b></label>
    <input type="text" name="city" required><br/>
  </div>
</div>

    <div class="row">
    <div class="col-md-3">
    <label for="post-code"><b>Kod Pocztowy</b></label>
    <input type="text" name="post-code" required><br/>
  </div>

    <!-- za NIP chyba lepiej podstawić text(String) aniżeli wartość liczbową -->
    <div class="col-md-3">
    <label for="nip"><b>NIP<font color="red">*</font></b></label>
    <input type="text" name="nip" optional><br/><br/>
  </div>
</div>
<br/>

<div class="right">
<div class="col-md-20">
    <p align="justify"><input type="checkbox" id="myCheck" onclick="myFunction()" required> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consectetur felis cursus, mollis justo et, aliquet massa. Proin sem dui, auctor nec neque ut, fringilla sodales mauris. Vestibulum convallis ultricies commodo. Duis bibendum pharetra sem vitae feugiat. Duis vulputate et metus id efficitur. Donec vehicula interdum augue, id elementum elit tempus vel. Phasellus ultrices maximus eleifend. Mauris condimentum leo eu risus vestibulum, in consectetur eros ullamcorper. Phasellus feugiat ante eu mauris mattis, ac sagittis diam pretium.</p>
 </div>
</div>

    <div class="row">
    <div class="col-md-6">
    <label for="name-surname"><b>Imię i nazwisko osoby zgłaszającej:</b></label><br/>
    <input type="text" name="name-surname" required><br/>
  </div>
</div>

    <div class="row">
    <div class="col-md-3">
    <label for="phone"><b>Telefon:</b></label><br/>
    <input type="text" name="phone" required><br/>
  </div>

    <div class="col-md-3">
    <label for="email-adress"><b>Adres email:</b></label><br/>
    <input type="text" name="email-adress" required><br/>
  </div>
</div>

    <div class="row">
    <div class="col-md-3">
    <label for="id"><b>Nr dowodu osobistego:</b></label><br/>
    <input type="text" name="id" required><br/>
  </div>

    <div class="col-md-3">
    <label for="pesel"><b>Nr PESEL zgłaszającego:</b></label><br/>
    <input type="text" name="pesel" required><br/>
  </div>
</div>

<p><font color="red">*</font> To pole nie jest wymagane.</p>

<button type="submit" class="registerbtn">Zgłoś się!</button>

    <div class="row">
      <div class="col-lg-12 text-center">
        <ul class="list-unstyled">
		  <li> </br> </li>
        </ul>
      </div>
    </div>

  </div>
</div>

  <!-- Functional scripts -->
  <script>
  function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
    }
  }
  </script>
