<?php
include('session.php');
?>
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
if(isset($user_check))
{
	$query="delete from orders where bid='".$_GET['del']."' and email='$login_email'";
	$result=mysql_query($query);
	if($result)
	{
		//echo "ok";
		header("location:orders.php");
	}
	else
	{
		//echo "not ok";
		header("location:orders.php");
	}
}
?>