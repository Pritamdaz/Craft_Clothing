<?php
include('session.php');
?>

<?php
/*$sql="select * from details where email='$login_email'";
$mq=mysql_query($sql);
$nor=mysql_num_rows($mq);
if($nor==0)
{
	$msg="";
	$link=mysql_connect("localhost","root","") or die("Not Connected");
	mysql_select_db("craft",$link) or die("Database Not Connected");
	if(isset($_POST['sub']))
	{
		$mf=$_POST['mf'];
		$addr=$_POST['addr'];
		$phno=$_POST['phno'];
		$pin=$_POST['pin'];
		$ci=$_POST['ci'];
		$st=$_POST['st'];
		$query="insert into details(name,email,gender,address,phone,pincode,city,state) values('$login_name','$login_email','$mf','$addr','$phno','$pin','$ci','$st')";
		$result=mysql_query($query);
		if($result)
		{
			header("location:index.php");
		}
		else
			$msg="<font size=6 color=#ff99cc><b>Something Went Wrong!!!!</b><br><br><br></font>";
	}
	mysql_close($link);
}
elseif($nor==1)
{
	echo "edit";
}*/

?>


<?php
$msg="";
$link=mysql_connect("localhost","root","") or die("Not Connected");
mysql_select_db("craft",$link) or die("Database Not Connected");
$query="select * from account where email='$login_email'";
$result=mysql_query($query);
while($r=mysql_fetch_array($result))
{
	$gender=$r['gender'];
	$address=$r['address'];
	$phone=$r['phone'];
	$pincode=$r['pincode'];
	$city=$r['city'];
	$state=$r['state'];
	$country=$r['country'];
}
if(isset($_POST['sub']))
{
	$gender=$_POST['mf'];
	$address=$_POST['addr'];
	$phone=$_POST['phno'];
	$pincode=$_POST['pin'];
	$city=$_POST['ci'];
	$state=$_POST['st'];
	$country=$_POST['cntry'];
	$query1="update account set gender='$gender',address='$address',phone='$phone',pincode='$pincode',city='$city',state='$state',country='$country' where email='$login_email'";
	$result1=mysql_query($query1);
	if($result1)
	{
		$msg="<font size=6 color=#1cc71c><b>Your Details Updated Successfully!!!!</b><br><br><br></font>";
	}
	else
		$msg="<font size=6 color=#ff99cc><b>Something Went Wrong!!!!</b><br><br><br></font>";
}
mysql_close($link);
?>
<html>
<head>
<title>Craft Clothing - Be Stylish | Edit Details</title>
<link rel=icon href="pics/titleicon.png">
<link rel=stylesheet type="text/css" href="home.css">
<style>
input[type=text]
	{
	width:500px;
    box-sizing:border-box;
    border:2px solid #ccc;
    border-radius:4px;
    font-size:15px;
    padding:5px 10px;
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
	<li class="dropdown"><a class="dropbtn" href="men.php" style="width:95px;text-align:center">MEN</a>
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
	<li class="dropdown"><a class=active class="dropbtn" style="width:125px;text-align:center">ACCOUNT</a>
	<div class="dropdown-content">
      <div style="min-width:220px;padding:15px;color:White">Hi &nbsp;<?php echo strtoupper($login_name); ?>!!!!</div>
      <a href="addoreditdetails.php">Your Details</a>
      <a href="changepassword.php">Change Password</a>
      <a href="wishlist.php">My Wishlist</a>
      <a href="orders.php">My Orders</a>
      <a href="logout.php">Log out</a>
    </div></li>
    <li><a href="contactus.php" style="width:100%;text-align:left">CONTACT US</a></li>
	</ul>
<div style="background-color:#4d4d4d;border:#ffffff 2px solid;border-radius:10px;width:1228px"><br><br><br><br><br>
<center>
<h1><font color=white><u>Enter Your Deatils</u></font></h1><br><br><br>
<?php echo $msg; ?>
</center>
<div style="padding-left:370px">
<form name=f1 method="post" action="">
<font color=white size=4>Gender:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color=white size=4>Male</font> <input type=radio value=Male <?php if($gender=="Male") echo "checked"; ?> name=mf required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color=white size=4>Female</font> <input type=radio value=Female <?php if($gender=="Female") echo "checked"; ?> name=mf required><br><br><br><br>


<font color=white size=4>Address:</font><br><textarea placeholder="Address...." name=addr required><?php echo $address; ?></textarea><br><br><br><br>
<font color=white size=4>Phone Number:</font><br><input type=text placeholder="Phone No." name=phno value="<?php if($phone=="0"){echo "";} else echo $phone; ?>" required><br><br><br><br>
<font color=white size=4>Pincode:</font><br><input type=text placeholder="Pincode" name=pin value="<?php if($pincode=="0"){echo "";} else echo $pincode; ?>" required><br><br><br><br>
<font color=white size=4>City:</font><br><input type=text placeholder="City" name=ci value="<?php echo $city; ?>" required><br><br><br><br>
<font color=white size=4>State:</font><br><input type=text placeholder="State" name=st value="<?php echo $state; ?>" required><br><br><br><br>
<font color=white size=4>Country:</font><br><input type=text placeholder="Country" name=cntry value="<?php echo $country; ?>" required><br><br><br><br></div>
<center><input class=button1 type=submit value="Save Details" name=sub></center>
</form>
<br><br><br><br><br><br><br><hr width=1000><br>
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