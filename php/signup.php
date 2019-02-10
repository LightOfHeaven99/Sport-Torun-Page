<?php
	require "header.php";
?>

<style>
	<?php
		include '../default/bootstrap/css/bootstrap.min.css';
		include '../css/community.css';
	?>
</style>

<main>
  <div class="container">
    <div class="space50"></div>
    <div class="d-flex justify-content-center h-100">
      <div class="card-signup">
        <div class="card-header">
          <h3>Zarejestruj się</h3>
        </div>
        <div class="card-body">
          <h4 style="color:white">Podaj dane</h4>

          <form action="includes/signup.inc.php" method="post">
            <div class="input-group form-group">
              <input type="text" name="first-name" class="form-control" placeholder="Imię">
              <input type="text" name="last-name" class="form-control" placeholder="Nazwisko">
            </div>
            <div class="input-group form-group">
              <input type="text" name="uid" class="form-control" placeholder="Login">
            </div>
            <div class="input-group form-group">
              <input type="password" name="pwd" class="form-control" placeholder="Hasło">
            </div>
            <div class="input-group form-group">
              <input type="password" name="pwd-repeat" class="form-control" placeholder="Powtórz hasło">
            </div>
            <div class="input-group form-group">
              <input type="text" name="mail" class="form-control" placeholder="E-mail">
            </div>
            <div class="row align-items-center remember">
              <input type="checkbox" name="display-login">Chcę być widoczny jako mój login
            </div>
            <div class="form-group">
              <input type="submit" name="signup-submit" value="Dołącz" class="btn float-right signup_btn">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="space100"></div>
  </div>
</main>

<script>
	<?php
		include '../default/jquery/jquery.min.js';
		include '../default/bootstrap/js/bootstrap.bundle.min.js';
	?>
</script>

<?php
	require "footer.php";
?>
