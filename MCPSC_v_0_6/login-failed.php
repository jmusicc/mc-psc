<?php 
include('config.php');
include("./lang/$language.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<META HTTP-EQUIV="Refresh" CONTENT="5; URL=./index.php">
<title><?php echo $section_login_failed ?></title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrapper"><h1><?php echo $section_login_failed ?></h1>
<p align="center">&nbsp;</p>
<h4 align="center" class="err"><?php echo $section_login_failed_text ?><br />
<br />
<a href="./index.php"><?php echo $section_login_failed_click ?></a></h4></div>
  <?php include('footer.php'); ?>
</body>
</html>
