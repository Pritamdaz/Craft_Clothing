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
		$un=$_POST['un'];
		$np=$_POST['np'];
		$cp=$_POST['cp'];
		$query1="select * from account where email='$un'";
		$result1=mysql_query($query1);
		$nor=mysql_num_rows($result1);
		if($nor==0)
		{
			$msg="<font size=6 color=#ff99cc><b>User Does Not Exist!!!!</b><br><br><br></font>";
		}
		elseif($np!=$cp)
		{
			$msg="<font size=6 color=#ff99cc><b>Confirm Password Not Matched!!!!</b><br><br><br></font>";
		}
		else
		{
			$query="update account set pw='$np' where email='$un'";
			$result=mysql_query($query);
			$msg="<font size=6 color=#1cc71c><b>Password Successfully Changed!!!!</b><br><br><br></font>";
		}
		//else echo "sry";
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
<div style="background-color:#4d4d4d;border:#ffffff 2px solid;border-radius:10px;width:1228px"><br><br><br><br><br>
<center>
<form name=f1 method="post" action="">
<?php echo $msg; ?>
<h1><font color=white><u>New Password</u></font></h1>
<input type=email placeholder="Enter You Email ID" name=un required><br><br><br>
<input type=password placeholder="Enter You New Password" name=np id=nwpw required><br><br><br>
<input type=password placeholder="Enter You Confirm Password" name=cp id=cfpw OnInput=pwcheck() required><br><br>
<span id=msg></span><br><br>
<input type=submit class=button1 value="Reset Password" name=sub>
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
function pwcheck()
{
	var np=document.getElementById("nwpw").value;
    var cp=document.getElementById("cfpw").value;
    if(np!=cp)
    {
        document.getElementById("msg").innerHTML = "<font size=4 color=#ff99cc><b>Confirm Password Not Matched!!!!</b></font>";
    }
    else
    {
        document.getElementById("msg").innerHTML = "<font size=4 color=#1cc71c><b>Confirm Password Matched!!!!</b></font>";
    }
}
</script>
</html>