
<!-- Login widnow -->
<div class="login-bg">
<div class="container">

  <!-- <form class="form-signin" method="POST"> -->

  <?php
    $attributes = array('class' => 'form-signin');
    echo form_open('login-post', $attributes);
  ?>

  <div class="space50"></div>
  <div class="space50"></div>
	<div class="d-flex justify-content-center">
		<div class="card">

      <!-- JEŚLI ZALOGOWANO -->
      <?php if(isset($_SESSION['login'])) : ?>

			<div class="card-header">
				<h3>Zalogowany jako</h3>
			</div>
			<div class="card-header">
				<div class ="space10"></div>
				<h4 style="color: white; text-align: center;">Imię Nazwisko</h4>
				<p style="color: gray; text-align: center;">(pod taką nazwą będziesz komentować)</p>
			</div>
			<div class="card-body">
				<a href="#" style="color: #364FD2;">Zmień wyświetlanie na login</a></br>
				<a href="#" style="color: #364FD2;">Edytuj swoje dane</a></br>
				<a href="#" style="color: #364FD2;">Usuń konto</a>
			</div>
			<div class="card-footer">
				<div class="form-group">
					<input type="submit" value="Wyloguj" name="logout-submit" class="btn float-right logout_btn">
				</div>
				<div class="space20"></div>
			</div>


      <!-- JEŚLI WYLOGOWANO -->
      <?php else : ?>

		  <div class="card-header">
				<h3>Zaloguj się</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>

			<div class="card-body">
        <?php
          //echo $this->session->flashdata('login_info');
          echo validation_errors('<div class="alert alert-danger">', '</div>');
        ?>
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>

          <!-- <input type="text" name="uid" id="uid" class="form-control" placeholder="Login" required> -->
          <?php
            $data = array(
              'name'          => 'uid',
              'id'            => 'uid',
              'class'         => 'form-control',
              'placeholder'   => 'Login'
              //'required'      => 'required'
            );
            echo form_input($data);
          ?>

        </div>
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>

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
				<div class="row align-items-center remember">

					<!-- <input type="checkbox">Zapamiętaj mnie -->
          <?php
          $data = array(
            'type'          => 'checkbox',
            'name'          => 'remember-me',
            'id'            => 'remember-me'
          );
          echo form_input($data);
          ?>

          <p style="font-size: 20px; color: white;">Zapamiętaj mnie</p>
				</div>
				<div class="form-group">

          <!-- <input type="submit" name="login-submit" value="OK" class="btn float-right login_btn"> -->
          <?php
            $data = array(
              'type'          => 'submit',
              'name'          => 'login-submit',
              'class'         => 'btn float-right login_btn',
              'value'         => 'OK'
            );
            echo form_submit($data);
          ?>

        </div>
				<div class="space30"></div>
			</div>

			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Nie masz konta?<a href="register">Zarejestruj się!</a>
				</div>
				<div class="d-flex justify-content-center links">
					<a href="reset-password">Zapomniałeś hasła?</a>
				</div>
			</div>

      <!-- KONIEC WARUNKU ZALOGOWANO/WYLOGOWANO -->
      <?php endif; ?>

		</div>
    <div class="space50"></div>
	</div>

  <?php echo form_close(); ?>

  <!-- </form> -->

</div>
</div>
