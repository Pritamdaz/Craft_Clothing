<?php
include('session.php');
?>
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("craft",$link);
if(isset($_POST['sub']))
{
	header("location:paymenttocheckout.php");
}
?>
<html>
<head>
<title>Craft Clothing - Be Stylish | Payment</title>
<link rel=icon href="pics/titleicon.png">
<link rel=stylesheet type="text/css" href="home.css">
<style>
select
	{
	width:70px;
    box-sizing:border-box;
    border:2px solid #ccc;
    border-radius:4px;
    font-size:15px;
    }
input[type=text]
	{
    box-sizing:border-box;
    border:2px solid #ccc;
    border-radius:4px;
    font-size:15px;
    padding:4px 6px;
    }
input[type=password]
	{
	width:60px;
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
.button2 {
	padding:10px 6px;
	text-align:center;
	text-decoration:none;
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
.row {
	display:table;
	}
.column {
	display:table-cell;
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
      <div style="min-width:220px;padding:15px;color:White">Hi &nbsp;<?php echo strtoupper($login_name); ?>!!!!</div>
      <a href="addoreditdetails.php">Your Details</a>
      <a href="changepassword.php">Change Password</a>
      <a href="wishlist.php">My Wishlist</a>
      <a href="orders.php">My Orders</a>
      <a href="logout.php">Log out</a>
    </div></li>
    <li><a href="contactus.php" style="width:100%;text-align:left">CONTACT US</a></li>
	</ul>
<div style="background-color:#4d4d4d;border:#ffffff 2px solid;border-radius:10px;width:1228px"><br><br><br><br><br><br>
<form name=f1 method=post action="">
<center><h1><font color=white><u>Make Payment</u></font></h1></center><br><br>
<div align=left style="padding-left:400px">
<h2><font color=white>Choose A Payment Method</font></h2><br>
<input type=radio name=pay id=cc onclick=payment()><font color=white>Credit Card</font><br><br>
<input type=radio name=pay id=dc onclick=payment()><font color=white>Debit Card</font><br><br>
<input type=radio name=pay id=nb onclick=payment()><font color=white>Net Banking</font><br><br>
<input type=radio name=pay id=cod onclick="window.location='codcheckout.php';"><font color=white>Cash On Delivery</font><br><br>
</form>
</div>
<script type="text/javascript">
function payment()
{
	var cc=document.getElementById("cc").checked;
	var dc=document.getElementById("dc").checked;
	var nb=document.getElementById("nb").checked;
	var cod=document.getElementById("cod").checked;
	if(cc==true)
	{
		document.getElementById("paycc").style.visibility="visible";
		document.getElementById("paydc").style.visibility="hidden";
		document.getElementById("paynb").style.visibility="hidden";
		document.getElementById("paycod").style.visibility="hidden";
	}
	else
		if(dc==true)
		{
			document.getElementById("paydc").style.visibility="visible";
			document.getElementById("paycc").style.visibility="hidden";
			document.getElementById("paynb").style.visibility="hidden";
			document.getElementById("paycod").style.visibility="hidden";
		}
		else
			if(nb==true)
			{
				document.getElementById("paynb").style.visibility="visible";
				document.getElementById("paycc").style.visibility="hidden";
				document.getElementById("paydc").style.visibility="hidden";
				document.getElementById("paycod").style.visibility="hidden";
			}/*
			else
				if(cod==true)
				{
					document.getElementById("paycod").style.visibility="visible";
					document.getElementById("paycc").style.visibility="hidden";
					document.getElementById("paydc").style.visibility="hidden";
					document.getElementById("paynb").style.visibility="hidden";
				}*/
}



</script>







<div align=left style="padding-left:320px">

<div class="row">
<div class="column">


<div style="visibility:hidden" id=paycc>
<form name=f2 method=post action="">
<h2><font color=white><u>Credit Card Info</u></font></h2>
<font size=4 color=white>Name On Card:</font><br><input type=text placeholder="Enter Name"><br><br>
<font size=4 color=white>Card Number:</font><br><input type=text placeholder="0000-0000-0000-0000"><br><br>
<font size=4 color=white>Expiry Date:</font><br>
<select>
<option selected disabled>Month</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
<select>
<option selected disabled>Year</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
<option>2021</option>
<option>2022</option>
<option>2023</option>
<option>2024</option>
<option>2025</option>
</select><br><br>
<font size=4 color=white>CVV Number:</font><br><input type=password placeholder="CVV"><br><br>
<input type=submit class=button1 value=Proceed name=sub>
</form>
</div>

</div>


<div class="column">

<div style="visibility:hidden" id=paydc>
<form name=f3 method=post action="">
<h2><font color=white><u>Debit Card Info</u></font></h2>
<font size=4 color=white>Name On Card:</font><br><input type=text placeholder="Enter Name"><br><br>
<font size=4 color=white>Card Number:</font><br><input type=text placeholder="0000-0000-0000-0000"><br><br>
<font size=4 color=white>Expiry Date:</font><br>
<select>
<option selected disabled>Month</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
<select>
<option selected disabled>Year</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
<option>2021</option>
<option>2022</option>
<option>2023</option>
<option>2024</option>
<option>2025</option>
</select><br><br>
<font size=4 color=white>CVV Number:</font><br><input type=password placeholder="CVV"><br><br>
<input type=submit class=button1 value=Proceed name=sub>
</form>
</div>

</div>


<div class="column">

<div style="visibility:hidden" id=paynb>
<form name=f4 method=post action="">
<h2><font color=white><u>Net Banking Info</u></h2>
<input type=radio name=bank> <font size=4 color=white>Andhra Bank</font><br><br>
<input type=radio name=bank> <font size=4 color=white>Allahabad Bank</font><br><br>
<input type=radio name=bank> <font size=4 color=white>Bank Of Baroda</font><br><br>
<input type=radio name=bank> <font size=4 color=white>Canara Bank</font><br><br>
<input type=radio name=bank> <font size=4 color=white>IDBI Bank</font><br><br>
<input type=radio name=bank> <font size=4 color=white>ICICI Bank</font><br><br>
<input type=radio name=bank> <font size=4 color=white>Punjab National Bank</font><br><br>
<input type=radio name=bank> <font size=4 color=white>State Bank Of India</font><br><br>
<input type=radio name=bank> <font size=4 color=white>HDFC Bank</font><br><br>
<input type=radio name=bank> <font size=4 color=white>UCO Bank</font><br><br>
<input type=radio name=bank> <font size=4 color=white>UBI Bank</font><br><br>
<input type=submit class=button1 value=Proceed name=sub>
</form>
</div>

</div>

</div>

</div>
<hr width=1000><br>
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