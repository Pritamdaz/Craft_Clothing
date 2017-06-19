<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
session_start();
$user_check=$_SESSION['rcaccount'];
$ses_sql=mysql_query("select email from account where email='$user_check'",$link);
$row=mysql_fetch_assoc($ses_sql);
$login_email=$row['email'];
$ses_sql1=mysql_query("select name from account where email='$user_check'",$link);
$row1=mysql_fetch_assoc($ses_sql1);
$login_name=$row1['name'];
if(!isset($login_email))
{
	mysql_close($link);
	header('Location:login.php?msg');
}
?>