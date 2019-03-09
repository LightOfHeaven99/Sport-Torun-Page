<!-- Page Content -->
<div class="forum-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="space20"></div>
        <div class="card">
          <div class="card-header" style="width: auto;">
            <br><br>
            <h1 style="color: white; font-size: 30px;"><b>Składy</b><font style="color: #364FD2;"> /
              <a href="forum-stuff" style="color: #364FD2;">Towar</a> /
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
                <b><?= 'Temat: ' ?></b> <?= $row->topic; ?>
                <br>
                <b><?= 'Treść: ' ?></b> <?= $row->content; ?>
                <br><br>

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

                <?= $first_name.' '.$last_name; ?>
                &#09;
                <?= $row->email.' / '.$row->phone; ?>
                &#09;
                <?= substr($row->postdate, 0, 10); ?>
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
