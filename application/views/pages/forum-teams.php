<!-- Page Content -->
<div class="forum-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="space20"></div>
        <div class="parallax-card-forum">
          <br><br>
          <h1 style="color: white; font-size: 20px;"><b>Drużyna poszukuje</b> / <a href="forum-players" style="color: #364FD2;">Poszukuję drużyny</a></h1>

          <?php
            $query = $this->db->query("SELECT * FROM forum ORDER BY id DESC");

            foreach($query->result() as $row):
          ?>
            <span style="color: white;">
              <div class="card-header">
              <?php if($row->category == 'teams') : ?>
                <?= 'Temat: '.$row->topic; ?>
                <?= '___________________________________' ?>
                <br>
                <?= 'Treść: '.$row->content; ?>
                <br>
                <?= 'Data: '.$row->postdate; ?>
                <br>
                <?= 'Kontakt: '.$row->email.' / '.$row->phone; ?>
                <br>

                <?php
                  $query = "SELECT * FROM users WHERE id='$row->author_id'"
                  $row = mysql_fetch_array($query);
                  $first_name = $row['first_name'];
                  $last_name = $row['last_name'];
                ?>

                <?= 'Dodał: '.$first_name.' '.$last_name; ?>
              <?php endif; ?>
              </div>
            </span>

          <?php endforeach;?>

        </div>
        <div class="space50"></div>
      </div>
    </div>
  </div>


</div>
