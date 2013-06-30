<?php
	require_once('config.php');
	include("./lang/$language.php");
	require_once('auth.php');
	$skin = $_SESSION['SESS_SKIN'];

$allowedExts = array("png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "<span style='color:#000'>Error: " . $_FILES["file"]["error"] . "<br></span>";
    }
  else
    {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      $cloakpath . $_SESSION['SESS_SKIN']);
	  header("location: member-profile.php");
    }
  }
else
  {
  echo "<span style='color:#000'>".$invalid_filetype;
  echo "<a href='member-profile.php'>".$back_common."</a></span>";
  }
?> 