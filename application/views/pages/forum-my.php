<!-- Page Content -->
<div class="forum-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="space20"></div>
        <div class="card" style="width: auto;">
          <div class="card-header">
            <?php if($this->session->userdata('logged_in') == TRUE) : ?>
              <?php if($this->session->userdata('is_active') == 1) : ?>
                <br><br>
                <h1 style="color: white; font-size: 30px;">Moje ogłoszenia</h1>
                <br>
              </div>

              <?php
                $query = $this->db->query("SELECT * FROM forum ORDER BY id DESC");
                $counter = 0;

                foreach($query->result() as $row):
              ?>
                <span style="color: white;">
                  <div class="card-header">
                  <?php if($row->author_id == $this->session->userdata('id')) : ?>
                      <?= 'Temat: '.$row->topic; ?>
                      <br>
                      <?= 'Treść: '.$row->content; ?>
                      <br>
                      <?= 'Data: '.$row->postdate; ?>
                      <?php $counter++; ?>
                      </div>
                  <?php endif; ?>

              <?php endforeach;?>

                <?php if($counter == 0) :?>
                  <p style="font-size: 20px;">Brak aktywnych ogłoszeń. <a href="forum-add" style="color: #364FD2;">Dodaj</a> coś!</p>
                <?php endif; ?>

              <?php else : ?>
                <p style="vertical-align: center; text-align: center; color: white;"><i><a href="enter-activation-code" style = "color: #364FD2;">Aktywuj konto</a>, aby dodać ogłoszenie.</i></p>
              <?php endif; ?>

          <?php else : ?>

             <br><br>

             <p style="vertical-align: center; text-align: center; color: white;"><i><a href="login" style = "color: #364FD2;">Zaloguj się</a>, aby dodać ogłoszenie.</i></p>

           <?php endif; ?>

            </div>
          </span>

        </div>
        <div class="space50"></div>
      </div>
    </div>
  </div>


</div>
