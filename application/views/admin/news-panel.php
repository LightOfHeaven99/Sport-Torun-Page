<!-- Page Content -->
<div class="admin-bg">
  <div class="container">
    <div style="height: 50px;"></div>
    <h1>PANEL DODAWANIA POSTU</h1>

    <?php
      $attributes = array('class' => 'form-signin');
      echo form_open('newsadded', $attributes);
    ?>

    <?php
      //echo $this->session->flashdata('login_info');
      echo validation_errors('<div class="alert alert-danger">', '</div>');
    ?>
    <div class="row">
      <div class="col-md-3">

        <label for="topic-contact"><b>Tytuł</b></label>

        <?php
          $data = array(
            'type'          => 'textarea',
            'name'          => 'title-news',
            'id'            => 'title-news',
            'class'         => 'form-control'
            //'required'      => 'required'
          );
          echo form_input($data);
        ?>

        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <p><b>Treść posta</b></p>

          <?php
            $data = array(
              'type'          => 'textarea',
              'name'          => 'content-news',
              'id'            => 'content-news',
              'class'         => 'form-control'
              //'required'      => 'required'
            );
            echo form_input($data);
          ?>

          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <p><b>Zdjęcie</b></p>

            <?php /*
              $data = array(
                'type'          => 'file',
                'name'          => 'image-news',
                'id'            => 'image-news'
                //'required'      => 'required'
              );
              echo form_input($data); */
            ?>

            <?php echo form_open_multipart('newsadded');?>
              <input type="file" name="image-news" id="image-news" size="20" />
              <br />
                <p>lub wybierz z <b>domyślnych</b></p>
                <input type="checkbox"><input type="checkbox"><input type="checkbox">
              <br />
              <!-- <input type="submit" value="Załaduj plik" /> -->
            </form>

            </div>
          </div>


          <div class="row align-items-center remember">

            <?php
              $data = array(
                'type'          => 'checkbox',
                'name'          => 'voting-news',
                'id'            => 'voting-news'
              );
              echo form_input($data);
            ?>
            <label for="display-login" style="padding-left: 3px; padding-top: 7px; color: black;">Wyłącz ocenianie tego postu</label>

          </div>

          <div class="row align-items-center remember">

            <?php
              $data = array(
                'type'          => 'checkbox',
                'name'          => 'commenting-voting',
                'id'            => 'commenting-voting'
              );
              echo form_input($data);
            ?>
            <label for="display-login" style="padding-left: 3px; padding-top: 7px; color: black;">Wyłącz komentowanie tego postu</label>

          </div>

          <div class="form-group">

            <?php
              $data = array(
                'type'          => 'submit',
                'name'          => 'news-add',
                'id'            => 'news-add',
                'class'         => 'btn float-left delete_users_btn',
                'value'         => 'Dodaj post'
              );
              echo form_submit($data);
            ?>

          </div>

    <?php echo form_close(); ?>

    <div class="space200"></div>

  </div>
</div>
