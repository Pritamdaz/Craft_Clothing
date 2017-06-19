<?php
include('session.php');
?>
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
if(isset($user_check))
{
	$query="delete from wishlist where pid='".$_GET['id']."' and email='$login_email'";
	$result=mysql_query($query);
	if($result)
	{
		//echo "ok";
		header("location:wishlist.php");
	}
	else
	{
		//echo "not ok";
		header("location:wishlist.php");
	}
}
?>