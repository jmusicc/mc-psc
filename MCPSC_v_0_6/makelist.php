<?php
$connection = mysql_connect("localhost", "kwa10000_cyber", "-Cyber-") or die("Error connecting to database");
mysql_select_db("kwa10000_cyber", $connection);
$result = mysql_query("SELECT * FROM members ORDER BY member_id", $connection) or die("error querying database");
$i = 0;
while($result_ar = mysql_fetch_assoc($result)){
?>
<style>
 .table tr td{
	 width:70px;
	 }
</style>
<table width="655" border="1">
  <tr <?php if($i%2 == 1){ echo "class='body2'"; }else{echo "class='body1'";}?>>
    <td width="37"><?php echo $result_ar['member_id']; ?></td>
    <td width="152"><?php echo $result_ar['name']; ?></td>
    <td width="152"><?php echo $result_ar['login']; ?></td>
    <td width="152"><?php echo $result_ar['skin']; ?></td>
    <td width="152"><?php echo $result_ar['cape']; ?></td>
  </tr>
</table>

<?php
$i+=1;
}
?>

<br />
<br />

<?php
$query="SELECT * FROM members ORDER BY member_id";
$rt=mysql_query($query);
echo mysql_error();                    
while($nt=mysql_fetch_array($rt)){
echo $nt[member_id].'|'.$nt[name].'|'.$nt[login].'|'.$nt[skin].'|'.$nt[cape].'|'.'<br />';     
}
?>
