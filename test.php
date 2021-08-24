<?php
session_start();
include "fconnection.php";
$u = $_SESSION['n'];
$sql = "select * from mp where username='$u'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$dp = $row['dp'];
$name = $row['name'];
$password = $row['password'];
$email = $row['Email'];
$mobile = $row['Mobile'];

$_SESSION['name'] = $name;
$_SESSION['dp'] = $dp;
$_SESSION['mobile'] = $mobile;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Country Map </title>
  <script src="mapdata.js"></script>
  <script src="countrymap.js"></script>
  <style>
    body {
      background-image: url("https://image.freepik.com/free-vector/abstract-pattern-design_1053-523.jpg");
    }

    h1 {
      color: goldenrod;
      margin-left: 450px;
      width: 500px;
    }
  </style>
</head>

<body>
  <?php include "logoutbtn.php" ?>
  <h1>Choose the state you want to visit</h1>

  <div id="map" style="margin-left: 500px; display: flex;"></div>



</body>

</html>