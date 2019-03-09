<!-- Page Content -->
<div class="timetable-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="space20"></div>
        <div class="card" style="width: auto;">

          <?php
            $query = $this->db->query("SELECT * FROM teams ORDER BY name");
            $counter = 6;

            foreach($query->result() as $row):
          ?>

          <div class="card-header">
            <div class="row">
              <div class="col-sm-3">
                &nbsp; &nbsp;
                <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row->logo ).'" style="width: 70px; height: 70px;" class="responsive"/>'; ?>
                &nbsp;&nbsp;&nbsp;<a class="team-name" href="" onclick=""><?= $row->name;?></a>
              </div>

              <!-- on click-->
              <div class="col-sm-9" style="text-align: center; margin-left: auto; margin-right: auto;">
            <?php
              $query_players = $this->db->query("SELECT * FROM players");

              foreach($query_players->result() as $row_players):
                //if($row_players->id != 0) :

                  echo '<div class="row"';
                  if($row_players->id == $row->player1_id) :
                    echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row_players->photo ).'" style="width: 100px; height: 100px;" class="responsive"/>';
                    echo '<br>';
                    echo $row_players->first_name;
                    echo '&nbsp;';
                    echo $row_players->last_name;
                  endif;
                  if($row_players->id == $row->player2_id) :
                    echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row_players->photo ).'" style="width: 100px; height: 100px;" class="responsive"/>';
                    echo '<br>';
                    echo $row_players->first_name;
                    echo '&nbsp;';
                    echo $row_players->last_name;
                  endif;
                  if($row_players->id == $row->player3_id) :
                    echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row_players->photo ).'" style="width: 100px; height: 100px;" class="responsive"/>';
                    echo '<br>';
                    echo $row_players->first_name;
                    echo '&nbsp;';
                    echo $row_players->last_name;
                  endif;
                  if($row_players->id == $row->player4_id) :
                    echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row_players->photo ).'" style="width: 100px; height: 100px;" class="responsive"/>';
                    echo '<br>';
                    echo $row_players->first_name;
                    echo '&nbsp;';
                    echo $row_players->last_name;
                  endif;
                  echo '</div>';
                  echo '<br>';
                  echo '<div class="row"';
                  if($row_players->id == $row->player5_id) :
                    echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row_players->photo ).'" style="width: 100px; height: 100px;" class="responsive"/>';
                    echo '<br>';
                    echo $row_players->first_name;
                    echo '&nbsp;';
                    echo $row_players->last_name;
                  endif;
                  if($row_players->id == $row->player6_id) :
                    echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row_players->photo ).'" style="width: 100px; height: 100px;" class="responsive"/>';
                    echo '<br>';
                    echo $row_players->first_name;
                    echo '&nbsp;';
                    echo $row_players->last_name;
                  endif;
                  if($row_players->id == $row->player7_id) :
                    echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row_players->photo ).'" style="width: 100px; height: 100px;" class="responsive"/>';
                    echo '<br>';
                    echo $row_players->first_name;
                    echo '&nbsp;';
                    echo $row_players->last_name;
                  endif;
                  echo '</div>';
    
                //endif;
            ?>
          </div>
            <?php endforeach; ?>
            </div>
          </div>
          <?php $counter--; ?>
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
