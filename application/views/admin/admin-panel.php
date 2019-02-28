<!-- Page Content -->
<div class="admin-bg">
  <div class="container">
    <div style="height: 50px;"></div>
    <h3>Ilość dodanych postów: [ ]<h3>
    <h3>Ostatni post: --|--|-- <h3>
    <br>
    <h3>Ilość zarejestrowanych użytkowników: [ ]<h3>
    <h3>Ostatnia rejestracja: --|--|-- <h3>
    <?php
      $attributes = array('class' => 'form-signin');
      echo form_open('usersdeleted', $attributes);
    ?>
    <div class="form-group">
      <?php
        $data = array(
          'type'          => 'submit',
          'name'          => 'delete-noactive',
          'id'            => 'delete-noactive',
          'class'         => 'btn float-right signup_btn',
          'value'         => 'Usuń nieaktywnych'
        );
        echo form_submit($data);
      ?>
    </div>
    <?php echo form_close(); ?>

    <div style="height: 600px;"></div>
  </div>
</div>
