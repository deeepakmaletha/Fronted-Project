<?php


$conn = mysqli_connect('localhost','root');

if($conn){
    echo "done";
}else{
    echo "error";
}
mysqli_select_db($conn,'gallery');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO `gallery`(`username`,`email`, `mobile`, `comment`) VALUES ('$user','$email','$mobile','$comment')";

mysqli_query($conn,$query);
header('location:index.php');


?>