<script src="../../../assets/js/checkbox.js"></script>

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

    <?php
      $attributes = array('class' => 'form-signin');
      echo form_open('teamsent', $attributes);
    ?>

    <div class="row">
    <div class="col-md-6">
    <label for"name-of-team"><b>Pełna nazwa drużyny:</b></label>
    <?php
      $data = array(
        'type'          => 'textarea',
        'name'          => 'team-join',
        'id'            => 'team-join',
        'class'         => 'form-control'
        //'required'      => 'required'
      );
      echo form_input($data);
    ?>
  </div>
</div>

    <p><b>Adres firmy lub zgłaszającego:</b></p>

    <div class="row">
    <div class="col-md-3">
    <label for="street"><b>Ulica</b></label>
    <?php
      $data = array(
        'type'          => 'textarea',
        'name'          => 'street-join',
        'id'            => 'street-join',
        'class'         => 'form-control'
        //'required'      => 'required'
      );
      echo form_input($data);
    ?>
  </div>
    <div class="col-md-3">
    <label for="city"><b>Miejscowość</b></label>
    <?php
      $data = array(
        'type'          => 'textarea',
        'name'          => 'city-join',
        'id'            => 'city-join',
        'class'         => 'form-control'
        //'required'      => 'required'
      );
      echo form_input($data);
    ?>
  </div>
</div>

    <div class="row">
    <div class="col-md-3">
    <label for="post-code"><b>Kod Pocztowy</b></label>
    <?php
      $data = array(
        'type'          => 'textarea',
        'name'          => 'postcode-join',
        'id'            => 'postcode-join',
        'class'         => 'form-control'
        //'required'      => 'required'
      );
      echo form_input($data);
    ?>
  </div>

    <!-- za NIP chyba lepiej podstawić text(String) aniżeli wartość liczbową -->
    <div class="col-md-3">
    <label for="nip"><b>NIP<font color="red">*</font></b></label>
    <?php
      $data = array(
        'type'          => 'textarea',
        'name'          => 'nip-join',
        'id'            => 'nip-join',
        'class'         => 'form-control'
        //'required'      => 'required'
      );
      echo form_input($data);
    ?>
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
    <?php
      $data = array(
        'type'          => 'textarea',
        'name'          => 'name-join',
        'id'            => 'name-join',
        'class'         => 'form-control'
        //'required'      => 'required'
      );
      echo form_input($data);
    ?>
  </div>
</div>

    <div class="row">
    <div class="col-md-3">
    <label for="phone"><b>Telefon:</b></label><br/>
    <?php
      $data = array(
        'type'          => 'textarea',
        'name'          => 'phone-join',
        'id'            => 'phone-join',
        'class'         => 'form-control'
        //'required'      => 'required'
      );
      echo form_input($data);
    ?>
  </div>

    <div class="col-md-3">
    <label for="email-adress"><b>Adres email:</b></label><br/>
    <?php
      $data = array(
        'type'          => 'textarea',
        'name'          => 'email-join',
        'id'            => 'email-join',
        'class'         => 'form-control'
        //'required'      => 'required'
      );
      echo form_input($data);
    ?>
  </div>
</div>

    <div class="row">
    <div class="col-md-3">
    <label for="id"><b>Nr dowodu osobistego:</b></label><br/>
    <?php
      $data = array(
        'type'          => 'textarea',
        'name'          => 'idcard-join',
        'id'            => 'idcard-join',
        'class'         => 'form-control'
        //'required'      => 'required'
      );
      echo form_input($data);
    ?>
  </div>

    <div class="col-md-3">
    <label for="pesel"><b>Nr PESEL zgłaszającego:</b></label><br/>
    <?php
      $data = array(
        'type'          => 'textarea',
        'name'          => 'pesel-join',
        'id'            => 'pesel-join',
        'class'         => 'form-control'
        //'required'      => 'required'
      );
      echo form_input($data);
    ?>
  </div>
</div>

<p><font color="red">*</font> To pole nie jest wymagane.</p>

<?php
  $data = array(
    'type'          => 'submit',
    'name'          => 'join-submit',
    'class'         => 'registerbtn',
    'value'         => 'Zgłoś się!'
  );
  echo form_submit($data);
?>

    <div class="row">
      <div class="col-lg-12 text-center">
        <ul class="list-unstyled">
		  <li> </br> </li>
        </ul>
      </div>
    </div>

    <?php echo form_close(); ?>

  </div>
</div>
