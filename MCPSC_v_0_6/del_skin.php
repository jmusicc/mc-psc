<?php
    require_once('config.php');
	include("./lang/$language.php");
	require_once('auth.php');
	$skin = $_SESSION['SESS_SKIN'];
	$path=$skinpath.$skin;

	// Debug info
	//echo $path;
	
	// Revert to default Skin! Image Stored in Base64 its the default Steve png in Minecraft.
	$defaultskin="data:image/png;base64,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";

// Write back the default skin.
list($type, $defaultskin) = explode(';', $defaultskin);
list(, $defaultskin)      = explode(',', $defaultskin);
$defaultskin = base64_decode($defaultskin);
file_put_contents($skinpath.$skin, $defaultskin);

//    Old method, its basicly makes invalid the png, but it leaves the viewer a black screen, so it is not used anymore. New method above
//    $fh = fopen($path, 'w') or die("File nem megnyitható");
//    fwrite($fh, "");
//    fclose($fh);


    echo '<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" /><META HTTP-EQUIV="Refresh"
CONTENT="5; URL=./member-profile.php"><title>'.$skindel_title2.'</title><link href="loginmodule.css" rel="stylesheet" type="text/css" /><meta charset="utf-8"></head>';
	
    echo "<body><div class='mainframe'><center><br />".$skindel_text3."<br />
";

    echo "<br><br><a href='member-profile.php'>".$skindel_text2."</a></center></div></body>";
?>