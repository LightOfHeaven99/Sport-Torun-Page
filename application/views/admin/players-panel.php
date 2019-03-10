<!-- Page Content -->
<div class="admin-bg">
  <div class="container">
    <div style="height: 20px;"></div>
    <a href="players" class="btn delete_users_btn">Przejdź do zawodników</a>

    <div style="height: 30px;"></div>
    <h1>DODAJ ZAWODNIKA</h1>
    <div style="height: 10px;"></div>
  <?php
    $attributes = array('class' => 'form-signin');
    echo form_open_multipart('playeradded', $attributes);
  ?>

  <?php
    //echo $this->session->flashdata('login_info');
    echo validation_errors('<div class="alert alert-danger">', '</div>');
  ?>
  <div class="row">
    <div class="col-md-3">
      <div class="row">

          <label for="topic-contact"><b>Imię i nazwisko</b></label>

          <?php
            $data = array(
              'type'          => 'textarea',
              'name'          => 'first-name',
              'id'            => 'first-name',
              'class'         => 'form-control'
              //'required'      => 'required'
            );
            echo form_input($data);
          ?>

          <?php
            $data = array(
              'type'          => 'textarea',
              'name'          => 'last-name',
              'id'            => 'last-name',
              'class'         => 'form-control'
              //'required'      => 'required'
            );
            echo form_input($data);
          ?>
        </div>
        <div class="row">
          <label class="float-left" style="text-align: left; color: white;" for="">Płeć:</label><br>

            <?php
              $data = array(
                'type'          => 'radio',
                'name'          => 'sex',
                'value'         => 'male',
                'id'            => 'male-sex'
              );
              echo form_input($data);
            ?>

            <label for="category-squads-forum" style="color: white; padding-left: 3px; padding-top: 7px;">mężczyzna</label>

            <?php
              $data = array(
                'type'          => 'radio',
                'name'          => 'sex',
                'value'         => 'female',
                'id'            => 'female-sex'
              );
              echo form_input($data);
            ?>
            <label for="female-sex" style="color: white; padding-left: 3px; padding-top: 7px;">kobieta</label>
        </div>
      </div>
      <div class="col-md-9">

        <p><b>Zdjęcie (400x400 pikseli)</b></p>

          <input type="file" name="photo" id="photo" size="20" />

      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">
          <div class="row">
            <p><b>PESEL</b></p>

            <?php
              $data = array(
                'type'          => 'textarea',
                'name'          => 'pesel',
                'id'            => 'pesel',
                'class'         => 'form-control'
                //'required'      => 'required'
              );
              echo form_input($data);
            ?>

          </div>
          <br>
          <div class="row">
              <p><b>Wzrost</b></p>

              <?php
                $data = array(
                  'type'          => 'textarea',
                  'name'          => 'height',
                  'id'            => 'height',
                  'class'         => 'form-control'
                  //'required'      => 'required'
                );
                echo form_input($data);
              ?>

              </div>
            </div>
            <div class="col-md-9">
              <?php
                $query = $this->db->query("SELECT * FROM teams ORDER BY name");

                foreach($query->result() as $row) : ?>

                  <!-- SELECT -->


              <?php endforeach; ?>



            </div>
          </div>
        <br>
        <div class="form-group">

          <?php
            $data = array(
              'type'          => 'submit',
              'name'          => 'player-add',
              'id'            => 'player-add',
              'class'         => 'btn float-left delete_users_btn',
              'value'         => 'Dodaj zawodnika'
            );
            echo form_submit($data);
          ?>

        </div>

  <?php echo form_close(); ?>

  <div class="space50"></div>
  </div>
</div>
