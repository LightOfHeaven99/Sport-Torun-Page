<!-- Page Content -->
<div class="timetable-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="space20"></div>
        <div class="card" style="width: auto;">

          <?php
            $query = $this->db->query("SELECT * FROM teams ORDER BY name");

            foreach($query->result() as $row):
          ?>

          <div class="card-header">
            <div class="row">
            &nbsp; &nbsp;
            <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row->logo ).'" style="width: 70px; height: 70px;" class="responsive"/>'; ?>
            &nbsp;<a class="team-name" href="#"><?= $row->name;?></a>
            </div>
          </div>

          <?php endforeach;?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
      <br><br><br>
    </div>
  </div>
</div>


</div>
