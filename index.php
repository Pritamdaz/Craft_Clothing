<?php
$msg="";
session_start();
if(isset($_SESSION['rcaccount'])==true)
{
	$link=mysql_connect("localhost","root","");
	mysql_select_db("craft",$link);
	$user_check=$_SESSION['rcaccount'];
	$ses_sql1=mysql_query("select name from account where email='$user_check'",$link);
	$row1=mysql_fetch_assoc($ses_sql1);
	$login_name=$row1['name'];
	$msg="<div style=min-width:220px;padding:15px;color:White>Hi ".strtoupper($login_name)."!</div>
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
<html>
<head>
<title>Craft Clothing - Be Stylish</title>
<link rel=icon href="pics/titleicon.png">
<link rel=stylesheet type="text/css" href="home.css">
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
	<li><a class=active href="index.php" style="width:95px;text-align:center">HOME</a></li>
	<li class="dropdown"><a class="dropbtn" href="#mencc" style="width:95px;text-align:center">MEN</a>
	<div class="dropdown-content">
      <a href="mentop.php">Top Wear</a>
      <a href="menbottom.php">Bottom Wear</a>
      <a href="menfoot.php">Foot Wear</a>
      <a href="meninner.php">Inner Wear</a>
      <a href="mensports.php">Sports Wear</a>
    </div></li>
	<li class="dropdown"><a class="dropbtn" href="#womencc" style="width:105px;text-align:center">WOMEN</a>
	<div class="dropdown-content">
      <a href="womenethnic.php">Ethnic Wear</a>
      <a href="womenwestern.php">Western Wear</a>
      <a href="womenfoot.php">Foot Wear</a>
      <a href="womeninner.php">Inner Wear</a>
    </div></li>
	<li class="dropdown"><a class="dropbtn" href="#kidscc" style="width:95px;text-align:center">KIDS</a>
	<div class="dropdown-content">
      <a href="kidsboyscloth.php">Boys Clothing</a>
      <a href="kidsgirlscloth.php">Girls Clothing</a>
      <a href="kidsboysfoot.php">Boys Foot Wear</a>
      <a href="kidsgirlsfoot.php">Girls Foot Wear</a>
    </div></li>
	<li><a href="#giftzonecc" style="width:165px;text-align:center"><b><u>GIFT ZONE</u></b></a></li>
	<li><a href="cart.php" style="width:105px;text-align:center">CART</a></li>
	<li class="dropdown"><a class="dropbtn" style="width:125px;text-align:center">ACCOUNT</a>
	<div class="dropdown-content">
	<?php echo $msg; ?>
    </div></li>
    <li><a href="contactus.php" style="width:100%;text-align:left">CONTACT US</a></li>
	</ul>
<div style="background-color:#4d4d4d;border:#ffffff 2px solid;border-radius:10px;width:1228px"><br><br>
<center><input type=text name=search placeholder=Search....></center><br>
<div>
  <img class="mySlides" src="pics/homecover.jpg" width=1108 height=595 style="padding:20px 60px">
  <img class="mySlides" src="pics/homecover1.jpg" width=1108 height=595 style="padding:20px 60px">
  <img class="mySlides" src="pics/homecover2.png" width=1108 height=595 style="padding:20px 60px">
  <img class="mySlides" src="pics/homecover3.jpg" width=1108 height=595 style="padding:20px 60px">
  <img class="mySlides" src="pics/homecover4.jpg" width=1108 height=595 style="padding:20px 60px">
  <img class="mySlides" src="pics/homecover5.jpg" width=1108 height=595 style="padding:20px 60px">
</div>
<script>
var myIndex=0;
carousel();
function carousel()
{
    var i;
    var x=document.getElementsByClassName("mySlides");
    for(i=0;i<x.length;i++)
        {
        x[i].style.display = "none";
        }
    myIndex++;
    if(myIndex>x.length)
        {
        myIndex=1;
        }
    x[myIndex-1].style.display="block";
    setTimeout(carousel,2000);
}
</script><br>
<div style="padding:20px 40px"> 
<pre id=mencc><font size=6 color=white>  Men's Clothing:</font></pre><div style="padding-left:50px">
<a href="men.php"><img src="pics/men.jpg" width=1040 height=694></a></div><br><br>
<pre id=womencc><font size=6 color=white>  Women's Clothing:</font></pre><div style="padding-left:50px">
<a href="women.php"><img src="pics/women.jpg" width=1040 height=643></a></div><br><br>
<pre id=kidscc><font size=6 color=white>  Kids' Clothing:</font></pre><div style="padding-left:50px">
<a href="kids.php"><img src="pics/kids.png" width=1040 height=916></a></div><br><br>
<pre id=giftzonecc><font size=6 color=white>  Gift Zone:</font></pre><div style="padding-left:50px">
<a href="giftzone.php"><img src="pics/gifts.jpg" width=1040 height=916></a></div><br><br><br><br>
<div style="padding-left:50px">
<img src="pics/brands1.jpg" width=1040 height=677><img src="pics/brands2.png" width=1040 height=544>
</div>
</div><br><br>
<div align=right><a href="#top"><img src="pics/topicon.png" height=80 width=80></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
<br><hr width=1000><br>
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