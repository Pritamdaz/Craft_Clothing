<?php
include('session.php');
?>
<?php
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
?>
<html>
<head>
<title>Craft Clothing - Be Stylish | Add Details</title>
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
<img src="pics/craftlogo.png" width=100 height=100>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="pics/craft.png" width=400 height=80>
</div>
</div>
<ul>
	<li><a style="width:95px;text-align:center">HOME</a></li>
	<li class="dropdown"><a class="dropbtn" style="width:95px;text-align:center">MEN</a>
	<div class="dropdown-content">
      <a>Top Wear</a>
      <a>Bottom Wear</a>
      <a>Foot Wear</a>
      <a>Inner Wear</a>
      <a>Sports Wear</a>
    </div></li>
	<li class="dropdown"><a class="dropbtn" style="width:105px;text-align:center">WOMEN</a>
	<div class="dropdown-content">
      <a>Ethnic Wear</a>
      <a>Western Wear</a>
      <a>Foot Wear</a>
      <a>Inner Wear</a>
    </div></li>
	<li class="dropdown"><a class="dropbtn" style="width:95px;text-align:center">KIDS</a>
	<div class="dropdown-content">
      <a>Boys Clothing</a>
      <a>Girls Clothing</a>
      <a>Boys Foot Wear</a>
      <a>Girls Foot Wear</a>
    </div></li>
	<li><a style="width:165px;text-align:center"><b><u>GIFT ZONE</u></b></a></li>
	<li><a style="width:105px;text-align:center">CART</a></li>
	<li class="dropdown"><a class="dropbtn" style="width:125px;text-align:center">ACCOUNT</a>
	<div class="dropdown-content">
      <div style="min-width:220px;padding:15px;color:White">Hi &nbsp;<?php echo strtoupper($login_name); ?>!!!!</div>
      <a>Edit Profile</a>
      <a>Change Password</a>
      <a>My Wishlist</a>
      <a>My Orders</a>
      <a>Log out</a>
    </div></li>
    <li><a style="width:100%;text-align:left">CONTACT US</a></li>
	</ul>
<div style="background-color:#4d4d4d;border:#ffffff 2px solid;border-radius:10px;width:1228px"><br><br><br><br><br>
<center>
<font size=6 color=#1cc71c><b>Your Account Has Been Created!!!!</b><br><br><br></font>
<h1><font color=white><u>Please Enter Your Deatils To Proceed</u></font></h1><br><br><br>
<?php echo $msg; ?>
</center>
<div style="padding-left:370px">
<form name=f1 method="post" action="">
<font color=white size=4>Gender:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color=white size=4>Male</font> <input type=radio value=Male name=mf required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color=white size=4>Female</font> <input type=radio value=Female name=mf required><br><br><br><br>
<font color=white size=4>Address:</font><br><textarea placeholder="Address...." name=addr required></textarea><br><br><br><br>
<font color=white size=4>Phone Number:</font><br><input type=text placeholder="Phone No." name=phno required><br><br><br><br>
<font color=white size=4>Pincode:</font><br><input type=text placeholder="Pincode" name=pin required><br><br><br><br>
<font color=white size=4>City:</font><br><input type=text placeholder="City" name=ci required><br><br><br><br>
<font color=white size=4>State:</font><br><input type=text placeholder="State" name=st required><br><br><br><br></div>
<center><input class=button1 type=submit value="Add Details" name=sub></center>
</form>
<br><br><br><br><br><br><br><hr width=1000><br>
<div style="padding:20px 220px"><font color=white size=5><u>About Us</u> :</font></div><br>
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