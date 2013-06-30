<?php 
include('config.php'); 
include("./lang/$language.php");
include('auth.php'); 
?>

<a href="member-index.php"><div class="button"><?php echo $menu_index_1; ?></div></a>
<a href="#"><div class="button"><?php echo $menu_index_2; ?></div></a>
<a href="./member-profile.php"><div class="button"><?php echo $menu_index_3; ?></div></a>
<a href="./member-skineditor.php"><div class="button"><?php echo $menu_index_4; ?></div></a>
<a href="./member-client.php"><div class="button"><?php echo $menu_index_5; ?></div></a>
<a href="#"><div class="button"><?php echo $menu_index_6; ?></div></a>
<a href="#"><div class="button"><?php echo $menu_index_7; ?></div></a>
<a href="./member-info.php"><div class="button"><?php echo $menu_index_8; ?></div></a>
<a href="logout.php"><div class="button"><?php echo $menu_index_9; ?></div></a>
<br /><br />
<br /><br />
<div class="panel">

<?php echo $menu_playername; ?>

<?php echo $_SESSION['SESS_NAME'];  
           $skin = $_SESSION['SESS_SKIN'];  
		   $cape = $_SESSION['SESS_CAPE'];
		   ?>

<?php echo $menu_separator; ?>

<a target="new" href="<?php echo $skinpath.$skin; ?>"><?php echo $menu_download_skin; ?></a>

<?php echo $menu_separator; ?>

<?php 
if (filesize($cloakpath.$cape) != '0') {
	echo "<a target='new' href='".$cloakpath.$skin."'>".$menu_download_cape."&nbsp;&nbsp;</a>".$menu_separator;
	}
	else{
		echo "";
		}
    ?>

<a href="<?php echo $menu_skindex_link; ?>" target="new"><?php echo $menu_download_skindex_link; ?></a>

</div></div><br />