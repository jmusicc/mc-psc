<?php
    require_once('config.php');
	include("./lang/$language.php");
	require_once('auth.php');
	$cape = $_SESSION['SESS_CAPE'];
	$path=$cloakpath.$cape;
	// echo $path;

    $fh = fopen($path, 'w') or die($fileopen_err);
    fwrite($fh, "");
    fclose($fh);

    echo '<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" /><META HTTP-EQUIV="Refresh"
CONTENT="5; URL=./member-profile.php"><title>'.$skindel_title.'</title><link href="loginmodule.css" rel="stylesheet" type="text/css" /><meta charset="utf-8"></head>';
	
    echo "<body><div class='mainframe'><center><br />".$skindel_text."<br />
";

    echo "<br><br><a href='member-profile.php'>".$skindel_text2."</a></center></div></body>";

?>