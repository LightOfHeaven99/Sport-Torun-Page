<!-- Page Content -->
  <div class="container">

    <div class="space50"></div>

    <?php
      $attributes = array('class' => 'form-signin');
      echo form_open('mailsent', $attributes);
    ?>

      <!-- JEŚLI ZALOGOWANO -->
      <?php if($this->session->userdata('logged_in') == TRUE) : ?>


      <!-- JEŚLI WYLOGOWANO -->
      <?php else : ?>

  		  <h1><font color="#3d46c2">Kontakt</font></h1>

          <?php
            //echo $this->session->flashdata('login_info');
            echo validation_errors('<div class="alert alert-danger">', '</div>');
          ?>
          <div class="row">
            <div class="col-md-3">
              <label for="name-contact"><b>Imię i nazwisko</b></label>

              <?php
                $data = array(
                  'type'          => 'text',
                  'name'          => 'name-contact',
                  'id'            => 'name-contact',
                  'class'         => 'form-control'
                  //'required'      => 'required'
                );
                echo form_input($data);
              ?>

              <label for="email-contact"><b>E-mail</b></label>

              <?php
                $data = array(
                  'type'          => 'email',
                  'name'          => 'email-contact',
                  'id'            => 'email-contact',
                  'class'         => 'form-control'
                  //'required'      => 'required'
                );
                echo form_input($data);
              ?>

              <label for="topic-contact"><b>Temat</b></label>

              <?php
                $data = array(
                  'type'          => 'text',
                  'name'          => 'topic-contact',
                  'id'            => 'topic-contact',
                  'class'         => 'form-control'
                  //'required'      => 'required'
                );
                echo form_input($data);
              ?>

            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p><b>Wiadomość</b></p>

              <?php
                $data = array(
                  'type'          => 'textarea',
                  'name'          => 'message-contact',
                  'id'            => 'message-contact',
                  'class'         => 'form-control'
                  //'required'      => 'required'
                );
                echo form_input($data);
              ?>

              </div>
            </div>

  				<div class="form-group">

            <?php
              $data = array(
                'type'          => 'submit',
                'name'          => 'mail-submit',
                'class'         => 'registerbtn2',
                'value'         => 'Wyślij wiadomość!'
              );
              echo form_submit($data);
            ?>

          </div>
  				<div class="space30"></div>
  			</div>

  			<div class="card-footer">
  				<div class="d-flex justify-content-center links">
  					Nie masz konta?<a href="register">Zarejestruj się!</a>
  				</div>
  				<div class="d-flex justify-content-center links">
  					<a href="reset-password">Zapomniałeś hasła?</a>
  				</div>
  			</div>

        <!-- KONIEC WARUNKU ZALOGOWANO/WYLOGOWANO -->
        <?php endif; ?>

      <?php echo form_close(); ?>

  </div>
