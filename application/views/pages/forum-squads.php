<!-- Page Content -->
<div class="forum-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="space20"></div>
        <div class="card" style="width: auto;">
          <div class="card-header">
            <br><br>
            <h1 style="color: white; font-size: 30px;"><b>Poszukuję</b><font style="color: #364FD2;"> /
              <a href="forum-stuff" style="color: #364FD2;">Sprzęt</a> /
              <a href="forum-others" style="color: #364FD2;">Inne</a></font></h1>
            <br>
          </div>
          <?php
            $query = $this->db->query("SELECT * FROM forum ORDER BY id DESC");

            foreach($query->result() as $row):
          ?>
            <span style="color: white;">
              <div class="card-header">
              <?php if($row->category == 'squads') : ?>
                <?= 'Temat: '.$row->topic; ?>
                <br>
                <?= 'Treść: '.$row->content; ?>
                <br>
                <?= 'Kontakt: '.$row->email.' / '.$row->phone; ?>
                <br>

                <?php
                  $query_finder = $this->db->query("SELECT * FROM users");
                  foreach($query_finder->result() as $row_finder)
                  {
                      if($row_finder->id == $row->author_id)
                      {
                        $first_name = $row_finder->first_name;
                        $last_name = $row_finder->last_name;
                      }
                  }

                ?>

                <?= 'Dodał: '.$first_name.' '.$last_name; ?>
                <br>
                <?= 'Data: '.$row->postdate; ?>
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
