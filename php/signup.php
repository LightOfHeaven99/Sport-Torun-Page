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
					<?php
						if (isset($_GET["error"])) {
							if ($_GET["error"] == "emptyfields") {
								echo '<p class="signuperror">Uzupełnij wszystkie pola!</p>';
							}
							else if ($_GET["error"] == "invalidfirstname") {
								echo '<p class="signuperror">Błędne imię!</p>';
							}
							else if ($_GET["error"] == "invalidlastname") {
								echo '<p class="signuperror">Błędne nazwisko!</p>';
							}
							else if ($_GET["error"] == "invaliduid") {
								echo '<p class="signuperror">Błędny login!</p>';
							}
							else if ($_GET["error"] == "invalidmail") {
								echo '<p class="signuperror">Błędny e-mail!</p>';
							}
							else if ($_GET["error"] == "passwordcheck") {
								echo '<p class="signuperror">Podane hasła nie są poprawne!</p>';
							}
							else if ($_GET["error"] == "usertaken") {
								echo '<p class="signuperror">Login jest już zajęty!</p>';
							}
						}
						else if (isset($_GET["signup"])) {
							echo '<p class="signupsuccess">Zarejestrowano pomyślnie!</p>';
						}
					?>
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
						<div class="space20"></div>
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
