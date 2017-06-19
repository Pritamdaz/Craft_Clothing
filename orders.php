<?php
include('session.php');
?>
<html>
<head>
<title>Craft Clothing - Be Stylish | Orders</title>
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
.button2 {
	padding:8px 4px;
	text-align:center;
	text-decoration:none;
	font-size:14px;
	color:white;
	background-color:#1a1a1a;
	white-space:pre-wrap;
	word-wrap:break-word;
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
<div style="background-color:#4d4d4d;border:#ffffff 2px solid;border-radius:10px;width:1228px"><br><br>
<center><input type=text name=search placeholder=Search....></center><br><br><br><br>
<h1 align=center style="color:white"><u>My Orders</u></h1>
<center>
<form method=post action="">

<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
$query="select * from orders where email='$login_email' order by bid desc";
$result=mysql_query($query);
$nor=mysql_num_rows($result);
if($nor==0)
{
	echo "<br><font color=white size=5>You Have No Orders!!!!</font>";
}
else
{
	echo '<ul style="width:1100px">
			<table border=5 width=1100 style="table-layout:fixed">
			<tr>
			<td style="padding:5px;"><font color=white size=5>Product Image</font></td>
			<td style="padding:5px;width:12%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Product Name</font></td>
			<td style="padding:5px;width:12%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Product Brand</font></td>
			<td style="padding:5px;width:9%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Product Colour</font></td>
    		<td style="padding:5px;width:9%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Product Size</font></td>
    		<td style="padding:5px;width:14%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Product Description</font></td>
    		<td style="padding:5px;width:5%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Qty</font></td>
			<td style="padding:5px;width:9%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Product Price</font></td>
    		<td style="padding:5px;width:10%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Options</font></td>
			</tr>
			</table>
			</ul>';
}
while($r=mysql_fetch_array($result))
{
	$status=$r['status'];
	$bid=$r['bid'];
	if($status=='Undelivered' || $status=='Packed' || $status=='Shipped')
	{
		$sta="<input type=button class=button2 value='CANCEL ORDER'>";
		$go="orderdelete.php?del=$bid";
	}
	elseif($status=='Delivered')
	{
		$sta="<input type=button class=button2 value='RETURN'>";
		$go="orderreturn.php?del=$bid";
	}
	elseif($status=='Requesting To Return')
	{
		$sta="<input type=button class=button2 value='RETURNED'>";
		$go="#";
	}
	
	
	
	
	$pid=$r['pid'];
	$subcat=$r['subcat'];
	$pname=$r['pname'];
	$pprice=$r['pprice'];
	$pcolour=$r['pcolour'];
	$pbrand=$r['pbrand'];
	$psize=$r['psize'];
	$qty=1;
	$bid=$r['bid'];
	$pdescription=$r['pdescription'];
	$s=$r['image'];
	$pic='<img src="'.$s.'" style="max-height:200;max-width:200px">';
	echo '<ul style="width:1100px">
			<table border=5 width=1100 style="table-layout:fixed">
			<tr>
			<td style="padding:5px;"><center><a href="productdetails.php?id='.$pid.'">'.$pic.'</a></center></td>
			<td style="padding:5px;width:12%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$pname.'</font></a></td>
			<td style="padding:5px;width:12%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$pbrand.'</font></a></td>
			<td style="padding:5px;width:9%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$pcolour.'</font></a></td>
			<td style="padding:5px;width:9%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$psize.'</font></a></td>
			<td style="padding:5px;width:14%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$pdescription.'</font></a></td>
			<td style="padding:5px;width:5%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$qty.'</font></a></td>
			<td style="padding:5px;width:9%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>Rs.'.$pprice.'/-</font></a></td>
			<td style="padding:5px;width:10%;white-space:pre-wrap;word-wrap:break-word"><center><a href='.$go.'>'.$sta.'</a><br><br><a href="trackorder.php?del='.$bid.'"><input type=button class=button2 value="TRACK ORDER"></a></center></td>
			</tr>
			</table>
			</ul>';
}



?>
<br><br>


</form>
</center>
<br><br><br><br><hr width=1000><br>
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