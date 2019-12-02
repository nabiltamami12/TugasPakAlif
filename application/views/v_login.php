<!DOCTYPE html>
<html>
<head>
<link href="<?php echo base_url('assets/login.css') ?>" rel="stylesheet">
</head>
<body>
<div class="grad"></div>
		<div class="header">
			<div>Site<span>Random</span></div>
		</div>
        <br>
        <div class="login">
	<form action="<?php echo base_url('index.php/cek_login'); ?>" method="post">		
	<input type="text" placeholder="username" name="username"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="submit" value="Login">
    </form>
    </div>
</body>
</html>
