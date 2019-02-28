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
          'class'         => 'btn float-left delete_users_btn',
          'value'         => 'Usuń nieaktywnych'
        );
        echo form_submit($data);
      ?>
    </div>
    <?php echo form_close(); ?>

    <br>
    <br>
    <br>
    <br>
    <input type="button" onclick="https://poczta.zenbox.pl/?_task=mail&_mbox=INBOX" class="btn float-left delete_users_btn">Poczta Zenbox</input>

    <div style="height: 100px;"></div>
  </div>
</div>
