<!-- Page Content -->
  <div class="container">

    <div class="space50"></div>

    <?php
      $attributes = array('class' => 'form-signin');
      echo form_open('teamsent', $attributes);
    ?>

	  <h1><font color="#3d46c2">Wypełnij ten formularz, aby zgłosić swoją drużynę!</font></h1><
    <br>
      <?php
        //echo $this->session->flashdata('login_info');
        echo validation_errors('<div class="alert alert-danger">', '</div>');
      ?>
      <div class="row">
        <div class="col-md-4">
          <label for="team-join"><b>Pełna nazwa drużyny</b></label>

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
          <br>

          <h5>Adres firmy/osoby</h5>
          <label for="street-join"><b>Ulica z numerem</b></label>

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

          <label for="city-join"><b>Miejscowość</b></label>

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

          <label for="postcode-join"><b>Kod pocztowy</b></label>

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

          <label for="nip-join"><b>NIP<font color="#ce5f52">*</font></b></label>

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

          <label for="name-join"><b>Imię i nazwisko zgłaszającego</b></label>

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

          <label for="idcard-join"><b>Numer dowodu</b></label>

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

          <p><b>PESEL</b></p>

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

          <label for="phone-join"><b>Telefon</b></label>

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

          <label for="email-join"><b>E-mail</b></label>

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

          <p><font color="#ce5f52">*pole nieobowiązkowe</font></p>

        </div>
      </div>

        <br>
          <p align="justify"><input type="checkbox" id="myCheck" onclick="myFunction()" required> Zgadzam się z Polityką Prywatności<br>
            <p><font size="2.5">Administratorem Twoich danych osobowych jest organizator ligi Toruńska Liga Siatkówki (w skrócie jako ,,TLS’’). Przetwarzamy Twoje dane osobowe zawarte w niniejszym formularzu, aby umożliwić Ci kontakt z nami poprzez zadanie pytania.</font><br>
            <a href="../assets/downloads/Polityka Prywatności.pdf"><font color="#e6b800" size="2.5">Polityka Prywatności</font></a></p><br>

            <br>
            <br>
            <br>

            <p><font size="2.5">Po pozytywnym rozpatrzeniu zgłoszenia otrzymasz mail zwrotny z dalszą instrukcją.</font></p><br>
            <p><font size="2.5">Przygotuj LOGO drużyny w rozmiarze <b>600</b>x<b>600</b> i formacie <b>PNG</b> (<a href="../assets/downloads/Schemat Logo.png"><font color="#e6b800" size="2.5">przykład</font></a>).</font></p><br>
            <p><font size="2.5">Pobierz i wypełnij <a href="../assets/downloads/Skład Drużyny.xml"><font color="#e6b800" size="2.5">tabelę z zawodnikami</font></a>, a gotową zapisz do formatu <b>PDF</b>.</font></p><br>

            <?php /*

            <p><b>Załączniki:</b></p>
              <span><font size="2.5">Wymogi: logo drużyny -> PNG (400x400) / skład drużyny -> PDF / potwierdzenie wpłaty -> PDF</font></span><br>

              <?php
                $data = array(
                  'type'          => 'file',
                  'name'          => 'logo-join',
                  'id'            => 'logo-join',
                  'accept'        => 'image/x-png',
                  'placeholder'   => 'Wstaw logo'
                );
                echo form_input($data);
              ?>

              <script>
                $("input[type=file]").checkImageSize();
              </script>

              <?php
                $data = array(
                  'type'          => 'file',
                  'name'          => 'squad-join',
                  'id'            => 'squad-join',
                  'accept'        => 'application/pdf',
                  'placeholder'   => 'Wstaw skład'
                );
                echo form_input($data);
              ?>

              <?php
                $data = array(
                  'type'          => 'file',
                  'name'          => 'payment-join',
                  'id'            => 'payment-join',
                  'accept'        => 'application/pdf',
                  'placeholder'   => 'Wstaw potwierdzenie'
                );
                echo form_input($data);
              ?>
              <div class="file-path-wrapper">

              */?>

              </div>
            <br>

        <?php
          $data = array(
            'type'          => 'submit',
            'name'          => 'team-submit',
            'class'         => 'registerbtn2',
            'value'         => 'Zgłoś drużynę!'
          );
          echo form_submit($data);
        ?>

      <?php echo form_close(); ?>

  </div>
