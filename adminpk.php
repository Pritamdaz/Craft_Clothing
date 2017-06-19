<?php
include('adminsession.php');
?>
<?php
$msg="";
$link=mysql_connect("localhost","root","") or die("Not Connected");
mysql_select_db("craft",$link) or die("Database Not Connected");
if(isset($_POST['sub']))
{
	$cn=$_POST['cn'];
	$pak=$_POST['pak'];
	$query="insert into adminpk(company,passkey) values('$cn','$pak')";
	$query1="select * from adminpk where company='$cn'";
	$result1=mysql_query($query1);
	$nor1=mysql_num_rows($result1);
	$query2="select * from adminpk where passkey='$pak'";
	$result2=mysql_query($query2);
	$nor2=mysql_num_rows($result2);
	if($nor1!=0 || $nor2!=0)
		$msg="<font size=6 color=#ff99cc><b>Company Name Or Pass Key Already Exists!!!!</b><br><br><br></font>";
	else
	{
		$result=mysql_query($query);
		if($result)
		{
			$msg="<font size=6 color=#1cc71c><b>Pass Key Successfully Added!!!!</b><br><br><br></font>";
		}
		else
			$msg="<font size=6 color=#ff99cc><b>Something Went Wrong!!!!</b><br><br><br></font>";
	}
}
mysql_close($link);
?>
<html>
<head>
<title>Craft Clothing - Be Stylish | Add Company Pass Key</title>
<link rel=icon href="pics/titleicon.png">
<link rel=stylesheet type="text/css" href="home.css">
<style>
input[type=text]
	{
	width:340px;
    box-sizing:border-box;
    border:2px solid #ccc;
    border-radius:4px;
    font-size:15px;
    padding:5px 10px;
    }
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
	<li class="dropdown"><a class="dropbtn" style="width:125px;text-align:center">ACCOUNT</a>
	<div class="dropdown-content">
      <a href="adminpanel.php">Admin Panel</a>
      <a href="adminpk.php">Add Pass Key</a>
      <a href="adminorders.php">Maintain Orders</a>
      <a href="adminchangepassword.php">Change Password</a>
      <a href="logout.php">Log out</a>
    </div></li>
    <li><a href="contactus.php" style="width:100%;text-align:left">CONTACT US</a></li>
	</ul>
<div style="background-color:#4d4d4d;border:#ffffff 2px solid;border-radius:10px;width:1228px"><br><br><br><br><br>
<center>
<h1><font color=white><u>Add Pass Key</u></font></h1><br><br><br>
<form name=f1 method="post" action="">
<?php echo $msg; ?>
<div align=left style="padding-left:450px">
<font color=white size=4>Company Name:</font><br><input type=text placeholder="Enter Company Name" name=cn required><br><br><br><br>
<font color=white size=4>Pass Key:</font><br><input type=text placeholder="Enter Pass Key" name=pak required><br><br><br><br></div>
<input class=button1 type=submit value="Add Pass Key" name=sub>
</form>
</center>
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