<!-- Page Content -->
<div class="timetable-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="space20"></div>
        <div class="card" style="width: auto;">

          <?php
            $query = $this->db->query("SELECT * FROM matches ORDER BY match_date");
            $counter = 6;

            foreach($query->result() as $row):
          ?>
            <?php if($row->id != 0) : ?>
              <div class="card-header">
                <div class="row" style="color: white;">
                    &nbsp; &nbsp;
                    <?php
        							$today = $row->match_date;

        							list($year, $month, $day) = explode("-", $today);
        							$day = substr($day, 0, 2);

        							echo $day.'.'.$month.'.'.$year;
        						?>
                    &nbsp; &nbsp;
                    <?= substr($row->match_hour, 5) ?>
                    &nbsp; &nbsp;

                    <?php
                      $team1_name = 0;
                      $team1_logo = 0;
                      $team2_name = 0;
                      $team2_logo = 0;

                      $query_team1 = $this->db->query("SELECT * FROM teams");
                      foreach($query_team1->result() as $row_team1) {
                        if($row_team1->id == $row->team1_id) {
                          $team1_name = $row_team1->name;
                          $team1_logo = $row_team1->logo;
                        }
                      }

                      $query_team2 = $this->db->query("SELECT * FROM teams");
                      foreach($query_team2->result() as $row_team2) {
                        if($row_team2->id == $row->team2_id) {
                          $team2_name = $row_team2->name;
                          $team2_logo = $row_team2->logo;
                        }
                      }
                    ?>

                    <?= $row_team1->name ?>
                    &nbsp;&nbsp;&nbsp;
                    <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode( $team1_logo ).'" style="width: 30px; height: 30px;" class="responsive"/>'; ?>
                    &nbsp;
                    <b><?= ' : ' ?></b>
                    &nbsp;
                    <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode( $team2_logo ).'" style="width: 30px; height: 30px;" class="responsive"/>'; ?>
                    &nbsp;&nbsp;&nbsp;
                    <?= $row_team2->name ?>
                </div>
              </div>
              <?php $counter--; ?>
            <?php endif; ?>

          <?php endforeach; ?>

          <?php for($i = 0; $i < $counter; $i++) : ?>
            <br><br><br><br>
          <?php endfor; ?>
      </div>
      <br><br><br>
      </div>
    </div>
  </div>


</div>
