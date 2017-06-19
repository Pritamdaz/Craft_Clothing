<?php
//session_start();
include('adminsession.php');
$link=mysqli_connect("localhost","root","","craft") or die("Not Connected");
//mysql_select_db("craft",$link) or die("Database Not Connected");
//$current_date = date("Y-m-d"); $current_time = date("H:i:s");




$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$extension = end((explode(".", $_FILES["fileToUpload"]["name"])));
$uploadOk = 1;
//$uid = $_SESSION['uid'];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST['submit'])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/".round(microtime(true))."_".$admin_check.".".$extension)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
    $new = "uploads/".round(microtime(true))."_".$admin_check.".".$extension;
    //$dates = explode('to',$_POST['dates']);
 //$sql = "INSERT INTO products (subcat,pname,pprice,pcolour,pbrand,pdescription,image) VALUES ('".$_POST['subcateg']."','".$_POST['proname']."','".$_POST['proprice']."','".$_POST['procolour']."','".$_POST['probrand']."','".$_POST['prodesc']."','".$new."')";

 /*
 $checkbox1=$_POST['techno'];
 $chk="";
 foreach($checkbox1 as $chk1)
 {
 	$chk .= $chk1.",";
 }*/
 $sql="update products set subcat='".$_POST['subcateg']."',pname='".strtoupper($_POST['proname'])."',pprice='".$_POST['proprice']."',pcolour='".strtoupper($_POST['procolour'])."',pbrand='".strtoupper($_POST['probrand'])."',psize='".strtoupper($_POST['prosize'])."',pdescription='".$_POST['prodesc']."',image='".$new."' where pid='69'";
 //$in_ch=mysqli_query($link,$sql);
 /*if($in_ch==1)
 {
 	echo'<script>alert("Inserted Successfully")</script>';
 }
 else
 {
 	echo'<script>alert("Failed To Insert")</script>';
 }*/
 
 
 
//echo $sql; 
if(!mysqli_query($link, $sql)) { echo "error:".mysqli_error($link); }
else { header('Location:updateproduct.php?msg'); }
}
?>