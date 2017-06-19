<?php
include('adminsession.php');
$query="select * from products where pid=69";
$result=mysql_query($query);
while($r=mysql_fetch_array($result))
{
	$subcat=$r['subcat'];
	$pname=$r['pname'];
	$pprice=$r['pprice'];
	$pcolour=$r['pcolour'];
	$pbrand=$r['pbrand'];
	$psize=$r['psize'];
	$pdescription=$r['pdescription'];
	$image=$r['image'];
}

?>
<html>
<head>
<title>Craft Clothing - Be Stylish | Update Product</title>
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
      <a href="updateproduct.php">Update Product</a>
      <a href="deleteproduct.php">Delete Product</a>
      <a href="adminpanel.php">Admin Panel</a>
      <a href="adminpk.php">Add Pass Key</a>
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
	$message="<font size=6 color=#1cc71c><b>Product Successfully Updated!!!!</b><br><br><br></font>";
	echo $message;
}
?>
<form name=f1 method="post" action="picupdate.php" enctype="multipart/form-data">
<h1><font color=white><u>Update Product</u></font></h1><br><br>
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
<option value="Men Top Wear" <?php if($subcat=="Men Top Wear") echo "selected"; ?>>Men's Top Wear</option>
<option value="Men Bottom Wear" <?php if($subcat=="Men Bottom Wear") echo "selected"; ?>>Men's Bottom Wear</option>
<option value="Men Foot Wear" <?php if($subcat=="Men Foot Wear") echo "selected"; ?>>Men's Foot Wear</option>
<option value="Men Inner Wear" <?php if($subcat=="Men Inner Wear") echo "selected"; ?>>Men's Inner Wear</option>
<option value="Men Sports Wear" <?php if($subcat=="Men Sports Wear") echo "selected"; ?>>Men's Sports Wear</option>
<option value="Women Ethnic Wear" <?php if($subcat=="Women Ethnic Wear") echo "selected"; ?>>Women's Ethnic Wear</option>
<option value="Women Western Wear" <?php if($subcat=="Women Western Wear") echo "selected"; ?>>Women's Western Wear</option>
<option value="Women Foot Wear" <?php if($subcat=="Women Foot Wear") echo "selected"; ?>>Women's Foot Wear</option>
<option value="Women Inner Wear" <?php if($subcat=="Women Inner Wear") echo "selected"; ?>>Women's Inner Wear</option>
<option value="Boys Clothing" <?php if($subcat=="Boys Clothing") echo "selected"; ?>>Boys' Clothing</option>
<option value="Girls Clothing" <?php if($subcat=="Girls Clothing") echo "selected"; ?>>Girls' Clothing</option>
<option value="Boys Foot Wear" <?php if($subcat=="Boys Foot Wear") echo "selected"; ?>>Boys' Foot Wear</option>
<option value="Girls Foot Wear" <?php if($subcat=="Girls Foot Wear") echo "selected"; ?>>Girls' Foot Wear</option>
</select><br><br><br><br><br><br><br></div>





<div align=left style="padding-left:300px">
<font size=4 color=white>Product Name:</font><br><input type=text name=proname value="<?php echo $pname; ?>" placeholder="Enter Product Name" required><br><br><br><br>
<font size=4 color=white>Product Price:</font><br><input type=text name=proprice value="<?php echo $pprice; ?>" placeholder="Enter Product Price" required><br><br><br><br>
<font size=4 color=white>Colour:</font><br><input type=text name=procolour value="<?php echo $pcolour; ?>" placeholder="Enter Product Colour" required><br><br><br><br>
<font size=4 color=white>Brand:</font><br><input type=text name=probrand value="<?php echo $pbrand; ?>" placeholder="Enter Product Brand" required><br><br><br><br>
<font color=white size=4>Size:</font><br><input type=text name=prosize value="<?php echo $psize; ?>" placeholder="Enter Product Size" required><br><br><br><br>
<!-- 
<input type=checkbox id="sa" OnClick="selectall()"> <font color=white size=4>Select All</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name=techno[] id="q1" value="xs"> <font color=white size=4>XS</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name=techno[] id="q2" value="s"> <font color=white size=4>S</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name=techno[] id="q3" value="m"> <font color=white size=4>M</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name=techno[] id="q4" value="l"> <font color=white size=4>L</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=checkbox name=techno[] id="q5" value="xl"> <font color=white size=4>XL</font><br><br><br><br>
 -->
<font color=white size=4>Description:</font><br><textarea name=prodesc placeholder="Enter Product Description...." required><?php echo $pdescription; ?></textarea><br><br><br><br>
<font color=white size=4>Upload Image:</font><br><input type=file name="fileToUpload" value="<?php echo $image; ?>" id="fileToUpload" required>
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
</html>