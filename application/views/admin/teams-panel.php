<!-- Page Content -->
<div class="admin-bg">
  <div class="container">
    <div style="height: 20px;"></div>
    <a href="teams" class="btn delete_users_btn">Przejdź do drużyn</a>

    <div style="height: 30px;"></div>
    <h1>DODAJ DRUŻYNĘ</h1>
    <div style="height: 10px;"></div>
  <?php
    $attributes = array('class' => 'form-signin');
    echo form_open_multipart('teamadded', $attributes);
  ?>

  <?php
    //echo $this->session->flashdata('login_info');
    echo validation_errors('<div class="alert alert-danger">', '</div>');
  ?>
  <div class="row">
    <div class="col-md-3">

      <label for="topic-contact"><b>Nazwa</b></label>

      <?php
        $data = array(
          'type'          => 'textarea',
          'name'          => 'name',
          'id'            => 'name',
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
          <p><b>Logo (400x400 pikseli)</b></p>

            <input type="file" name="logo" id="logo" size="20" />

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
              'value'         => 'Dodaj drużynę'
            );
            echo form_submit($data);
          ?>

        </div>

  <?php echo form_close(); ?>

  <div style="height: 30px;"></div>
  <h1>UZUPEŁNIJ DRUŻYNĘ</h1>
  <div style="height: 10px;"></div>
  <?php
    $attributes = array('class' => 'form-signin');
    echo form_open('teamupdated', $attributes);
  ?>

  <?php
    $query = $this->db->query("SELECT * FROM teams ORDER BY name");

    foreach($query->result() as $row) : ?>

      <!-- SELECT -->


  <?php endforeach; ?>

  <!-- 1 - 15 ZAWODNICY NA SELEKCIE -->

  <div class="form-group">

    <?php
      $data = array(
        'type'          => 'submit',
        'name'          => 'team-update',
        'id'            => 'team-update',
        'class'         => 'btn float-left delete_users_btn',
        'value'         => 'Uzupełnij'
      );
      echo form_submit($data);
    ?>

  </div>

  <div class="space50"></div>
  </div>
</div>
