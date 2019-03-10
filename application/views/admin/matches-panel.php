<!-- Page Content -->
<div class="admin-bg">
  <div class="container">
    <div style="height: 50px;"></div>
    <h1>PANEL DODAWANIA MECZU</h1>
    <a href="timetable" class="btn delete_users_btn">Przejdź do terminarzu</a>
    <div style="height: 10px;"></div>
    <?php
      $attributes = array('class' => 'form-signin');
      echo form_open('matchadded', $attributes);
    ?>

    <div class="col-md-3">
      <p><b>Data meczu</b></p>
      <?php
        $data = array(
          'type'          => 'date',
          'name'          => 'date-match',
          'id'            => 'date-match',
          'class'         => 'form-control',
          'value'         => date("Y-m-d"),
          'min'           => date("Y-m-d"),
          'max'           => '2019-12-31'
          //'required'      => 'required'
        );
        echo form_input($data);
      ?>
    </div>

    <?php
      $data = array(
        'type'          => 'submit',
        'name'          => 'match-add',
        'id'            => 'match-add',
        'class'         => 'btn float-left delete_users_btn',
        'value'         => 'Dodaj mecz'
      );
      echo form_submit($data);
    ?>

    </div>

    <?php echo form_close(); ?>

    <div class="space50"></div>
  </div>
</div>
