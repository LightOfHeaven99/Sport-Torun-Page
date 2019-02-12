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
        <div class="card-header">
          <h3>Zresetuj hasło</h3>
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
          <div class="space20"></div>
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
