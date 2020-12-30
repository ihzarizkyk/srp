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
			<b>Username :</b>
		</label>
		<br>
		<input type="text" name="username" required>
		<br><br>
		<label>
			<b>Sandi :</b>
		</label>
		<br>
		<input type="password" name="password" id="pass"required>
		<br><br>
		<input type="checkbox" name="checkbox" onclick="Toggle()"> <b>Sembunyikan / Tampilkan Sandi</b>
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

<script>
	function Toggle()
	{
		var pass = document.getElementById("pass");
		if(pass.type == "password")
		{
			pass.type = "text";
		}else{
			pass.type = "password";
		}
	}
</script>
</body>
</html>