<?php
session_start();
if(isset($_SESSION['rcaccount'])==true)
{
	header("location:index.php");
}
else
{
	$msg="";
	$link=mysql_connect("localhost","root","") or die("Not Connected");
	mysql_select_db("craft",$link) or die("Database Not Connected");
	if(isset($_POST['sub']))
	{
		$rc=$_POST['rc'];
		$un=$_POST['un'];
		$pwd=$_POST['pwd'];
		$pak=$_POST['pak'];
		$query="select * from account where email='$un'";
		$result=mysql_query($query);
		$nor=mysql_num_rows($result);
		if($nor==0)
	 	$msg="<font size=6 color=#ff99cc><b>User Does Not Exist!!!!</b><br><br><br></font>";
	 	else
 		{
 			while($row=mysql_fetch_array($result))
 			{
 				$atype=$row['atype'];
				$email=$row['email'];
				$pw=$row['pw'];
				$pk=$row['pk'];
			}
			if($rc=="Consumer")
			{
				$pak="";
			}
			if($rc==$atype && $pwd==$pw && $pak==$pk)
			{
				$_SESSION['rcaccount']=$un;
				header("location:index.php");
			}
			else
			{
				$msg="<font size=6 color=#ff99cc><b>Input Not Matched!!!!</b><br><br><br></font>";
			}
 		}
	}
	mysql_close($link);
}
?>
<html>
<head>
<title>Craft Clothing - Be Stylish | Log In</title>
<link rel=icon href="pics/titleicon.png">
<link rel=stylesheet type="text/css" href="home.css">
<style>
input[type=text]
	{
	width:350px;
    box-sizing:border-box;
    border:2px solid #ccc;
    border-radius:4px;
    font-size:15px;
    padding:5px 10px;
    }
input[type=email]
	{
	width:350px;
    box-sizing:border-box;
    border:2px solid #ccc;
    border-radius:4px;
    font-size:15px;
    padding:5px 10px;
    }
input[type=password]
	{
	width:350px;
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
	<li class="dropdown"><a class="dropbtn" style="width:125px;text-align:center">ACCOUNT</a>
	<div class="dropdown-content">
      <a href="signup.php">Sign Up</a>
      <a href="login.php">Log In</a>
    </div></li>
    <li><a href="contactus.php" style="width:100%;text-align:left">CONTACT US</a></li>
	</ul>
<div style="background-color:#4d4d4d;border:#ffffff 2px solid;border-radius:10px;width:1228px"><br><br><br><br><br><br><br>
<center>
<form name=f1 method="post" action="">
<?php
if(isset($_GET['msg']))
{
	$message="<font size=6 color=#ff99cc><b>You Must Login First!!!!</b><br><br><br></font>";
	echo $message;
}
?>
<?php echo $msg; ?>
<font color=white size=4>You want to log in as a ,</font><br><br>
<table border=5 cellpadding=20>
<tr>
<td><font color=white size=4>Retailer :</font> <input type=radio value="Retailer" name=rc id=ret OnClick=passkey() required></td>
<td><font color=white size=4>Consumer :</font> <input type=radio value="Consumer" name=rc id=con OnClick=passkey() required></td>
</table><br><br>
<div align=left style="padding-left:440px">
<font color=white size=4>Email ID :</font><br><input type=email placeholder="Enter Your Email ID" name=un required><br><br><br><br>
<font color=white size=4>Password :</font><br><input type=Password placeholder="Enter Your Password" name=pwd required><br><br><br><br>
<div id=sh><font color=white size=4>Pass Key :</font><br><input type=text placeholder="Enter Your Pass Key" name=pak id=psk>&nbsp;&nbsp;<font color=white size=4> (If you are a reatiler)</font><br><br>
<div style="padding-left:110"><a href="forgotpasskey.php"><font size=4>Forgot Pass Key?</font></a></div></div><br><br>
</div>
<input class=button1 type=submit value="Log In" name=sub><br><br><br><br>
<a href="forgotpassword.php"><font size=4>Forgot Password?</font></a><br><br><br><br>
<a href="signup.php"><font size=5>New On Craft? Register Now!</font></a>
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
<script type="text/javascript">
function passkey()
{
	var c=document.getElementById("con").checked;
	var r=document.getElementById("ret").checked;
	if(c==true)
		document.getElementById("sh").style.visibility="hidden";
	if(r==true)
		document.getElementById("sh").style.visibility="visible";
}
</script>
</html>