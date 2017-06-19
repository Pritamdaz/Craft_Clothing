<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
session_start();
$admin_check=$_SESSION['admin'];
$ses_sql=mysql_query("select id from adminid where id='$admin_check'",$link);
$row=mysql_fetch_assoc($ses_sql);
$login_id=$row['id'];
if(!isset($login_id))
{
	mysql_close($link);
	header('Location:index.php');
}
?>