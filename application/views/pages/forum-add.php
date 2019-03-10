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
            <br>
            <h1 style="color: white; font-size: 70px;"><b>Dodaj ogłoszenie</b></h1>
            <br>
          </div>
              <?php
                $attributes = array('class' => 'form-signin');
                echo form_open_multipart('forumadded', $attributes);
              ?>

              <?php
                //echo $this->session->flashdata('login_info');
                echo validation_errors('<div class="alert alert-danger">', '</div>');
              ?>

              <label class="float-left" style="text-align: left; color: white;" for="">Kategoria:</label><br>
              <div class="row align-items-center remember">

                <?php
                  $data = array(
                    'type'          => 'radio',
                    'name'          => 'category-squads-forum',
                    'id'            => 'category-squads-forum',
                    'checked'
                  );
                  echo form_input($data);
                ?>

                <label for="category-squads-forum" style="color: white; padding-left: 3px; padding-top: 7px;">Poszukuję</label>

                <?php
                  $data = array(
                    'type'          => 'radio',
                    'name'          => 'category-stuff-forum',
                    'id'            => 'category-stuff-forum'
                  );
                  echo form_input($data);
                ?>
                <label for="category-stuff-forum" style="color: white; padding-left: 3px; padding-top: 7px;">Sprzęt</label>


                <?php
                  $data = array(
                    'type'          => 'radio',
                    'name'          => 'category-others-forum',
                    'id'            => 'category-others-forum'
                  );
                  echo form_input($data);
                ?>
                <label for="category-others-forum" style="color: white; padding-left: 3px; padding-top: 7px;">Inne</label>
              </div>

              <div class="row">
                <div class="col-md-3">

                  <label style="color: white;" for="topic-contact">Temat</label>

                  <?php
                    $data = array(
                      'type'          => 'textarea',
                      'name'          => 'topic-forum',
                      'id'            => 'topic-forum',
                      'class'         => 'form-control'
                      //'required'      => 'required'
                    );
                    echo form_input($data);
                  ?>

                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">

                    <label style="color: white;" for="content-forum">Treść</label>

                    <?php
                      $data = array(
                        'type'          => 'textarea',
                        'name'          => 'content-forum',
                        'id'            => 'content-forum',
                        'class'         => 'form-control'
                        //'required'      => 'required'
                      );
                      echo form_input($data);
                    ?>

                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-3">

                      <label style="color: white;" for="phone-forum">Telefon</label>
                        <?php
                          $data = array(
                            'type'          => 'textarea',
                            'name'          => 'phone-forum',
                            'id'            => 'phone-forum',
                            'class'         => 'form-control'
                            //'required'      => 'required'
                          );
                          echo form_input($data);
                        ?>

                      </div>
                    </div>
                    <br>

                    <div class="row">
                      <div class="col-md-3">

                      <label style="color: white;" for="email-forum">E-mail</label>
                        <?php
                          $data = array(
                            'type'          => 'textarea',
                            'name'          => 'email-forum',
                            'id'            => 'email-forum',
                            'class'         => 'form-control'
                            //'required'      => 'required'
                          );
                          echo form_input($data);
                        ?>
                      </div>
                    </div>
                    <br>

                    <div class="form-group">

                      <?php
                        $data = array(
                          'type'          => 'submit',
                          'name'          => 'forum-add',
                          'id'            => 'forum-add',
                          'class'         => 'btn btn-primary',
                          'value'         => 'Dodaj ogłoszenie'
                        );
                        echo form_submit($data);
                      ?>

                    </div>

              <?php echo form_close(); ?>

            <?php else : ?>
              <br><br><br>
              <p style="vertical-align: center; text-align: center; color: white;"><i><a href="enter-activation-code" style = "color: #364FD2;">Aktywuj konto</a>, aby dodać ogłoszenie.</i></p>
              <br><br>
            <?php endif; ?>

        <?php else : ?>

           <br><br><br>

           <p style="vertical-align: center; text-align: center; color: white;"><i><a href="login" style = "color: #364FD2;">Zaloguj się</a>, aby dodać ogłoszenie.</i></p>
           <br><br>

         </div>
         <?php endif; ?>
        </div>
        <div class="space50"></div>
      </div>
    </div>
  </div>


</div>
