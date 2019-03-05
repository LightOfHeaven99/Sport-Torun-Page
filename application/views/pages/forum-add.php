<!-- Page Content -->
<div class="timetable-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="space20"></div>
        <div class="parallax-card-forum">
          <?php if($this->session->userdata('logged_in') == TRUE) : ?>
            <br><br>
            <h1 style="color: white; font-size: 70px;"><b>Dodaj ogłoszenie<b></h1>

              <?php
                $attributes = array('class' => 'form-signin');
                echo form_open_multipart('forumadded', $attributes);
              ?>

              <?php
                //echo $this->session->flashdata('login_info');
                echo validation_errors('<div class="alert alert-danger">', '</div>');
              ?>

              <label for=""><b>Poszukuję:</b></label>
              <div class="row align-items-center remember">

                <?php
                  $data = array(
                    'type'          => 'checkbox',
                    'name'          => 'category-teams-forum',
                    'id'            => 'category-teams-forum'
                  );
                  echo form_input($data);
                ?>
                <label for="category-teams-forum" style="padding-left: 3px; padding-top: 7px; color: black;">zawodnika do drużyny</label>
              </div>
              <div class="row align-items-center remember">

                <?php
                  $data = array(
                    'type'          => 'checkbox',
                    'name'          => 'category-players-forum',
                    'id'            => 'category-players-forum'
                  );
                  echo form_input($data);
                ?>
                <label for="category-players-forum" style="padding-left: 3px; padding-top: 7px; color: black;">drużyne jako zawodnik</label>
              </div>

              <div class="row">
                <div class="col-md-3">

                  <label for="topic-contact"><b>Temat</b></label>

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

                    <label for="content-forum"><b>Treść</b></label>

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

                  <p align="justify"><input type="checkbox" id="phone-check" onclick="myFunction()" required> Telefon<br>
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
                    
                  <p align="justify"><input type="checkbox" id="emial-check" onclick="myFunction()" required> E-mail<br>
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
            <p style="vertical-align: bottom; text-align: center;"><i><a href="login" style = "color: #364FD2;">Zaloguj się</a>, aby dodać ogłoszenie.</i></p>
          <?php endif; ?>
        </div>
        <div class="space50"></div>
      </div>
    </div>
  </div>


</div>
