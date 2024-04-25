<?php
$connect=mysqli_connect("localhost","root","","WT_PROJECT");
if($connect){
echo "connecton successful";
}
else{
echo "connection failed";
}
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["number"];
$gender=$_POST["gender"];
$query="CREATE TABLE `DERMANTOLOGIST`(`NAME` VARCHAR(20),`E-MAIL` VARCHAR(30),`PHONE` VARCHAR(10),`GENDER` VARCHAR(10));";
mysqli_query($connect,$query);

$query1="INSERT INTO `DERMANTOLOGIST`(`NAME`,`AGE`,`E-MAIL`,`PHONE`,`GENDER`) VALUES ('$name','$email','$phone','$gender');";
mysqli_query($connect,$query1);
?>

