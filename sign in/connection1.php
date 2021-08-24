<?php

$link = mysqli_connect("localhost:3307", "root", "", "mp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
//$pass=password_hash($password, PASSWORD_DEFAULT);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$Mobile = mysqli_real_escape_string($link, $_REQUEST['Mobile']);
$secret = mysqli_real_escape_string($link, $_REQUEST['secret']);
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$dp = mysqli_real_escape_string($link, $_REQUEST['dp']);
echo $dp;
$sql = "INSERT INTO mp (name,password,username,Mobile,Email,secret,dp) VALUES ('$name','$password','$username','$Mobile','$Email','$secret','$dp')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location: ../homepage.php#container");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
