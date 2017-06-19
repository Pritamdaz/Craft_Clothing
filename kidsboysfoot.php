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
<html>
<head>
<title>Craft Clothing - Be Stylish | Boys' Foot Wear</title>
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
	<li class="dropdown"><a class=active class="dropbtn" href="kids.php" style="width:95px;text-align:center">KIDS</a>
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
<!-- FOR ONE ROW: FROM HERE -->
<ul class="products" style="padding:20px 220px;padding-right:0px;width:880px;background-color:#4d4d4d">
    <!-- FOR ONE ROW: FROM HERE -->
    
    
    <?php
    $con=mysql_connect("localhost","root","");
    $sdb=mysql_select_db("craft",$con);
    $sql="select * from products";
    $mq=mysql_query($sql) or die("not working query");
    while($row=mysql_fetch_array($mq))
    {
    	$pid=$row['pid'];
    	$subcat=$row['subcat'];
    	$pname=$row['pname'];
    	$pprice=$row['pprice'];
    	$s=$row['image'];
    	$pic='<div style="height:300;width:300px"><img src="'.$s.'" style="max-height:300;max-width:300px"></div>';
    	if($subcat=="Boys Foot Wear")
    	{
    		echo '<li style="width:440px">
			<a href="productdetails.php?id='.$pid.'">'.$pic.'
			<h4 style="max-width:400px">'.$pname.'</h4>
			<p>Rs.'.$pprice.'/-</p>
			</a>
			</li>';
    	}
    }
    mysql_close($con);
    ?>
    
    
    
    
    
    <!-- <li style="width:440px">
        <a href="#">
            <img src="pics/tshirt.jpeg" style="max-height:300;max-width:300px">
            <h4 style="max-width:400px">Logo Shirt (Gray)</h4>
            <p>$20.00</p>
        </a>
    </li> -->
    <!-- TO HERE -->
    <!-- <li style="width:400px">
        <a href="#">
            <img src="pics/tshirt.jpeg" height=300>
            <h4 style="max-width:400px">Mike the Frog Shirt (Orange)</h4>
            <p>$25.00</p>
        </a>
    </li> --><!-- more list items -->
</ul>
<!-- TO HERE -->




<br><br>
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