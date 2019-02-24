  <!-- Page Content -->
  <form acton="action_page.php">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 left">
        <br/>

        <?php
          $attributes = array('class' => 'form-mailer');
          echo form_open('sendmail', $attributes);
        ?>

          <h1><font color="#3d46c2">Kontakt</font></h1>
            <div class="row">
              <div class="col-md-3">
                <label for="name-surname"><b>Imię i nazwisko</b></label>
                <input type="text" name="name-surname" required><br/>

                <label for="email"><b>E-mail</b></label>
                <input type="text" name="email" required><br>

                <label for="topic"><b>Temat</b></label>
                <input type="text" name="topic" required><br/>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <p><b>Wiadomość</b></p>
              <!--  <label for="message"><b>Wiadomość</b></label>
                  <div class="message">
                    <input type="text" name="message" required> -->
                    <textarea >
                      </textarea>
                  </div>
              </div>
            <br>
            <p align="justify"><input type="checkbox" id="myCheck" onclick="myFunction()" required> Zgadzam się z Polityką Prywatności<br>
              <p><font size="2.5">Administratorem Twoich danych osobowych jest organizator ligi Toruńska Liga Siatkówki (w skrócie jako ,,TLS’’). Przetwarzamy Twoje dane osobowe zawarte w niniejszym formularzu, aby umożliwić Ci kontakt z nami poprzez zadanie pytania.</font><br>
              <a href="../assets/downloads/Polityka Prywatności.pdf"><font color="#e6b800" size="2.5">Polityka Prywatności</font></a></p>

            <?php
              $data = array(
                'type'          => 'submit',
                'name'          => 'mail-submit',
                'class'         => 'registerbtn2',
                'value'         => 'Wyślij wiadomość!'
              );
              echo form_submit($data);
            ?>

          <?php echo form_close(); ?>

          <br><br>
          <p><b>TLS Toruńska Liga Siatkówki</b></p>
          <p><font size="4">E-mail: biuro@torun.pl</p>
            <p>Telefon: +48 612 231 512</p>
            <p><b>Łukasz Bania</b> - koordynator rozgrywek.</p><br>
      </div>
    </div>
  </div>
