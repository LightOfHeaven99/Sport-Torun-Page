<?php include '../../controllers/User.php'; ?>

<!-- Login widnow -->
<div class="login-bg">
<div class="container">

  <!-- <form class="form-signin" method="POST"> -->

  <div class="space50"></div>
  <div class="space50"></div>
	<div class="d-flex justify-content-center">
		<div class="card">

      <!-- JEŚLI ZALOGOWANO -->
      <?php // if($this->session->userdata('logged_in') == TRUE) : ?>
      <?php if($isLoggedUser) == TRUE) : ?>

      <?php
        $attributes = array('class' => 'form-signin');
        echo form_open('logout', $attributes);
      ?>

      <?php if($isAdminUser == 0) : ?>
  			<div class="card-header">
  				<h3>Zalogowany jako</h3>
  			</div>
  			<div class="card-header">
  				<div class ="space10"></div>
  				<h4 style="color: white; text-align: center;">
            <?php if($displayLoginUser == 0) {
              echo $firstNameUser." ".$lastNameUser;
            } else {
              echo $uidUser;
            }
            ?>
          </h4>
  				<p style="color: gray; text-align: center;">(pod taką nazwą będziesz komentować)</p>
  			</div>
  			<div class="card-body">
          <?php if($displayLoginUser == 0) : ?>
            <a href="#" style="color: #364FD2;">Zmień wyświetlanie na login</a></br> <!-- display_login 0->1 -->
          <?php else : ?>
            <a href="#" style="color: #364FD2;">Zmień wyświetlanie na imię i nazwisko</a></br> <!-- display_login 1->0 -->
          <?php endif; ?>
          <a href="#" style="color: #364FD2;">Edytuj swoje dane</a></br> <!-- podobne do panelu rejestracji -->
  				<a href="#" style="color: #364FD2;">Usuń konto</a>  <!-- ostrzeżenie do akceptacji, usunięcie rekordu z tabeli i LOGOUT -->

      <?php else : ?>
        <div class="card-header">
          <h3 style="color: #364FD2";>ADMIN</h3>
        </div>
        <div class="card-header">
  				<div class ="space10"></div>
  				<h4 style="color: white; text-align: center;">
            <?= $firstNameUser." ".$lastNameUser; ?>
          </h4>
  			</div>
        <div class="card-body">
        <a href="admin/news-panel" style="color: #364FD2;">Zarządzaj aktualnościami</a></br>
				<a href="#" style="color: #364FD2;">Zarządzaj meczami</a></br>
				<a href="#" style="color: #364FD2;">Zarządzaj drużynami</a></br>
        <a href="#" style="color: #364FD2;">Zarządzaj zawodnikami</a></br>
        <a href="#" style="color: #364FD2;">Zarządzaj multimediami</a></br>
        <a href="#" style="color: #364FD2;">Zarządzaj użytkownikami</a>
      <?php endif; ?>

			</div>
			<div class="card-footer">
				<div class="form-group">

          <?php
            $data = array(
              'type'          => 'submit',
              'name'          => 'logout-submit',
              'class'         => 'btn float-right logout_btn',
              'value'         => 'Wyloguj'
            );
            echo form_submit($data);
          ?>

        </div>
				<div class="space20"></div>
			</div>

      <?php echo form_close(); ?>

      <!-- JEŚLI WYLOGOWANO -->
      <?php else : ?>

      <?php
        $attributes = array('class' => 'form-signin');
        echo form_open('logged', $attributes);
      ?>

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

      <?php echo form_close(); ?>

      <!-- KONIEC WARUNKU ZALOGOWANO/WYLOGOWANO -->
      <?php endif; ?>

		</div>
	</div>

  <div class="space50"></div>
  </div>
</div>
