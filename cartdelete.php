<?php
include('session.php');
?>
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
if(isset($user_check))
{
	$query="delete from cart where pid='".$_GET['id']."' and email='$login_email'";
	$result=mysql_query($query);
	if($result)
	{
		//echo "ok";
		header("location:cart.php");
	}
	else
	{
		//echo "not ok";
		header("location:cart.php");
	}
}
?>