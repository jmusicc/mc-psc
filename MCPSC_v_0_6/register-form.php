<?php
	session_start();
    include('config.php');
	include("./lang/$language.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title><?php echo $reg_title; ?></title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body style="font:MC; font-weight:normal; font-size:11px; font-stretch:normal;">
<center><img src="images/logo_small.png"/></center><br />
<br />
<br />
<br />
<br />
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<div class="wrapper" style="color:#FFF; width:250px;background: #efc5ca;
background: -moz-linear-gradient(45deg,  #efc5ca 0%, #d24b5a 26%, #ba2737 65%, #f18e99 100%);
background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#efc5ca), color-stop(26%,#d24b5a), color-stop(65%,#ba2737), color-stop(100%,#f18e99));
background: -webkit-linear-gradient(45deg,  #efc5ca 0%,#d24b5a 26%,#ba2737 65%,#f18e99 100%);
background: -o-linear-gradient(45deg,  #efc5ca 0%,#d24b5a 26%,#ba2737 65%,#f18e99 100%);
background: -ms-linear-gradient(45deg,  #efc5ca 0%,#d24b5a 26%,#ba2737 65%,#f18e99 100%);
background: linear-gradient(45deg,  #efc5ca 0%,#d24b5a 26%,#ba2737 65%,#f18e99 100%);
padding:5px; border-radius:15px; border:2px solid #F00; box-shadow:0px 0px 15px #F00;"><ul class="err">'; 
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul></div><br /><br />';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<div class="mainframe" style="width:320px; background:none #FFFFFF;">
<form id="loginForm" name="loginForm" method="post" action="register-exec.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th width="124"><?php echo $reg_username; ?></th>
      <td width="168"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <th><?php echo $reg_charname; ?> <spam style="color:#F00">*</spam></th>
      <td><input name="fname" type="text" class="textfield" id="fname" /></td>
    </tr>
    <tr>
      <th><?php echo $reg_password; ?> </th>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <th><?php echo $reg_password_2; ?> </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="<?php echo $reg_button; ?>" /></td>
    </tr>

</form>
  <tr>
    <td>&nbsp;</td>
    <td><form id="backbutton" name="Vissza" method="post" action="index.php">
  <input type="submit" name="Submit" value="<?php echo $reg_back_button; ?>" />
  </form><br /></td>
  <tr>
  </table>
<center>
  <strong><spam style="color:#F00">* - <?php echo $reg_note; ?><br />
  </spam>
  </strong>
</center>
</div>
  <?php include('footer.php'); ?>
</body>
</html>
