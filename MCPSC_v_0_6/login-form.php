<?php 
include('config.php');
include("./lang/$language.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title><?php echo $section_login_top; ?></title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<link rel="icon" type="image/png" href="./favicon.png">
<center><img src="images/logo_small.png"/></center><br />
<div class="wrapper"><h1><?php echo $section_login_header; ?></h1>
<?php echo $section_not_logged_text; ?>
<br />
<br />
<br />
<center>
<div class="mainframe" style=" background:none #FFF; width:270px;">

<form id="loginForm" style="margin-left:auto; margin-right:auto;" name="loginForm" method="post" action="login-exec.php">
  <table width="180" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b><?php echo $section_login_ID ?></b></td>
      <td width="188"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <td><b><?php echo $section_login_password ?></b></td>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="<?php echo $section_login_button ?>" /></td>
</form>
      <td width="188"><form id="Regbutton" style="" name="Regbutton" method="post" action="register-form.php">
       <input type="submit" name="Submit" value="<?php echo $section_reg_button ?>" />
        </form>
     </td>
    </tr>
  </table>
  </div>
  <?php include('footer.php'); ?>
</body>
</html>