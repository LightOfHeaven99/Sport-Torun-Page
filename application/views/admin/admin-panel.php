<!-- Page Content -->
<div class="admin-bg">
  <div class="container">
    <div style="height: 50px;"></div>

    <?php
      $query = $this->db->query("SELECT * FROM news ORDER BY id DESC");
      $last_news;
      $counter_news = 0;
      $condition_news = true;

      foreach($query->result() as $row){
        if($condition_news){
          $last_news = $row->postdate;
          $condition_news = false;
        }
        $counter_news++;
      }

      $query = $this->db->query("SELECT * FROM users ORDER BY id DESC");
      $last_user;
      $counter_user = 0;
      $condition_user = true;

      foreach($query->result() as $row){
        if($condition_user){
          $last_user = $row->joindate;
          $condition_user = false;
        }
        $counter_user++;
      }
    ?>

    <h3>Ilość dodanych postów: <?= $counter_news ?><h3>
    <h3>Ostatni post: <?= $last_news ?><h3>
    <br>
    <h3>Ilość zarejestrowanych użytkowników: <?= $counter_user ?><h3>
    <h3>Ostatnia rejestracja: <?= $last_user ?><h3>
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
          'value'         => 'jeszcze nic'
        );
        echo form_submit($data);
      ?>
    </div>
    <?php echo form_close(); ?>

    <br>
    <br>
    <br>
    <br>
    <!-- <input type="button" onclick="https://poczta.zenbox.pl/?_task=mail&_mbox=INBOX" class="btn float-left delete_users_btn" value="Poczta Zenbox"></input> -->

    <div style="height: 100px;"></div>
  </div>
</div>
