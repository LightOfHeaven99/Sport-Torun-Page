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
              <div class="card-header forum-wrapper">
              <?php if($row->category == 'teams') : ?>
                <br>
                <?= '___________________________________' ?>
                <br>
                <?= 'Temat: '.$row->topic; ?>
                <br>
                <?= 'Treść: '.$row->content; ?>
                <br><br>
              <?php endif; ?>
              </div>

          <?php endforeach;?>

        </div>
        <div class="space50"></div>
      </div>
    </div>
  </div>


</div>
