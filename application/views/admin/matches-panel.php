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

      <div class="col-md-2">
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
      <div class="col-md-2">
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
        <select id="select_match_date" name="select_match_date">
          <?php
            $query = $this->db->query("SELECT * FROM matches ORDER BY match_date DESC");

            foreach($query->result() as $row) :

          ?>
            <option value='$row->id'>
                                  <?php
                                  $today = $row->match_date;

                                  list($year, $month, $day) = explode("-", $today);
                                  $day = substr($day, 0, 2);

                                  echo $day.'.'.$month.'.'.$year.'&nbsp;&nbsp;'.
                                  substr($row->match_hour, 0, 5);
                                  ?>
          <?php endforeach; ?>
        </select>

      </div>
    </div>

    <br>

    <?php
      $selected_match_id = 0;
      $selected_match_id = $this->input->post('select_match_date');
    ?>

      <div class="row">
          <?php
            $match_match_date = 0;
            $match_match_hour = 0;
            $match_team1_id = 0;
            $match_team2_id = 0;

            $team_team1_name = 0;
            $team_team1_player1 = 0;
            $team_team1_player2 = 0;
            $team_team1_player3 = 0;
            $team_team1_player4 = 0;
            $team_team1_player5 = 0;
            $team_team1_player6 = 0;
            $team_team1_player7 = 0;
            $team_team1_player8 = 0;
            $team_team1_player9 = 0;
            $team_team1_player10 = 0;
            $team_team1_player11 = 0;
            $team_team1_player12 = 0;
            $team_team1_player13 = 0;
            $team_team1_player14 = 0;
            $team_team1_player15 = 0;

            $team_team2_name = 0;
            $team_team2_player1 = 0;
            $team_team2_player2 = 0;
            $team_team2_player3 = 0;
            $team_team2_player4 = 0;
            $team_team2_player5 = 0;
            $team_team2_player6 = 0;
            $team_team2_player7 = 0;
            $team_team2_player8 = 0;
            $team_team2_player9 = 0;
            $team_team2_player10 = 0;
            $team_team2_player11 = 0;
            $team_team2_player12 = 0;
            $team_team2_player13 = 0;
            $team_team2_player14 = 0;
            $team_team2_player15 = 0;

            $query_matches = $this->db->query("SELECT * FROM matches");

            foreach($query_matches->result() as $row_matches) {
              if($row_matches->id == $selected_match_id) {
                $match_match_date = $row_matches->match_date;
                $match_match_hour = $row_matches->match_hour;
                $match_team1_id = $row_matches->team1_id;
                $match_team2_id = $row_matches->team2_id;
              }
            }

            $query_teams = $this->db->query("SELECT * FROM teams");

            foreach($query_teams->result() as $row_teams) {
              if($row_teams->id == $match_team1_id) {
                $team_team1_name = $row_teams->name;
                $team_team1_player1 = $row_teams->player1_id;
                $team_team1_player2 = $row_teams->player2_id;
                $team_team1_player3 = $row_teams->player3_id;
                $team_team1_player4 = $row_teams->player4_id;
                $team_team1_player5 = $row_teams->player5_id;
                $team_team1_player6 = $row_teams->player6_id;
                $team_team1_player7 = $row_teams->player7_id;
                $team_team1_player8 = $row_teams->player8_id;
                $team_team1_player9 = $row_teams->player9_id;
                $team_team1_player10 = $row_teams->player10_id;
                $team_team1_player11 = $row_teams->player11_id;
                $team_team1_player12 = $row_teams->player12_id;
                $team_team1_player13 = $row_teams->player13_id;
                $team_team1_player14 = $row_teams->player14_id;
                $team_team1_player15 = $row_teams->player15_id;
              }
              if($row_teams->id == $match_team2_id) {
                $team_team2_name = $row_teams->name;
                $team_team2_player1 = $row_teams->player1_id;
                $team_team2_player2 = $row_teams->player2_id;
                $team_team2_player3 = $row_teams->player3_id;
                $team_team2_player4 = $row_teams->player4_id;
                $team_team2_player5 = $row_teams->player5_id;
                $team_team2_player6 = $row_teams->player6_id;
                $team_team2_player7 = $row_teams->player7_id;
                $team_team2_player8 = $row_teams->player8_id;
                $team_team2_player9 = $row_teams->player9_id;
                $team_team2_player10 = $row_teams->player10_id;
                $team_team2_player11 = $row_teams->player11_id;
                $team_team2_player12 = $row_teams->player12_id;
                $team_team2_player13 = $row_teams->player13_id;
                $team_team2_player14 = $row_teams->player14_id;
                $team_team2_player15 = $row_teams->player15_id;
              }
            }

          ?>

          <p><b>Wynik</b></p>
        </div>
        <br>
        <div class="row">
          <div class="col-md-9">
              <table style="width: 75%;">
                <tr>
                  <th></th>
                  <th><?= $team_team1_name ?></th>
                  <th><?= $team_team2_name ?></th>
                </tr>
                <tr>
                  <th>SET 1</th>
                  <td><?php $data = array(
                    'type'          => 'text',
                    'placeholder'   => 0,
                    'name'          => 'team1_set1_points',
                    'id'            => 'team1_set1_points'
                  ); echo form_input($data); ?></td>
                  <td><?php $data = array(
                    'type'          => 'text',
                    'placeholder'   => 0,
                    'name'          => 'team2_set1_points',
                    'id'            => 'team2_set1_points'
                  ); echo form_input($data); ?></td>
                </tr>
                <tr>
                  <th>SET 2</th>
                  <td><?php $data = array(
                    'type'          => 'text',
                    'placeholder'   => 0,
                    'name'          => 'team1_set2_points',
                    'id'            => 'team2_set2_points'
                  ); echo form_input($data); ?></td>
                  <td><?php $data = array(
                    'type'          => 'text',
                    'placeholder'   => 0,
                    'name'          => 'team1_set2_points',
                    'id'            => 'team2_set2_points'
                  ); echo form_input($data); ?></td>
                </tr>
                <tr>
                  <th>SET 3</th>
                  <td><?php $data = array(
                    'type'          => 'text',
                    'placeholder'   => 0,
                    'name'          => 'team1_set3_points',
                    'id'            => 'team2_set3_points'
                  ); echo form_input($data); ?></td>
                  <td><?php $data = array(
                    'type'          => 'text',
                    'placeholder'   => 0,
                    'name'          => 'team1_set3_points',
                    'id'            => 'team2_set3_points'
                  ); echo form_input($data); ?></td>
                </tr>
              </table>

          </div>
        </div>

        <?php
          $query_players = $this->db->query("SELECT * FROM players");

          foreach($query_players->result() as $row_players) {
            if($row_players->id == $team_team1_player1) {
              $team1_player1_lastname = $row_players->last_name;
              $team1_player1_attacks = $row_players->attacks;
              $team1_player1_blocks = $row_players->blocks;
              $team1_player1_aces = $row_players->aces;
            }
          }
        ?>

        <br>
        <div class="row">
          <p><b>Statystyki</b></p>
          <br>
        </div>
        <div class="row">
          <div class="col-md-6">
            <table style="width: 90%;">
              <tr>
                <th><?= $team_team1_name ?></th>
              </tr>
              <tr>
                <th>ID</th>
                <th>NAZWISKO</th>
                <th>OBECNY</th>
                <th>ATAKI</th>
                <th>BLOKI</th>
                <th>ASY</th>
              </tr>

              <?php foreach($query_players->result() as $row_players) : ?>
                <?php if($row_players->id == $team_team1_player1) : ?>
                <tr>
                  <td><?= $row_players->id ?></td>
                  <td><?= $row_players->last_name ?></td>
                  <td><?php $data = array(
                    'type'          => 'checkbox',
                    'name'          => 'player1_1',
                    'id'            => 'player1_1'
                  ); echo form_input($data); ?></td>
                  <td><?php $data = array(
                    'type'          => 'text',
                    'placeholder'   => 0,
                    'name'          => 'player1_1_attacks',
                    'id'            => 'player1_1_attacks'
                  ); echo form_input($data); ?></td>
                  <td><?php $data = array(
                    'type'          => 'text',
                    'placeholder'   => 0,
                    'name'          => 'player1_1_blocks',
                    'id'            => 'player1_1_blocks'
                  ); echo form_input($data); ?></td>
                  <td><?php $data = array(
                    'type'          => 'text',
                    'placeholder'   => 0,
                    'name'          => 'player1_1_aces',
                    'id'            => 'player1_1_aces'
                  ); echo form_input($data); ?></td>
                </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </table>
          </div>

          <div class="col-md-6">
            <table style="width: 90%;">
              <tr>
                <th><?= $team_team2_name ?></th>
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

        <br>

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

    <div class="space50"></div>
  </div>
</div>
