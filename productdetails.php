<?php
$msg="";
session_start();
if(isset($_SESSION['rcaccount'])==true)
{
	$link=mysql_connect("localhost","root","");
	mysql_select_db("craft",$link);
	$user_check=$_SESSION['rcaccount'];
	$ses_sql1=mysql_query("select * from account where email='$user_check'",$link);
	$row1=mysql_fetch_assoc($ses_sql1);
	$login_name=$row1['name'];
	$login_email=$row1['email'];
	$msg="<div style=min-width:220px;padding:15px;;color:White>Hi ".strtoupper($login_name)."!!!!</div>
			<a href=addoreditdetails.php>Your Details</a>
			<a href=changepassword.php>Change Password</a>
			<a href=wishlist.php>My Wishlist</a>
			<a href=orders.php>My Orders</a>
			<a href=logout.php>Log out</a>";
}
else
	$msg="<a href=signup.php>Sign Up</a>
			<a href=login.php>Log In</a>";
?>
<?php
$m1="";
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
if(isset($_POST['wlist']))
{
	$sql="select * from products where pid='".$_GET['id']."'";
	$mq=mysql_query($sql) or die("not working query");
	$sql2="select * from wishlist where pid='".$_GET['id']."' and email='$login_email'";
	$mq2=mysql_query($sql2) or die("not working query");
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
	$nor1=mysql_num_rows($mq2);
	if($nor1==1)
	{
		$m1="<br><br><font color=white size=5>You Have Already Added This Product To Your Wishlist!!!!</font>";
	}
	else
	{
		$query="insert into wishlist(email,subcat,pid,pname,pprice,pcolour,pbrand,psize,pdescription,image) values('$login_email','$subcat','$pid','$pname','$pprice','$pcolour','$pbrand','$psize','$pdescription','$s')";
		$result=mysql_query($query);
		if($result)
		{
			$m1="<br><br><font color=white size=5>Product Successfully Added To Wishlist!!!!</font>";
		}
		else
			$m1="<br><br><font color=white size=5>Something Went Wrong Of Adding Product To Your Wishlist!!!!</font>";
	}
}
?>

<?php
$m="";
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
if(isset($_POST['crt']))
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
		$m="<br><br><font color=white size=5>You Have Already Added This Product To The Cart!!!!</font>";
	}
	else
	{
		$query="insert into cart(email,subcat,pid,pname,pprice,pcolour,pbrand,psize,pdescription,image,qty) values('$login_email','$subcat','$pid','$pname','$pprice','$pcolour','$pbrand','$psize','$pdescription','$s','1')";
		$result=mysql_query($query);
		if($result)
		{
			$m="<br><br><font color=white size=5>Product Successfully Added To The Cart!!!!</font>";
		}
		else
			$m="<br><br><font color=white size=5>Something Went Wrong Of Adding Product To The Cart!!!!</font>";
	}
}
?>
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
if(isset($_POST['plzlogin']))
{
	header('location:session.php');
}


?>




<html>
<head>
<title>Craft Clothing - Be Stylish | <?php $sql="select * from products where pid='".$_GET['id']."'";$mq=mysql_query($sql) or die("not working query");while($row=mysql_fetch_array($mq)){$pname=$row['pname'];}echo $pname;?></title>
<link rel=icon href="pics/titleicon.png">
<link rel=stylesheet type="text/css" href="home.css" href="products.css">
<style>
input[name=search]
	{
	width:300px;
    box-sizing:border-box;
    border:2px solid #ccc;
    border-radius:4px;
    font-size: 16px;
    background-color:white;
    background-image:url("pics/searchicon.png");
	background-repeat:no-repeat;
	background-position:4px 4px;
	background-size:40px 40px;
    padding:15px 20px 15px 70px;
    -webkit-transition:width 0.4s ease-in-out;
    transition:width 0.4s ease-in-out;
    }
input[name=search]:focus
	{
	width:80%;
	}
textarea
	{
	width:500px;
    height:100px;
    box-sizing:border-box;
    border:2px solid #ccc;
    border-radius:4px;
    font-size:15px;
    padding:5px 10px;
    }
.button1 {
	padding:15px 25px;
	text-align:center;
	text-decoration:none;
	border-radius:10px;
	font-size:15px;
	color:white;
	background-color:#1a1a1a;
	}
a:link {
	color:white;
	}
a:visited {
	color:white;
	}	
</style>
</head>
<body>
<div style="float:top;background-color:#333333;border:#ffffff 2px solid;border-radius:10px;height:280px;width:1228px">
<div align=right>
<a href="https://github.com/Pritamdaz" target=_new><img src="pics/githubpage.png" height=40 width=40></a>
<a href="https://www.facebook.com/pddroxtar" target=_new><img src="pics/fbpage.png" height=40 width=40></a>
<a href="https://twitter.com/Pritam_Daz" target=_new><img src="pics/twitterpage.png" height=40 width=40></a>
<a href="https://www.instagram.com/pritamdaz/" target=_new><img src="pics/instagrampage.png" height=40 width=40></a>
<a href="https://www.linkedin.com/in/pritamdass/" target=_new><img src="pics/linkedinpage.png" height=40 width=40></a>
</div>
<div style="padding:45px 180px">
<a href="index.php">
<img src="pics/craftlogo.png" width=100 height=100></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.php">
<img src="pics/craft.png" width=400 height=80></a>
</div>
</div>
<ul>
	<li><a href="index.php" style="width:95px;text-align:center">HOME</a></li>
	<li class="dropdown"><a class=active class="dropbtn" href="men.php" style="width:95px;text-align:center">MEN</a>
	<div class="dropdown-content">
      <a href="mentop.php">Top Wear</a>
      <a href="menbottom.php">Bottom Wear</a>
      <a href="menfoot.php">Foot Wear</a>
      <a href="meninner.php">Inner Wear</a>
      <a href="mensports.php">Sports Wear</a>
    </div></li>
	<li class="dropdown"><a class="dropbtn" href="women.php" style="width:105px;text-align:center">WOMEN</a>
	<div class="dropdown-content">
      <a href="womenethnic.php">Ethnic Wear</a>
      <a href="womenwestern.php">Western Wear</a>
      <a href="womenfoot.php">Foot Wear</a>
      <a href="womeninner.php">Inner Wear</a>
    </div></li>
	<li class="dropdown"><a class="dropbtn" href="kids.php" style="width:95px;text-align:center">KIDS</a>
	<div class="dropdown-content">
      <a href="kidsboyscloth.php">Boys Clothing</a>
      <a href="kidsgirlscloth.php">Girls Clothing</a>
      <a href="kidsboysfoot.php">Boys Foot Wear</a>
      <a href="kidsgirlsfoot.php">Girls Foot Wear</a>
    </div></li>
	<li><a href="giftzone.php" style="width:165px;text-align:center"><b><u>GIFT ZONE</u></b></a></li>
	<li><a href="cart.php" style="width:105px;text-align:center">CART</a></li>
	<li class="dropdown"><a class="dropbtn" style="width:125px;text-align:center">ACCOUNT</a>
	<div class="dropdown-content">
      <?php echo $msg; ?>
    </div></li>
    <li><a href="contactus.php" style="width:100%;text-align:left">CONTACT US</a></li>
	</ul>
<div style="background-color:#4d4d4d;border:#ffffff 2px solid;border-radius:10px;width:1228px"><br><br>
<center><input type=text name=search placeholder=Search....></center><br><br>
<center><?php echo $m."<br>".$m1; ?></center>

    
    
<div style="padding:100px 180px">
<?php
    $con=mysql_connect("localhost","root","");
    $sdb=mysql_select_db("craft",$con);
    $sql="select * from products where pid='".$_GET['id']."'";
    $mq=mysql_query($sql) or die("not working query");
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
    	$pic='<a href="'.$s.'" download>
				<img src="'.$s.'" style="max-height:900;max-width:900px">
			</a>';
    	echo '<div align=center>'.$pic.'<br><br><br><br>
					<h1 style="color:white">'.$pname.'</h1><br><br>
					</div>
					<div align=left style="padding-left:50;padding-right:50">
					<h2 style="color:white"><u>CATEGORY</u> : '.strtoupper($subcat).'</h2>
					<h2 style="color:white"><u>PRICE</u> : Rs.'.$pprice.'/-</h2>
					<h2 style="color:white"><u>COLOUR</u> : '.$pcolour.'</h2>
					<h2 style="color:white"><u>BRAND</u> : '.$pbrand.'</h2>
					<h2 style="color:white"><u>SIZE</u> : '.$psize.'</h2>
					<h2 style="color:white"><u>DESCRIPTION</u> : '.$pdescription.'</h2></div>
    				<div align=center>
			</div>';
    }
    mysql_close($con);
    ?>
</div>
<center>
<form method=post action="">
<?php
if(isset($_SESSION['rcaccount'])==true)
{
	echo '<input class=button1 type=submit value="Add To Wishlist" name=wlist>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input class=button1 type=submit value="Add To Cart" name=crt>';
}
else
{
	echo '<input class=button1 type=submit value="Add To Wishlist" name=plzlogin>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input class=button1 type=submit value="Add To Cart" name=plzlogin>';
}
?>
</form>
</center><br><br><br><br>
<?php
$msg1="";
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
if(isset($_POST['sub']))
{
	$rev=$_POST['rev'];
	$rate=$_POST['rate'];
	$query1="select * from reviews where email='$login_email' and pid='".$_GET['id']."'";
	$result1=mysql_query($query1);
	$n1=mysql_num_rows($result1);
	if($n1!=0)
	{
		$msg1="<font size=5 color=#ff99cc><b>You Have Already Given Your Review For This Product!!!!</b><br><br><br></font>";
	}
	else
	{
		$query1="insert into reviews(pid,email,name,rating,review) values('".$_GET['id']."','$login_email','$login_name','$rate','$rev')";
		$result1=mysql_query($query1);
		if($result1)
		{
			$msg1="<font size=5 color=#1cc71c><b>Thanks For Your Review!!!!</b><br><br><br></font>";
		}
		else
		{
			$msg1="<font size=5 color=#ff99cc><b>Something Went Wrong!!!!</b><br><br><br></font>";
		}
	}
}

mysql_close($link);
?>




<hr width=800 id=rr><br><br><br><br>
<div align=left style="padding-left:350px;padding-right:320px;white-space:pre-wrap;word-wrap:break-word">
<?php echo $msg1; ?>
<h2><font color=white><u>Ratings And Reviews</u> :</font></h2><br>
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
$query2="select * from reviews where pid='".$_GET['id']."'";
$result2=mysql_query($query2);
while($r=mysql_fetch_array($result2))
{
	$name=$r['name'];
	$review=$r['review'];
	$rating=$r['rating'];
	echo "<font color=white size=5>".$name." (".$rating." Stars)"."</font><br>";
	echo "<font color=white size=4>".$review."</font><br><br><br>";
}



?><br>
<form method="post" action="#rr">
<?php
if(isset($_SESSION['rcaccount'])==true)
{
	echo '<font color=white size=5>Rate This Product:</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio value=1 name=rate required><font color=white size=4>1</font>&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio value=2 name=rate required><font color=white size=4>2</font>&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio value=3 name=rate required><font color=white size=4>3</font>&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio value=4 name=rate required><font color=white size=4>4</font>&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio value=5 name=rate required><font color=white size=4>5</font><br>
<textarea placeholder="Give Your Review About This Product" name=rev required></textarea><br><br>
<input type=submit class=button1 name=sub><br><br><br><br><br><br>';
}
?>


</form>

</div>
<hr width=1000><br>
<div style="padding:20px 220px"><font color=white size=5><a href="aboutus.php">About Us</a> :</font></div><br>
<div style="padding:20px 230px">
<img src="pics/original.png" height=100 width=150>
<img src="pics/30days.png" height=100 width=150>
<img src="pics/satisfaction.png" height=100 width=150>
<img src="pics/safe.png" height=100 width=150>
<img src="pics/premium.png" height=100 width=150><br><br><br><br>
<center><font color=white size=4>&copy; 2017 www.CraftClothing.com. All rights reserved.</font></center>
</div>
<br><br><br><br></div>
</body>
</html>