<!-- Page Content -->
<div class="timetable-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="space20"></div>
        <div class="card" style="width: auto;">

          <?php
            $query = $this->db->query("SELECT * FROM players ORDER BY last_name");
            $counter = 6;

            foreach($query->result() as $row):
          ?>
            <?php if($row->id != 0) : ?>
              <div class="card-header">
                <div class="row">
                    &nbsp; &nbsp;
                    <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row->photo ).'" style="width: 70px; height: 70px;" class="responsive"/>'; ?>
                    &nbsp;&nbsp;&nbsp;<a class="team-name" href=""><?= $row->first_name.' '.$row->last_name;?></a>
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
