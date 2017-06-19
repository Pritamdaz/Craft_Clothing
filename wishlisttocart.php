<?php
include('session.php');
?>
<?php
$m="";
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
if(isset($user_check))
{
	$sql="select * from products where pid='".$_GET['id']."'";
	$mq=mysql_query($sql) or die("not working query");
	$sql1="select * from cart where pid='".$_GET['id']."' and email='$login_email'";
	$mq1=mysql_query($sql1) or die("not working query");
	while($row=mysql_fetch_array($mq))
	{
		$pid=$row['pid'];
		$subcat=$row['subcat'];
		$pname=$row['pname'];
		$pprice=$row['pprice'];
		$pcolour=$row['pcolour'];
		$pbrand=$row['pbrand'];
		$psize=$row['psize'];
		$pdescription=$row['pdescription'];
		$s=$row['image'];
		$pic='<img src="'.$s.'" style="max-height:900;max-width:900px">';
	}
	$nor=mysql_num_rows($mq1);
	if($nor==1)
	{
		header('location:wishlist.php?msg');
		//$m="<br><br><font color=white size=5>You Have Already Added This Product To The Cart!!!!</font>";
	}
	else
	{
		$query="insert into cart(email,subcat,pid,pname,pprice,pcolour,pbrand,psize,pdescription,image,qty) values('$login_email','$subcat','$pid','$pname','$pprice','$pcolour','$pbrand','$psize','$pdescription','$s','1')";
		$result=mysql_query($query);
		if($result)
		{
			header('location:wishlist.php?msg1');
			//$m="<br><br><font color=white size=5>Product Successfully Added To The Cart!!!!</font>";
		}
		else
			header('location:wishlist.php?msg2');
			//$m="<br><br><font color=white size=5>Something Went Wrong Of Adding Product To The Cart!!!!</font>";
	}
}
?>