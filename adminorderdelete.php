<?php
include('adminsession.php');
?>
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
if(isset($admin_check))
{
	$query="delete from orders where bid='".$_GET['del']."'";
	$result=mysql_query($query);
	if($result)
	{
		//echo "ok";
		header("location:adminorders.php");
	}
	else
	{
		//echo "not ok";
		header("location:adminorders.php");
	}
}
?>