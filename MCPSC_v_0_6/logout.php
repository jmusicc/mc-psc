<?php
	require_once('config.php');
	include("./lang/$language.php");
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title><?php echo $logout_title; ?></title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center><img src="images/logo_small.png"/></center>
<div class="wrapper"><h1><?php echo $logging_out; ?></h1>
<p align="center">&nbsp;</p>
<h4 align="center" class="err"><?php echo $logged_out; ?></h4>
<p align="center"><?php echo $logout_clickhere; ?></p>
</div>
  <?php include('footer.php'); ?>
</body>
</html>
