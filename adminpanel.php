<?php
include('adminsession.php');
?>
<html>
<head>
<title>Craft Clothing - Be Stylish | Admin Panel</title>
<link rel=icon href="pics/titleicon.png">
<link rel=stylesheet type="text/css" href="home.css">
<style>
select
	{
	width:450px;
    box-sizing:border-box;
    border:2px solid #ccc;
    border-radius:4px;
    font-size:15px;
    padding:5px 10px;
    }
input[type=file]
	{
	width:650px;
    box-sizing:border-box;
    border:2px solid #ccc;
    border-radius:4px;
    font-size:15px;
    }
input[type=text]
	{
	width:650px;
    box-sizing:border-box;
    border:2px solid #ccc;
    border-radius:4px;
    font-size:15px;
    padding:5px 10px;
    }
textarea
	{
	width:650px;
    height:200px;
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
	padding:6px 12px;
	text-align:center;
	text-decoration:none;
	border-radius:4px;
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
<div style="background-color:#4d4d4d;border:#ffffff 2px solid;border-radius:10px;width:1228px"><br><br>
<center><input type=text name=search placeholder=Search....><br><br><br><br><br><br>
<?php
if(isset($_GET['msg']))
{
	$message="<font size=6 color=#1cc71c><b>Product Successfully Added!!!!</b><br><br><br></font>";
	echo $message;
}
?>
<form name=f1 method="post" action="picupload.php" enctype="multipart/form-data">
<h1><font color=white><u>Admin Panel</u></font></h1><br><br>
<!-- <font size=4 color=white>Categories: </font>
<select required>
<option value="">Choose Categories</option>
<option value=men>Men</option>
<option value=women>Women</option>
<option value=kids>Kids</option>
</select><br><br><br><br><br> -->
<div align=left style="padding-left:400px">
<font size=4 color=white>Sub-Categories: </font><br>





<select id=ca name=subcateg required>
<option value="" disabled selected>Choose Sub-Categories</option>
<option value="Men Top Wear">Men's Top Wear</option>
<option value="Men Bottom Wear">Men's Bottom Wear</option>
<option value="Men Foot Wear">Men's Foot Wear</option>
<option value="Men Inner Wear">Men's Inner Wear</option>
<option value="Men Sports Wear">Men's Sports Wear</option>
<option value="Women Ethnic Wear">Women's Ethnic Wear</option>
<option value="Women Western Wear">Women's Western Wear</option>
<option value="Women Foot Wear">Women's Foot Wear</option>
<option value="Women Inner Wear">Women's Inner Wear</option>
<option value="Boys Clothing">Boys' Clothing</option>
<option value="Girls Clothing">Girls' Clothing</option>
<option value="Boys Foot Wear">Boys' Foot Wear</option>
<option value="Girls Foot Wear">Girls' Foot Wear</option>
</select><br><br><br><br><br><br><br></div>





<h2><font color=white><u>Add Product</u></font></h2><br><br>
<div align=left style="padding-left:300px">
<font size=4 color=white>Product Name:</font><br><input type=text name=proname placeholder="Enter Product Name" required><br><br><br><br>
<font size=4 color=white>Product Price:</font><br><input type=text name=proprice placeholder="Enter Product Price" required><br><br><br><br>
<font size=4 color=white>Colour:</font><br><input type=text name=procolour placeholder="Enter Product Colour" required><br><br><br><br>
<font size=4 color=white>Brand:</font><br><input type=text name=probrand placeholder="Enter Product Brand" required><br><br><br><br>
<font color=white size=4>Size:</font><br><input type=text name=prosize placeholder="Enter Product Size" required><br><br><br><br>
<!-- 
<input type=checkbox id="sa" OnClick="selectall()"> <font color=white size=4>Select All</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name=techno[] id="q1" value="xs"> <font color=white size=4>XS</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name=techno[] id="q2" value="s"> <font color=white size=4>S</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name=techno[] id="q3" value="m"> <font color=white size=4>M</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name=techno[] id="q4" value="l"> <font color=white size=4>L</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name=techno[] id="q5" value="xl"> <font color=white size=4>XL</font><br><br><br><br>
 -->
<font color=white size=4>Description:</font><br><textarea name=prodesc placeholder="Enter Product Description...." required></textarea><br><br><br><br>
<font color=white size=4>Upload Image:</font><br><input type=file name="fileToUpload" id="fileToUpload" required>
<!-- <input class=button2 type=submit value="Upload" name=upld> --><br><br><br><br><br><br></div>
<input class=button1 type=submit value="Add Product" name=sub OnClick="checkca()">
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
/*function selectall()
{
 var sa=document.getElementById("sa");
	if(sa.checked==true)
	{
	 document.getElementById("q1").checked=true;
	 document.getElementById("q2").checked=true;
	 document.getElementById("q3").checked=true;
	 document.getElementById("q4").checked=true;
	 document.getElementById("q5").checked=true;
	}
	else
	{
	 document.getElementById("q1").checked=false;
	 document.getElementById("q2").checked=false;
	 document.getElementById("q3").checked=false;
	 document.getElementById("q4").checked=false;
	 document.getElementById("q5").checked=false;
	}
}
function qual()
{ 
 var r=document.getElementById("sa");
 var r1=document.getElementById("q1");
 var r2=document.getElementById("q2");
 var r3=document.getElementById("q3");
 var r4=document.getElementById("q4");
 var r5=document.getElementById("q5");
	if(r1.checked==false && r2.checked==false && r3.checked==false && r4.checked==false && r5.checked==false)
	 alert("Please Select a Size!");
	else
	 alert("Proceed");
}*/
function checkca()
{
 var ca=document.getElementById("ca");
	if(ca.value=="")
	 alert("Please Select Sub-Category")
	else
	 alert("Your Sub-Cotegory: "+ca.value)
}
</script>
</html>
<?php
//include 'picupload.php';
?>