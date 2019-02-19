<!-- Signup window -->
<div class="container community_img">

  <form class="form-signin" method="POST">

  <?php
    $attributes = array('class' => 'form-signin');
    echo form_open('register', $attributes);
  ?>

  <div class="space50"></div>
  <div class="d-flex justify-content-center">
    <div class="card-signup">
      <div class="card-header">
        <h3>Zarejestruj się</h3>
      </div>
      <div class="card-body">
        <h4 style="color:white">Podaj dane</h4>
        <?php
          //echo $this->session->flashdata('signup_info');
          echo validation_errors('<div class="alert alert-danger">', '</div>');
        ?>
          <div class="input-group form-group">

            <!-- <input type="text" name="first-name" id="first-name" class="form-control" placeholder="Imię" required> -->
            <?php
              $data = array(
                'name'          => 'first-name',
                'id'            => 'first-name',
                'class'         => 'form-control',
                'placeholder'   => 'Imię'
                //'required'      => 'required'
              );
              $val = set_value('first-name');
              echo form_input($data, $val);
            ?>

            <!-- <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Nazwisko" required> -->
            <?php
              $data = array(
                'name'          => 'last-name',
                'id'            => 'last-name',
                'class'         => 'form-control',
                'placeholder'   => 'Nazwisko'
                //'required'      => 'required'
              );
              $val = set_value('last-name');
              echo form_input($data, $val);
            ?>

          </div>
          <div class="input-group form-group">

            <!-- <input type="text" name="uid" id="uid" class="form-control" placeholder="Login" required> -->
            <?php
              $data = array(
                'name'          => 'uid',
                'id'            => 'uid',
                'class'         => 'form-control',
                'placeholder'   => 'Login'
                //'required'      => 'required'
              );
              $val = set_value('uid');
              echo form_input($data, $val);
            ?>

          </div>
          <div class="input-group form-group">

            <!-- <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Hasło" required> -->
            <?php
              $data = array(
                'type'          => 'password',
                'name'          => 'pwd',
                'id'            => 'pwd',
                'class'         => 'form-control',
                'placeholder'   => 'Hasło'
                //'required'      => 'required'
              );
              echo form_input($data);
            ?>

          </div>
          <div class="input-group form-group">

            <!-- <input type="password" name="pwd-repeat" id="pwd-repeat" class="form-control" placeholder="Powtórz hasło" required> -->
            <?php
              $data = array(
                'type'          => 'password',
                'name'          => 'pwd-repeat',
                'id'            => 'pwd-repeat',
                'class'         => 'form-control',
                'placeholder'   => 'Powtórz hasło'
                //'required'      => 'required'
              );
              echo form_input($data);
            ?>

          </div>
          <div class="input-group form-group">

            <!-- <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" required autofocus> -->
            <?php
              $data = array(
                'type'          => 'email',
                'name'          => 'email',
                'id'            => 'email',
                'class'         => 'form-control',
                'placeholder'   => 'E-mail'
                //'required'      => 'required'
              );
              $val = set_value('email');
              echo form_input($data, $val);
            ?>

          </div>
          <div class="row align-items-center remember">

            <!--<input type="checkbox" name="display-login" id="display-login">Chcę być widoczny jako mój login -->
            <?php
              $data = array(
                'type'          => 'checkbox',
                'name'          => 'display-login',
                'id'            => 'display-login'
              );
              echo form_input($data);
            ?>
            <p style="font-size: 20px; color: white;">Chcę być widoczny jako mój login</p>
          </div>

          <div class="form-group">

            <!-- <input type="submit" name="signup-submit" value="Dołącz" class="btn float-right signup_btn"> -->
            <?php
              $data = array(
                'type'          => 'submit',
                'name'          => 'signup-submit',
                'class'         => 'btn float-right signup_btn',
                'value'         => 'Dołącz'
              );
              echo form_submit($data);
            ?>

          </div>
					<div class="space20"></div>
      </div>
    </div>
  </div>

  <?php echo form_close(); ?>

  </form>

</div>
