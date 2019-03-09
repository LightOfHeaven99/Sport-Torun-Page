<!-- Page Content -->
<div class="forum-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="space20"></div>
        <div class="card" style="width: auto;">
          <div class="card-header">
            <?php if($this->session->userdata('logged_in') == TRUE) : ?>
              <?php if($this->session->userdata('is_active') == 1) : ?>
            <div class="row">
              <div class="col-sm-6">

                <?php
                  $attributes = array('class' => 'form-signin');
                  echo form_open('messagesent', $attributes); //zdefiniować drogę i funkcję!
                ?>

                <br><br>
                <h1 style="color: white; font-size: 30px;">Napisz wiadomość</h1>
                <br>

                <label style="color: white;" for="login-message">Odbiorca</label>

                <?php
                  $data = array(
                    'type'          => 'textarea',
                    'name'          => 'login-message',
                    'id'            => 'login-message',
                    'class'         => 'form-control'
                    //'required'      => 'required'
                  );
                  echo form_input($data);
                ?>

                <label style="color: white;" for="topic-message">Temat</label>

                <?php
                  $data = array(
                    'type'          => 'textarea',
                    'name'          => 'topic-message',
                    'id'            => 'topic-message',
                    'class'         => 'form-control'
                    //'required'      => 'required'
                  );
                  echo form_input($data);
                ?>

                <label style="color: white;" for="content-message">Wiadomość</label>

                <?php
                  $data = array(
                    'type'          => 'textarea',
                    'name'          => 'content-message',
                    'id'            => 'content-message',
                    'class'         => 'form-control'
                    //'required'      => 'required'
                  );
                  echo form_input($data);
                ?>



                <?php
                  $data = array(
                    'type'          => 'submit',
                    'name'          => 'message-submit',
                    'class'         => 'registerbtn2 float-left',
                    'value'         => 'Wyślij'
                  );
                  echo form_submit($data);
                ?>
              </div>
              <div class="col-sm-6">

                <br><br>
                <h1 style="color: white; font-size: 30px;">Odebrane</h1>
                <br>

              </div>

            <?php else : ?>
              <p style="vertical-align: center; text-align: center; color: white;"><i><a href="enter-activation-code" style = "color: #364FD2;">Aktywuj konto</a>, aby dodać ogłoszenie.</i></p>
            <?php endif; ?>

        <?php else : ?>

           <br><br>

           <p style="vertical-align: center; text-align: center; color: white;"><i><a href="login" style = "color: #364FD2;">Zaloguj się</a>, aby dodać ogłoszenie.</i></p>

         <?php endif; ?>

          </div>
        </div>
        <div class="space50"></div>
      </div>
    </div>
  </div>


</div>
