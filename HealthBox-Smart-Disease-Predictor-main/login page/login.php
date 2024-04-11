<?php

session_start();

$con = mysqli_connect("localhost","root","","user");

$usertrim = trim($_POST['username']);

$usertrip = stripcslashes($usertrim);
$finaluser = htmlspecialchars($usertrip);

$passtrim = trim($_POST['password']);

$passtrip = stripcslashes($passtrim);
$finalpass = htmlspecialchars($passtrip);

$sql = "SELECT * FROM user_tbl where username = '$finaluser' AND passoword = '$finalpass'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>=1)
{
    $_SESSION["myuser"] = $finaluser;
    header("location:")
}
else{
    $_SESSION["error"] = "YOU ARE NOT VALID USER";
    header("location:login.html")
}
?>