<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcomr To CodeIgniter Demo Project</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css'); ?>">
</head>

<body>
		<div class="container"  style="margin-top: 15%; padding: 3%;">
	<div class="col-xs-12 col-sm-3 col-md-4 col-sm-offset-3 col-md-offset-4">
		
		<form name="login" role="form" action="./users/login" method="post" id="frm-login"> 	
			<div class="form-group">
				<label for="uemail">Email</label>
				<input type="email" id="uemail" name="email" class="form-control input-md" placeholder="Email" required="" />
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="re_pwd" class="form-control input-md" placeholder="Password" required="" />
			</div>
			<div class="row"> 
				 <div class="form-group">
				 	<div class="col-xs-4 col-sm-4 col-md-4"> 	
			 			<button type="submit" class="form-control btn-info" id="btn-singup">Login</button>
				 	</div>
				 	<div class="col-xs-4 col-sm-4 col-md-4">
			 			<button type="reset" class="form-control " id="btn-clear">Clear</button>
				 	</div>		
			 	</div>		
			</div>
				<div class="row"> 
				 <div class="form-group">
			 			<a href="./users/register">Register</a>
			 			<a href="./users/forgot">Forgot Password</a>	
			 	</div>		
			</div>
			
		</form>		
	</div>
</div>
</body>
</html>