<!-- Page Content -->
<div class="admin-bg">
  <div class="container">
    <div style="height: 20px;"></div>
    <a href="timetable" class="btn delete_users_btn">Przejdź do terminarzu</a>

    <div style="height: 30px;"></div>
    <h1>DODAJ MECZ</h1>
    <div style="height: 10px;"></div>
    <?php
      $attributes = array('class' => 'form-signin');
      echo form_open('matchadded', $attributes);
    ?>
    <div class="row">
      <div class="col-md-3">
        <p><b>Data meczu</b></p>
        <?php
          $data = array(
            'type'          => 'date',
            'name'          => 'match-date',
            'id'            => 'match-date',
            'class'         => 'form-control',
            'value'         => date("Y-m-d"),
            'min'           => date("Y-m-d"),
            'max'           => '2025-12-31'
            //'required'      => 'required'
          );
          echo form_input($data);
        ?>
      </div>

      <div class="col-md-3">
        <p><b>Godzina</b></p>
        <?php
          $data = array(
            'type'          => 'time',
            'name'          => 'match-hour',
            'id'            => 'match-hour',
            'class'         => 'form-control'
            //'required'      => 'required'
          );
          echo form_input($data);  // GIVING id
        ?>
      </div>

      <div class="col-md-3">
        <p><b>Lewa drużyna</b></p>
        <select name="team1_id">
          <?php
            $query = $this->db->query("SELECT * FROM teams ORDER BY name");

            foreach($query->result() as $row) :

          ?>
            <option value='$row->id'><?= $row->name ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-md-3">
        <p><b>Prawa drużyna</b></p>
        <select name="team2_id">
          <?php
            $query = $this->db->query("SELECT * FROM teams ORDER BY name");

            foreach($query->result() as $row) :

          ?>
            <option value='$row->id'><?= $row->name ?></option>
          <?php endforeach; ?>
        </select>
      </div>


    </div>
    <br>
    <?php
      $data = array(
        'type'          => 'submit',
        'name'          => 'match-add',
        'id'            => 'match-add',
        'class'         => 'btn float-left delete_users_btn',
        'value'         => 'Dodaj mecz'
      );
      echo form_submit($data);
    ?>

    <?php echo form_close(); ?>



    <div style="height: 30px;"></div>
    <br><br>
    <h1>AKTUALIZUJ MECZ</h1>
    <div style="height: 10px;"></div>
    <?php
      $attributes = array('class' => 'form-signin');
      echo form_open('matchupdated', $attributes);
    ?>
    <div class="row">
      <div class="col-md-3">
        <p><b>Wybierz mecz</b></p>
        <select name="match_date">
          <?php
            $query = $this->db->query("SELECT * FROM matches ORDER BY match_date");

            foreach($query->result() as $row) :

          ?>
            <option value='$row->id'><?= $row->match_date ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>

    <script>
      $(function(){
          $('.hidden').click(function(event){
              var name = $(this).attr("name");
              $("#" + name + "div").slideToggle("slow");
          })
      });
    </script>

    <div class="hidden">
      <div class="row">
          <?php
            $query = $this->db->query("SELECT * FROM matches WHERE match_date = 'match-date'");
            $match = $query->result();

            $query = $this->db->query("SELECT * FROM teams WHERE id = '$match->team1_id'");
            $team1 = $query->result();

            $query = $this->db->query("SELECT * FROM teams WHERE id = '$match->team2_id'");
            $team2 = $query->result();

          ?>

          <div class="col-md-9">
            <p><b>Wynik</b></p>

              <table style="width: 75%;">
                <tr>
                  <th></th>
                  <th><?= $team1->name ?></th>
                  <th><?= $team2->name ?></th>
                </tr>
                <tr>
                  <th>SET 1</th>
                  <td><!-- team1_set1_points --></td>
                  <td></td>
                </tr>
                <tr>
                  <th>SET 2</th>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th>SET 3</th>
                  <td></td>
                  <td></td>
                </tr>
              </table>

          </div>
        </div>

        <?php
          $query = $this->db->query("SELECT * FROM players WHERE id = '$team1->player1_id'");
          $player1_1 = $query->result();
        ?>

        <div class="row">
          <p><b>STATYSTYKI</b></p>
          <div class="col-md-6">
            <table style="width: 90%;">
              <tr>
                <th><?= $team1->name ?></th>
              </tr>
              <tr>
                <th>ID</th>
                <th>NAZWISKO</th>
                <th>OBECNY</th>
                <th>ATAKI</th>
                <th>BLOKI</th>
                <th>ASY</th>
              </tr>
              <?php if($player1_1->id != 0) : ?>
              <tr>
                <td><?= $player1_1->id ?></td>
                <td><?= $player1_1->last_name ?></td>
                <td><?php $data = array(
                  'type'          => 'checkbox',
                  'name'          => 'player1_1',
                  'id'            => 'player1_1'
                ); echo form_input($data); ?></td>
                <td><?php $data = array(
                  'type'          => 'text',
                  'placeholder'   => '$player1_1->attacks',
                  'name'          => 'player1_1_attacks',
                  'id'            => 'player1_1_attacks'
                ); echo form_input($data); ?></td>
                <td><?php $data = array(
                  'type'          => 'text',
                  'placeholder'   => '$player1_1->blocks',
                  'name'          => 'player1_1_blocks',
                  'id'            => 'player1_1_blocks'
                ); echo form_input($data); ?></td>
                <td><?php $data = array(
                  'type'          => 'text',
                  'placeholder'   => '$player1_1->aces',
                  'name'          => 'player1_1_aces',
                  'id'            => 'player1_1_aces'
                ); echo form_input($data); ?></td>
              </tr>
              <?php endif; ?>
            </table>
          </div>

          <div class="col-md-6">
            <table style="width: 90%;">
              <tr>
                <th><?= $team2->name ?></th>
              </tr>
              <tr>
                <th>ID</th>
                <th>NAZWISKO</th>
                <th>OBECNY</th>
                <th>ATAKI</th>
                <th>BLOKI</th>
                <th>ASY</th>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
        </div>

        <?php
          $data = array(
            'type'          => 'submit',
            'name'          => 'match-update',
            'id'            => 'match-update',
            'class'         => 'btn float-left delete_users_btn',
            'value'         => 'Aktualizuj mecz'
          );
          echo form_submit($data);
        ?>

        <?php echo form_close(); ?>

    </div>

    <div class="space50"></div>
  </div>
</div>
