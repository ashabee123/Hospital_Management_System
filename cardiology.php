<?php
$connect=mysqli_connect("localhost","root","","WT_PROJECT");

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["number"];
$gender=$_POST["gender"];

$query="INSERT INTO `Details` VALUES(?,?,?,?)";
$stmt=mysqli_prepare($connect,$query);
mysqli_stmt_bind_param($stmt,'ssss',$name,$email,$phone,$gender);

mysqli_stmt_execute($stmt);

?>
