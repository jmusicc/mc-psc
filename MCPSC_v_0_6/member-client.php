<?php
	require_once('config.php');
	require_once('auth.php');
	include("./lang/$language.php");
	$skin = $_SESSION['SESS_SKIN'];

function clearBrowserCache() {
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
}
clearBrowserCache(); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title><?php echo $down_title; ?></title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
	<meta charset="utf-8">
</head>
<body>
<center><img src="images/logo_small.png"/></center>
<div class="wrapper"><h1><?php echo $down_header; ?></h1>
<?php include('menu.php'); ?>
<br><br><br />
<br />
<center>
<div class="mainframe" style="background:none #FFF; text-align:justify;">
<?php echo $down_text; ?>
</div>    
</center>
  <?php include('footer.php'); ?>
</body>
</html>
