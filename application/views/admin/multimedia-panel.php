<!-- Page Content -->
<div class="admin-bg">
  <div class="container">
    <div style="height: 20px;"></div>
      <a href="gallery" class="btn delete_users_btn">Przejdź do galerii</a>
      <a href="video" class="btn delete_users_btn">Przejdź do video</a>
      <div style="height: 30px;"></div>
      <h1>DODAJ ALBUM</h1>
      <div style="height: 10px;"></div>
      <?php
      $attributes = array('class' => 'form-signin');
      echo form_open_multipart('galleryadded', $attributes);
      ?>

      <?php
      //echo $this->session->flashdata('login_info');
      echo validation_errors('<div class="alert alert-danger">', '</div>');
      ?>
      <div class="row">
        <div class="col-md-3">

          <label for="title-gallery"><b>Nazwa albumu</b></label>

          <?php
            $data = array(
              'type'          => 'textarea',
              'name'          => 'title-gallery',
              'id'            => 'title-gallery',
              'class'         => 'form-control'
              //'required'      => 'required'
            );
            echo form_input($data);
          ?>

        </div>
        <div class="col-md-3">
          <p><b>Powiąż z meczem</b></p>
          <select id="gallery_match_date" name="gallery_match_date">
            <option value='0'>brak</option>
            <?php
              $query = $this->db->query("SELECT * FROM matches ORDER BY match_date");

              foreach($query->result() as $row) :

            ?>
              <option value='$row->id'>
                                    <?php
                                    $today = $row->match_date;

                                    list($year, $month, $day) = explode("-", $today);
                                    $day = substr($day, 0, 2);

                                    echo $day.'.'.$month.'.'.$year.'&nbsp;&nbsp;'.
                                    substr($row->match_hour, 0, 5);
                                    ?></option>
            <?php endforeach; ?>
          </select>

        </div>
      </div>
      <br>

        <div class="row">
          <div class="col-md-3">
            <p><b>Zdjęcie 1</b></p>

              <input type="file" name="photo1" id="logo" size="20" />

            </div>
            <div class="col-md-3">
              <p><b>Zdjęcie 2</b></p>

                <input type="file" name="photo2" id="logo" size="20" />

            </div>
            <div class="col-md-3">
              <p><b>Zdjęcie 3</b></p>

                <input type="file" name="photo3" id="logo" size="20" />

            </div>
            <div class="col-md-3">
              <p><b>Zdjęcie 4</b></p>

                <input type="file" name="photo4" id="logo" size="20" />

            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-3">
              <p><b>Zdjęcie 5</b></p>

                <input type="file" name="photo5" id="logo" size="20" />

              </div>
              <div class="col-md-3">
                <p><b>Zdjęcie 6</b></p>

                  <input type="file" name="photo6" id="logo" size="20" />

              </div>
              <div class="col-md-3">
                <p><b>Zdjęcie 7</b></p>

                  <input type="file" name="photo7" id="logo" size="20" />

              </div>
              <div class="col-md-3">
                <p><b>Zdjęcie 8</b></p>

                  <input type="file" name="photo8" id="logo" size="20" />

            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-3">
              <p><b>Zdjęcie 9</b></p>

                <input type="file" name="photo9" id="logo" size="20" />

              </div>
              <div class="col-md-3">
                <p><b>Zdjęcie 10</b></p>

                  <input type="file" name="photo10" id="logo" size="20" />

              </div>
              <div class="col-md-3">
                <p><b>Zdjęcie 11</b></p>

                  <input type="file" name="photo11" id="logo" size="20" />

              </div>
              <div class="col-md-3">
                <p><b>Zdjęcie 12</b></p>

                  <input type="file" name="photo12" id="logo" size="20" />

            </div>
          </div>
          <br>
          <div class="form-group">

            <?php
              $data = array(
                'type'          => 'submit',
                'name'          => 'team-add',
                'id'            => 'team-add',
                'class'         => 'btn float-left delete_users_btn',
                'value'         => 'Dodaj album'
              );
              echo form_submit($data);
            ?>

          </div>

      <?php echo form_close(); ?>

      <br><br>
      <div style="height: 30px;"></div>
      <h1>DODAJ VIDEO</h1>
      <div style="height: 10px;"></div>
      <?php
        $attributes = array('class' => 'form-signin');
        echo form_open('videoadded', $attributes);
      ?>

      <div class="row">
        <div class="col-md-6">

          <label for="url-video"><b>Link z YouTube</b></label>

          <?php
            $data = array(
              'type'          => 'textarea',
              'name'          => 'url-video',
              'id'            => 'url-video',
              'class'         => 'form-control'
              //'required'      => 'required'
            );
            echo form_input($data);
          ?>

        </div>
        <div class="col-md-3">
          <p><b>Powiąż z meczem</b></p>
          <select id="video_match_date" name="video_match_date">
            <option value='0'>brak</option>
            <?php
              $query = $this->db->query("SELECT * FROM matches ORDER BY match_date");

              foreach($query->result() as $row) :

            ?>
              <option value='$row->id'>
                                    <?php
                                    $today = $row->match_date;

                                    list($year, $month, $day) = explode("-", $today);
                                    $day = substr($day, 0, 2);

                                    echo $day.'.'.$month.'.'.$year.'&nbsp;&nbsp;'.
                                    substr($row->match_hour, 0, 5);
                                    ?></option>
            <?php endforeach; ?>
          </select>

        </div>
      </div>
      <br>

      <div class="row align-items-center remember">
        <?php
          $data = array(
            'type'          => 'checkbox',
            'name'          => 'new-data',
            'id'            => 'new-data'
          );
          echo form_input($data);
        ?>
        <label for="new-data" style="padding-left: 3px; padding-top: 7px; color: black;">Ustaw nowe dane</label>
      </div>

      <div class="row">
        <div class="col-md-3">

          <label for="title-video"><b>Tytuł filmu</b></label>

          <?php
            $data = array(
              'type'          => 'textarea',
              'name'          => 'title-video',
              'id'            => 'title-video',
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
            <p><b>Opis filmu</b></p>

            <?php
              $data = array(
                'type'          => 'textarea',
                'name'          => 'description-video',
                'id'            => 'description-video',
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
          'name'          => 'team-update',
          'id'            => 'team-update',
          'class'         => 'btn float-left delete_users_btn',
          'value'         => 'Dodaj video'
        );
        echo form_submit($data);
      ?>

      </div>

    <div class="space50"></div>
  </div>
</div>
