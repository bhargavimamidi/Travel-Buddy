<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Places</title>
<style>
  body
  {
    background-image:url("https://image.freepik.com/free-vector/abstract-pattern-design_1053-523.jpg") ;

  }
.places {
  position: relative;
  margin: 15px 0px;
  
  box-shadow: 0px 0px 0px 0px #E4E7ED, 0px 0px 0px 1px #E4E7ED;
  
  transition: 0.2s all;
}

.places:hover {
 
  box-shadow: 0px 0px 6px 0px #E4E7ED, 0px 0px 0px 2px #D10024;
}


.places .place-body {
  position: relative;
  padding: 15px;
  background-color: #FFF;
  text-align: center;
  z-index: 20;
}

.places .place-body .place-budget {
  text-transform: uppercase;
  font-size: 12px;
  color: #8D99AE;
}

.places .place-body .place-name {
  text-transform: uppercase;
  font-size: 14px;
}

.place .place-body .place-type {
  color: #D10024;
  font-size: 18px;
}
.places .place-image {
  position: relative;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}
.card
{
  width:80%;
  margin-left:25em;
  margin-top:3em;
}
.card-text
{
  width:700px;
}
.card-body
{
  width:70%;
}
.head h3
{
  font-weight: 300;
  height: 100%;
  
	font-family: 'Lato', sans-serif;
  display:inline-block;
  color: goldenrod;
  font-size: 1.5rem;
}
.head 
{
  color: white;
  width:100%;
  height:60px;
}
.top
{
  margin-left: 50px;
  width: 1100px;
	font-family: 'Lato', sans-serif;
}

.bagi
{
  display: flex;
    flex-wrap: wrap;
    justify-content:center;
    width: 100%;
    margin: 10px;
}
.card:hover {
      color: white;
      background-color: #000000;
      background-image: linear-gradient(315deg, #000000 0%, #7f8c8d 74%);
      transform: scale(1.25);
      transition: 0.9s;
    }
</style>
</head>

<body>


<div class="bagi" >
    
<?php
    include('fconnection2.php');
   if(isset($_SESSION['statepass']) ){
      $a=$_SESSION['statepass'];
    }
    $z=$_POST['type'];
    $x=$_POST['budget'];
    $_SESSION['type']=$z;
    $_SESSION['budget']=$x;
    $b=$_SESSION['type'];
    $c= $_SESSION['budget'];
    $sql = "select * from states WHERE locationtype='$b' and (state='$a' and budget<$c)";
  
    $result = mysqli_query($con,$sql);
    if ($result!==false && $result->num_rows > 0) {
      echo "<div class='head'><h3>Showing results for Location-type=$b in $a under the budget of $c</h3></div>";
        while($row=mysqli_fetch_array($result)){
            $place    = $row['place'];
            $locationtype   = $row['locationtype'];
            $budget = $row['budget'];
            $images = $row['image'];
            echo "

            <div class='card' style='margin: 30px 50px 30px 50px ; width: 18rem; float: left;'>
              <img src='images/$images' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>$place</h5>
                <p class='card-text'>$locationtype </p>
                <p class='card-text'>$budget</p>
                <a href='fdetails.php?p=$place' class='btn btn-primary'>Details</a>
              </div>
            </div>"; }
         }
         else{
           echo "<div class='head'><h3>Sorry no results for Location-type=$z in $a under the budget of $x</h3></div>";
         }
    $con->close();
?>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>