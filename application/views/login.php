<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Srp</title>
</head>
<body>

	<h1>
		Login - Srp
	</h1>

	<form action="<?= site_url('Auth/Login'); ?>" method="POST">
		<label>
			Username :
		</label>
		<br>
		<input type="text" name="username" required>
		<br><br>
		<label>
			Password :
		</label>
		<br>
		<input type="password" name="password" required>
		<br><br>
		<button type="submit" name="login">
			Login
		</button>
		&nbsp;&nbsp;&nbsp;
		<button type="reset" name="reset">
			Reset
		</button>
		&nbsp;&nbsp;&nbsp;
		<a href="<?= base_url('Home'); ?>">
			Kembali
		</a>
	</form>

</body>
</html>