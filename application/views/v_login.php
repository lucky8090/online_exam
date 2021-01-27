<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login | Online Test App </title>
		<link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet">
		<link href="<?= base_url();?>font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="<?= base_url();?>css/style.css" rel="stylesheet">
		<link href="<?= base_url();?>css/style-responsive.css" rel="stylesheet">
	</head>
	<body>
		<div id="login-page">
			<div class="container">
				<form class="form-login" action="<?= site_url('c_login/index');?>" method="post">
					<h2 class="form-login-heading">sign in now</h2>
					<div class="login-wrap">
						<input type="text" class="form-control" placeholder="User Name" name="username" autofocus><br>
						<input type="password" class="form-control" name="password" placeholder="Password">
						<label class="checkbox">
							<span class="pull-right">
								<a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
							</span>
						</label>
						<button class="btn btn-theme btn-block" type="submit" name="login" value="signin" ><i class="fa fa-lock"></i> SIGN IN</button><hr>
						<div class="registration">
							Need Help ?<br/>
							<a class="" href="http://www.softcrewit.com/contact.php">
								Contact Support !
							</a>
						</div>
					</div>
				</form>	  	
			</div>
		</div>
		<script src="<?php echo base_url();?>js/jquery.js"></script>
		<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.backstretch.min.js"></script>
		<script>
			$.backstretch("<?php echo base_url();?>img/bg.jpg", {speed: 500});
		</script>
		<script>
			setTimeout(function() {
				$('#flash_msg').fadeOut("slow");
			}, 4000 );
		</script>
	</body>
</html>
