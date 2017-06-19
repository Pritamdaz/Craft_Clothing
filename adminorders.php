<?php
include('adminsession.php');
?>
<html>
<head>
<title>Craft Clothing - Be Stylish</title>
<link rel=icon href="pics/titleicon.png">
<link rel=stylesheet type="text/css" href="home.css">
<style>
input[type=password]
	{
	width:340px;
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


<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
$query="select * from orders order by bid desc";
$result=mysql_query($query);
$nor=mysql_num_rows($result);
if($nor==0)
{
	echo "<br><font color=white size=5>There Are No Orders At This Time!!!!</font>";
}
else
{
	echo '<ul style="width:1100px">
			<table border=5 width=1100 style="table-layout:fixed">
			<tr>
			<td style="padding:5px;width:9%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Booking ID</font></td>
			<td style="padding:5px;width:27%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Customer Details</font></td>
			<td style="padding:5px;"><font color=white size=5>Product Image</font></td>
    		<td style="padding:5px;width:9%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Product ID</font></td>
    		<td style="padding:5px;width:10%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Status</font></td>
    		<td style="padding:5px;width:15%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Options</font></td>
			</tr>
			</table>
			</ul>';
}
while($r=mysql_fetch_array($result))
{
	$pid=$r['pid'];
	$email=$r['email'];
	
	$query1="select * from account where email='$email'";
	$result1=mysql_query($query1);
	while($r1=mysql_fetch_array($result1))
	{
		$name=$r1['name'];
		$address=$r1['address'];
		$phone=$r1['phone'];
		$pincode=$r1['pincode'];
		$city=$r1['city'];
		$state=$r1['state'];
		$country=$r1['country'];
	}
	$subcat=$r['subcat'];
	$pname=$r['pname'];
	$pprice=$r['pprice'];
	$pcolour=$r['pcolour'];
	$pbrand=$r['pbrand'];
	$psize=$r['psize'];
	$qty=1;
	$status=$r['status'];
	$bid=$r['bid'];
	$pdescription=$r['pdescription'];
	$s=$r['image'];
	$pic='<img src="'.$s.'" style="max-height:300;max-width:300px">';
	echo '<ul style="width:1100px">
			<table border=5 width=1100 style="table-layout:fixed">
			<tr>
			<td style="padding:5px;width:9%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$bid.'</font></a></td>
			<td style="padding:5px;width:27%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>Name: '.$name.'<br>Email: '.$email.'<br>Address: '.$address.'<br>Phone: '.$phone.'<br>Pincode: '.$pincode.'<br>City: '.$city.'<br>State: '.$state.'<br>Country: '.$country.'</font></a></td>
			<td style="padding:5px;"><center><a href="productdetails.php?id='.$pid.'">'.$pic.'</a></center></td>
			<td style="padding:5px;width:9%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$pid.'</font></a></td>
      		<td style="padding:5px;width:10%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$status.'</font></a></td>
      		<td style="padding:5px;width:15%;white-space:pre-wrap;word-wrap:break-word"><center><a href="adminpack.php?del='.$bid.'"><input type=button class=button2 value="MARK THIS AS PACKED"></a>
			<a href="adminship.php?del='.$bid.'"><input type=button class=button2 value="MARK THIS AS SHIPPED"></a>
      		<a href="admindelivery.php?del='.$bid.'"><input type=button class=button2 value="MARK THIS AS DELIVERED"></a>
    		<a href="adminorderdelete.php?del='.$bid.'"><input type=button class=button2 value="REMOVE THIS FROM HISTORY"></a></center></td>
			</tr>
			</table>
			</ul>';
}



?>








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