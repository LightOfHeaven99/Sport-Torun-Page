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
		<div class="space100"></div>
		<div class="d-flex justify-content-center h-100">
			<div class="card">

				<?php
					if (isset($_SESSION['userId'])) {
						echo '<form action="includes/logout.inc.php" method="post">
										<div class="card-header">
											<h3>Zalogowany jako</h3>
										</div>
										<div class="card-header">
											<div class ="space10"></div>
											<h4 style="color: white; text-align: center;">Imię Nazwisko</h4>
											<p style="color: gray; text-align: center;">(pod taką nazwą będziesz komentować)</p>
										</div>
										<div class="card-body">
											<a href="#" style="color: #8AFF8C;">Zmień wyświetlanie na login</a></br>
											<a href="#" style="color: #8AFF8C;">Edytuj swoje dane</a></br>
											<a href="#" style="color: #8AFF8C;">Usuń konto</a>
										</div>
										<div class="card-footer">
											<div class="form-group">
												<input type="submit" value="Wyloguj" name="logout-submit" class="btn float-right logout_btn">
											</div>
											<div class="space20"></div>
										</div>
									</form>';
					}
					else {
						echo '<form action="includes/login.inc.php" method="post">
										<div class="card-header">
											<h3>Zaloguj się</h3>
											<div class="d-flex justify-content-end social_icon">
												<span><i class="fab fa-facebook-square"></i></span>
												<span><i class="fab fa-google-plus-square"></i></span>
												<span><i class="fab fa-twitter-square"></i></span>
											</div>
										</div>

										<div class="card-body">
											<div class="input-group form-group">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-user"></i></span>
												</div>
												<input type="text" name="uid" class="form-control" placeholder="login...">
											</div>
											<div class="input-group form-group">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-key"></i></span>
												</div>
												<input type="password" name="pwd" class="form-control" placeholder="hasło...">
											</div>
											<div class="row align-items-center remember">
												<input type="checkbox">Zapamiętaj mnie
											</div>
											<div class="form-group">
												<input type="submit" name="login-submit" value="OK" class="btn float-right login_btn">
											</div>
											<div class="space30"></div>
										</div>

										<div class="card-footer">
											<div class="d-flex justify-content-center links">
												Nie masz konta?<a href="signup.php">Zarejestruj się!</a>
											</div>
											<div class="d-flex justify-content-center links">
												<a href="reset-password.php">Zapomniałeś hasła?</a>
											</div>
										</div>
									</form>';
					}
				?>

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
