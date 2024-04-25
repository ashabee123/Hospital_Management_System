<?php
$connect=mysqli_connect("localhost","root","","WT_PROJECT");
if($connect){
 echo "connection successful";
}
else{
echo "connection failed";
}
//$query="CREATE DATABASE `WT_PROJECT`";
$query="CREATE TABLE `Details`(`name` VARCHAR(20),`email` VARCHAR(40),`phone` VARCHAR(10),`gender` VARCHAR(20))";
mysqli_query($connect,$query);
?>
