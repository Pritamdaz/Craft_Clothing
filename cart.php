<?php
include('session.php');
?>


<html>
<head>
<title>Craft Clothing - Be Stylish | Cart</title>
<link rel=icon href="pics/titleicon.png">
<link rel=stylesheet type="text/css" href="home.css">
<style>
select
	{
	width:42px;
    box-sizing:border-box;
    border:2px solid #ccc;
    border-radius:4px;
    font-size:15px;
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
.button2 {
	padding:8px 4px;
	text-align:center;
	text-decoration:none;
	font-size:14px;
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
	<li><a class=active href="cart.php" style="width:105px;text-align:center">CART</a></li>
	<li class="dropdown"><a class="dropbtn" style="width:125px;text-align:center">ACCOUNT</a>
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
<h1 align=center style="color:white"><u>My Cart</u></h1>
<form method=post action="">
<center>


<?php
$total=0;
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
$query="select * from cart where email='$login_email' order by cid desc";
$result=mysql_query($query);
$nor=mysql_num_rows($result);
if($nor==0)
{
	echo "<br><font color=white size=5>Cart Is Empty!!!!</font>";
}
else
{
	echo '<ul style="width:1100px">
			<table border=5 width=1100 style="table-layout:fixed">
			<tr>
			<td style="padding:5px;"><font color=white size=5>Product Image</font></td>
			<td style="padding:5px;width:24%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Product Name</font></td>
			<td style="padding:5px;width:15%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Product Brand</font></td>
			<td style="padding:5px;width:18%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Product Colour</font></td>
			<td style="padding:5px;width:5%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Qty</font></td>
    		<td style="padding:5px;width:10%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Product Price</font></td>
			<td style="padding:5px;width:8%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5>Option</font></td>
			</tr>
			</table>
			</ul>';
}
while($r=mysql_fetch_array($result))
{
	$pid=$r['pid'];
	$subcat=$r['subcat'];
	$pname=$r['pname'];
	$pprice=$r['pprice'];
	$pcolour=$r['pcolour'];
	$pbrand=$r['pbrand'];
	$psize=$r['psize'];
	$qty=1;
	$qntty='<select id=it name=quan oninput=checksum()>
			<option value=1>1</option>
			<option value=2>2</option>
			<option value=3>3</option>
			<option value=4>4</option>
			<option value=5>5</option>
			<option value=6>6</option>
			<option value=7>7</option>
			<option value=8>8</option>
			<option value=9>9</option>
			<option value=10>10</option>
			</select>';
	$pdescription=$r['pdescription'];
	$s=$r['image'];
	$pic='<img src="'.$s.'" style="max-height:200;max-width:200px">';
	echo '<ul style="width:1100px">
			<table border=5 width=1100 style="table-layout:fixed">
			<tr>
			<td style="padding:5px"><center><a href="productdetails.php?id='.$pid.'">'.$pic.'</a></center></td>
			<td style="padding:5px;width:24%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$pname.'</font></a></td>
			<td style="padding:5px;width:15%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$pbrand.'</font></a></td>
			<td style="padding:5px;width:18%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$pcolour.'</font></a></td>
			<td style="padding:5px;width:5%;white-space:pre-wrap;word-wrap:break-word"><center><a href="productdetails.php?id='.$pid.'"><font color=white size=4>'.$qty.'</font></a><center></td>
			<td style="padding:5px;width:10%;white-space:pre-wrap;word-wrap:break-word"><a href="productdetails.php?id='.$pid.'"><font color=white size=4>Rs.'.$pprice.'/-</font></a></td>
			<td style="padding:5px;width:8%;white-space:pre-wrap;word-wrap:break-word"><center><a href="cartdelete.php?id='.$pid.'"><input type=button class=button2 value="REMOVE"></a></center></td>
			</tr>
			</table>
			</ul>';
	//$quan=$_POST['quan'];
	if(isset($_POST['sub']))
	{
		$link=mysql_connect("localhost","root","") or die("Not Connected");
		mysql_select_db("craft",$link) or die("Database Not Connected");
		$sql3="select * from account where email='$login_email'";
		$mq3=mysql_query($sql3);
		while($row2=mysql_fetch_array($mq3))
		{
			$gender=$row2['gender'];
			$address=$row2['address'];
			$phone=$row2['phone'];
			$pincode=$row2['pincode'];
			$city=$row2['city'];
			$state=$row2['state'];
			$country=$row2['country'];
		}
		if($gender=="" || $address=="" || $phone=="0" || $pincode=="0" || $city=="" || $state=="" || $country=="")
		{
			echo "<br><br><font size=6 color=#ff99cc><b>Fill Up Your Deatils First!!!!</b></font>";
		}
		else
		{
			//$quan=$_POST['quan'];
			$temp=0;
			$link=mysql_connect("localhost","root","");
			mysql_select_db("craft",$link);
			$query2="select qty from orders where email='$login_email'";
			$result2=mysql_query($query2);
			while($r2=mysql_fetch_array($result2))
			{
				$dbqty=$r2['qty'];
				$temp=$temp+$dbqty;
			}
			$query3="select * from account where email='$login_email'";
			$result3=mysql_query($query3);
			while($r3=mysql_fetch_array($result3))
			{
				$atype=$r3['atype'];
			}
			if($atype=="Consumer")
			{
				if($temp>=5)
				{
					echo "<br><br><font size=6 color=#ff99cc><b>You Can't Order More Than 5 Products At A Time If You Are A Consumer!!!!</b></font>";
				}
				else
				{
					$sql="insert into orders(email,subcat,pid,pname,pprice,pcolour,pbrand,psize,pdescription,image,qty,status) values('$login_email','$subcat','$pid','$pname','$pprice','$pcolour','$pbrand','$psize','$pdescription','$s',$qty,'Undelivered')";
					$mq=mysql_query($sql);
					if($mq)
					{
						header("location:payment.php?id=$pid");
						$sql1="delete from cart where email='$login_email'";
						$mq1=mysql_query($sql1);
					}
					else
					{
						echo "<font color=white size=5>Something Went Wrong!!!!</font>";
					}
				}
			}
			else
			{
				$sql="insert into orders(email,subcat,pid,pname,pprice,pcolour,pbrand,psize,pdescription,image,qty,status) values('$login_email','$subcat','$pid','$pname','$pprice','$pcolour','$pbrand','$psize','$pdescription','$s',$qty,'Undelivered')";
				$mq=mysql_query($sql);
				if($mq)
				{
					header("location:payment.php?id=$pid");
					$sql1="delete from cart where email='$login_email'";
					$mq1=mysql_query($sql1);
				}
				else
				{
					echo "<font color=white size=5>Something Went Wrong!!!!</font>";
				}
			}
		}
	}
	$total=$total+$pprice;
}
?>
<!-- <select id=it name=quan oninput=checksum()>
			<option value=1>1</option>
			<option value=2>2</option>
			<option value=3>3</option>
			<option value=4>4</option>
			<option value=5>5</option>
			<option value=6>6</option>
			<option value=7>7</option>
			<option value=8>8</option>
			<option value=9>9</option>
			<option value=10>10</option>
			</select>
 -->
<br><br><br><br>
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
/*if(isset($_POST['sub']))
{
	$sql="insert into booking(email,subcat,pid,pname,amount,pcolour,pbrand,psize,pdescription,image,qty) values('$login_email',[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12]) where email='$login_email'";
	$mq=mysql_query($query);
	if($result)
	{
		echo "ok";
	}
	else "not ok";
}*/
if($total>1000)
{
	echo '<ul style="width:1100px"><table border=5 width=1100 style="table-layout:fixed"><tr align=center><td style="padding:10px;width:25%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=5><b>Gifts You Are Getting With Your Purchased Orders</b></font></td></tr></table></ul>';
}
$sql2="select * from gifts";
$mq2=mysql_query($sql2);
while($r1=mysql_fetch_array($mq2))
{
	$gid=$r1['gid'];
	$gname=$r1['gname'];
	$gdetails=$r1['gdetails'];
	$gworth=$r1['gworth'];
	if($total>$gworth && $total<=$gworth)
		echo '<ul style="width:1100px">
			<table border=5 width=1100 style="table-layout:fixed">
			<tr>
			<td style="padding:20px;width:25%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=4>'.$gname.'</font></td>
			<td style="padding:20px;width:65%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=4>'.$gdetails.'</font></td>
			<td style="padding:20px;width:15%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=4>Rs.'.$gworth.'/-</font></td>
			</tr>
			</table>
			</ul>';
	elseif($total>$gworth)
		echo '<ul style="width:1100px">
			<table border=5 width=1100 style="table-layout:fixed">
			<tr>
			<td style="padding:20px;width:25%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=4>'.$gname.'</font></td>
			<td style="padding:20px;width:65%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=4>'.$gdetails.'</font></td>
			<td style="padding:20px;width:15%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=4>Rs.'.$gworth.'/-</font></td>
			</tr>
			</table>
			</ul>';
}

/*$gifts='<ul style="width:1100px">
			<table border=5 width=1100 style="table-layout:fixed">
			<tr>
			<td style="padding:20px;width:25%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=4>'.$gname.'</font></td>
			<td style="padding:20px;width:65%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=4>'.$gdetails.'</font></td>
			<td style="padding:20px;width:15%;white-space:pre-wrap;word-wrap:break-word"><font color=white size=4>Rs.'.$gworth.'/-</font></td>
			</tr>
			</table>
			</ul>';*/



echo "<br><br><br><br><font color=white size=5><b>Total Amount :</b> Rs.".$total."/-</font>";
?>
<span id=msg></span>




<br><br><br><br>
<input class=button1 type=submit value="Buy Now" name=sub>


<!-- 
<select>
<option value=1 <?php if($qty=="1") echo "selected"; ?>>1</option>
<option value=2 <?php if($qty=="2") echo "selected"; ?>>2</option>
<option value=3 <?php if($qty=="3") echo "selected"; ?>>3</option>
<option value=4 <?php if($qty=="4") echo "selected"; ?>>4</option>
<option value=5 <?php if($qty=="5") echo "selected"; ?>>5</option>
<option value=6 <?php if($qty=="6") echo "selected"; ?>>6</option>
<option value=7 <?php if($qty=="7") echo "selected"; ?>>7</option>
<option value=8 <?php if($qty=="8") echo "selected"; ?>>8</option>
<option value=9 <?php if($qty=="9") echo "selected"; ?>>9</option>
<option value=10 <?php if($qty=="10") echo "selected"; ?>>10</option>
</select>
 -->


</form>
</center>



<br><br><br><br><br><br><hr width=1000><br>
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
/*function checksum()
{
	var qty=document.getElementById("it").value;
    var tot="<?php //echo $total; ?>";
    var sum=qty*tot;
    if(qty>=1)
    {
        document.getElementById("msg").innerHTML = "<font color=white size=5><b>Total Amount :</b> Rs."+sum+"/-</font>";
    }
    else
    {
        document.getElementById("msg").innerHTML = "<font color=white size=5><b>Total Amount :</b>Quantity Can't Be Negative!!!!</font>";
    }
}*/
</script>
</html>