<!-- Page Content -->
<div class="admin-bg">
  <div class="container">
    <div style="height: 50px;"></div>

    <?php
      $query = $this->db->query("SELECT * FROM news ORDER BY id DESC");
      $last_news = 0;
      $counter_news = 0;
      $condition_news = true;

      foreach($query->result() as $row){
        if($condition_news){
          $last_news = $row->postdate;
          $condition_news = false;
        }
        $counter_news++;
      }

      $query = $this->db->query("SELECT * FROM forum ORDER BY id DESC");
      $last_forum = 0;
      $counter_forum = 0;
      $condition_forum = true;
      $author_id_forum = 0;
      $user_forum = 0;

      foreach($query->result() as $row){
        if($condition_forum){
          $last_forum = $row->postdate;
          $condition_forum = false;
          $author_id_forum = $row->author_id;
        }
        $counter_forum++;
      }

      $query = $this->db->query("SELECT * FROM users ORDER BY id DESC");
      $last_user;
      $counter_user = 0;
      $counter_active_user = 0;
      $condition_user = true;
      $user = 0;

      foreach($query->result() as $row){
        if($condition_user){
          $last_user = $row->joindate;
          $user = $row->first_name.' '.$row->last_name;
          $condition_user = false;
        }
        if($row->is_active == 1)
          $counter_active_user++;
        if($row->id == $author_id_forum)
          $user_forum = $row->first_name.' '.$row->last_name;

        $counter_user++;
      }
    ?>

    <h3><b>POSTY</b></h3>
    <p>Ilość dodanych: <?= $counter_news ?><p>
    <p>Ostatni post: <?= $last_news ?><p>
    <br>
    <h3><b>OGŁOSZENIA</b></h3>
    <p>Ilość dodanych: <?= $counter_forum ?><p>
    <p>Ostatnie ogłoszenie: <?= $last_forum ?><p>
    <p>Ostatni zgłaszający: <?= $user_forum ?><p>
    <br>
    <h3><b>UŻYTKOWNICY</b></h3>
    <p>Ilość zarejestrowanych (aktywnych): <?= $counter_user ?> (<?= $counter_active_user ?>)<p>
    <p>Ostatnia rejestracja: <?= $last_user ?><p>
    <p>Ostatni użytkownik: <?= $user ?><p>
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
