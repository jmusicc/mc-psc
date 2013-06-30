<?php
	require_once('config.php');
	include("./lang/$language.php");
	require_once('auth.php');
	$skin = $_SESSION['SESS_SKIN'];
include('server-query.php'); 
$server = new MCServerStatus($serveradress, $serverport); //The second argument is optional in this case
$var = $server->online; //$server->online returns true if the server is online, and false otherwise
// echo $server->motd; //Outputs the Message of the Day
// echo $server->online_players; //Outputs the number of players online
// echo $server->max_players; //Outputs the maximum number of players the server allows
// print_r($server); //Shows an overview of the object and its contents. (For debugging.)
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title><?php echo $member_index_title; ?></title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
	<meta charset="utf-8">
</head>
<body>
<center><img src="images/logo_small.png"/></center>
<div class="wrapper"><h1><?php echo $member_welcome_left.$_SESSION['SESS_NAME'].$member_welcome_right;?></h1>
<?php include('menu.php'); ?>
<br><br><br />
<br />
<center>
<div class="mainframe" style="width:720px;">
<?php echo $server_avail; ?><br />
<style>tr td,tr th {text-align:center !important; background-color:#06F; border: 2px solid #0CF; color:#FFF;}
tr td.motd,tr th.motd{text-align:left !important; color:#FFF;}
.status{width:50px;}</style>
<br />
<center><table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th><?php echo $server_status; ?></th>
                        <?php if ($var != "0") { echo '<th>'.$server_MOTD.'</th>'; } ?>
                        <?php if ($var != "0") { echo '<th>'.$server_Players.'</th>'; } ?>
                        <th><?php echo $server_name;?></th>
					</tr>
				</thead>
				<tbody>
															<tr>
						<td class="status">
	             <?php 
				 				 if ($var != "0") { echo '<style>.status{background:#0F0;}</style>'.$server_status_online;
								 }
									 else { echo '<style>.status{background:#F00;}</style>'.$server_status_offline;
										 }
				  ?>
													</td>
						<?php if ($var != "0") { echo '<td class="motd">'.$server->motd.'</td>'; } ?>
						<?php if ($var != "0") { echo '<td class="motd">'.$server->online_players.'/'.$server->max_players.'</td>'; } ?>
                        <td><?php echo $serveradress.':'.$serverport; ?></td>
					</tr>
														</tbody>
			</table></center><br />


</div>    
</center>
  <?php include('footer.php'); ?>
</body>
</html>