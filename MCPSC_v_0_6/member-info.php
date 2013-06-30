<?php
	require_once('auth.php');
	require_once('config.php');	
	include("./lang/$language.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="./favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title><?php echo $news_title; ?></title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center><img src="images/logo_small.png"/></center>
<div class="wrapper"><h1><?php echo $news_header; ?></h1>
<?php include('menu.php'); ?>
<br><br><br /><br />

<div class="wrapper"><div class="mainframe"><?php echo $news_text; ?></div></div>
  <?php include('footer.php'); ?>
</body>
</html>
