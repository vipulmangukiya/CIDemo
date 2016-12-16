<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Register</title>

	<script type="text/javascript" src="<?= base_url('assets/js/jquery-1.10.2.js');?> "></script>
	<script type="text/javascript" src="<?= base_url('assets/js/jquery-ui.min.js');?> "></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js');?> "></script>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css');?> ">
	<link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.css');?> ">
	
	<script type="text/javascript">
		
		$(document).ready(function() {
			$(function(){
				$("#bdate").datepicker();
			});
		});
	</script>
</head>
<body>
<?php foreach ($users as  $value): ?>

	<div class="container" style="margin-top: 150px;">
<div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
	<div id="feedback"></div>
		<form role="form" action="./update_/" method="post" id="frm-singup"  autocomplete="on">
			 <div class="row">
			 	<div class="col-xs-6 col-sm-6 col-md-6">
			 		<div class="form-group">
			 			<input name="user_fname" id="fname" class="form-control input-md" placeholder="First name" required="" pattern="^[a-zA-z]+$" value="<?=$value['user_fname'];?>"/>
			 		</div>
			 	</div>
			 	<div class="col-xs-6 col-sm-6 col-md-6">
			 		<div class="form-group">
			 			<input name="user_lname" id="lname" class="form-control input-md" placeholder="Last name" required="" pattern="^[a-zA-z]+$"  value="<?=$value['user_lname'];?>"/>
			 		</div>
			 	</div>	
			 </div>
			 <div class="row">
			 	<div class="col-xs-3 col-sm-3 col-md-3">
			 		<div class="form-group">
			 			<input type="radio" name="gender" id="male"  value="M" required="" checked=""  />	
                        <label class="control-label" for="male">Male</label>
			 		</div>
			 	</div>
			 	<div class="col-xs-4 col-sm-4 col-md-41">
			 		<div class="form-group">
			 			<input type="radio" name="gender" id="female" value="F" required=""/>	
                         <label class="control-label" for="female">Female</label>
			 		</div>
			 	</div>
			 </div>	
			 <div class="form-group">
			 		<input type="email" id="user_email" name="user_email" class="form-control input-md" placeholder="Email" required=""   value="<?=$value['user_email'];?>"/>
			 </div>	
			 
			 <div class="form-group">
			 		<input type="text" id="bdate" name="birthdate" class="form-control input-md" placeholder="Birth date (mm/dd/yyyy)" maxlength="10" required="" readonly=""  value="<?=$value['birthdate'];?>">
			 </div>
			 <div class="form-group">
			 		<input type="text" id="mobile" name="mobile" class="form-control input-md" placeholder="Mobile" maxlength="10" required="" pattern="^[0-9]{10}"  value="<?=$value['mobile'];?>"/>
			 </div>
			<div class="row"> 
				 <div class="form-group">
				 	<div class="col-xs-4 col-sm-4 col-md-4"> 	
				 			<button type="submit" class="form-control btn-info" id="btn-singup">Update</button>
				 	</div>	
				 	</div>		
				 </div>
		</form>
	</div>	
</div>
<?php endforeach; ?>
</body>
</html>