<?php
$connect=mysqli_connect("localhost","root","","WT_PROJECT");
if($connect){
echo "connecton successful";
}
else{
echo "connection failed";
}


$query="INSERT INTO 'Details` VALUES(?,?,?,?);
$stmt=mysqli_prepare($connect,$query);
mysqli_stmt_bind_param($stmt,'ssss',$name,$email,$phone,$gender);
$name=$_POST['name'];
echo $name;
$email=$_POST['email'];
$phone=$_POST['number'];
$gender=$_POST['gender'];
mysqli_stmt_execute($stmt);

?>
