<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

  <title>Places</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Lato');

    body,
    html {
      height: 100%;
      background-image: url("https://image.freepik.com/free-vector/abstract-pattern-design_1053-523.jpg");
      font-family: 'Lato', sans-serif;
      margin: 0px;
      padding: 0px;
    }

    * {
      box-sizing: border-box;
    }

    .container {
      position: relative;
      width: 100%;
      padding: 20px;
    }

    h2 {
      color: #AAAAAA;
    }

    .container ul {
      list-style: none;
      margin-left: 30px;
      width: 1000px;
      padding-left: 0px;
      padding: 0;
      overflow: auto;
    }

    .filter li {
      color: #AAAAAA;
      display: block;
      position: relative;
      float: left;
      width: 100%;
      height: 100px;
      /* border-bottom: 1px solid #333; */
    }

    .filter li input[type=radio] {
      position: absolute;
      visibility: hidden;
    }

    .filter li label {
      display: block;
      position: relative;
      font-weight: 300;
      font-size: 1.35em;
      padding: 25px 25px 25px 80px;
      margin: 10px auto;
      height: 30px;
      z-index: 9;
      cursor: pointer;
      -webkit-transition: all 0.25s linear;
    }

    .filter li:hover label {
      color: #FFFFFF;
    }

    .filter li .check {
      display: block;
      position: absolute;
      border: 5px solid #AAAAAA;
      border-radius: 100%;
      height: 25px;
      width: 25px;
      top: 30px;
      left: 20px;
      z-index: 5;
      transition: border .25s linear;
      -webkit-transition: border .25s linear;
    }

    .filter li:hover .check {
      border: 5px solid #FFFFFF;
    }

    .filter li .check::before {
      display: block;
      position: absolute;
      content: '';
      border-radius: 100%;
      height: 15px;
      width: 15px;
      top: 5px;
      left: 5px;
      margin: auto;
      transition: background 0.25s linear;
      -webkit-transition: background 0.25s linear;
    }

    input[type=radio]:checked~.check {
      border: 5px solid #0DFF92;
    }

    input[type=radio]:checked~.check::before {
      background: #0DFF92;
    }

    input[type=radio]:checked~label {
      color: #0DFF92;
    }

    .top {
      margin-left: 50px;
      width: 1100px;
      font-family: 'Lato', sans-serif;
    }

    .bagi {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      width: 100%;
      margin: 10px;
      position: absolute;
      top: 500px;
    }

    .slider {
      color: white;
      margin: 2em;
      width: 80px;
    }

    .slider-text {
      color: white;
    }


    .range-wrap {
      position: relative;
      margin: 0 auto 3rem;

    }

    .range {
      width: 100%;
    }

    .bubble {
      background: white;
      color: black;
      padding: 4px 12px;
      position: absolute;
      border-radius: 4px;
      left: 50%;
      transform: translateX(-50%);
    }

    .bubble::after {
      content: "";
      position: absolute;
      width: 2px;
      height: 2px;
      background: white;
      top: -1px;
      left: 50%;
    }

    .button {
      background-color: #4CAF50;
      /* Green */
      border: none;
      color: black;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius: 2rem;
    }

    .button4 {
      background-color: white;
      border: 2px solid #e7e7e7;
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
  <?php
  include "logoutbtn.php";
  ?>
  <br>


  <div class="top" style=" 
    width: 1100px;
">
    <div class="container" style="
    margin-left: 30px;
    width: 1000px;
    padding-left: 0px;" }>
      <div style="position: absolute; top:42px; margin-left: 100px;">
        <h2>What type of place do you want to visit?</h2>
        <form action="ftrial2.php" method="POST">
          <ul class="filter">
            <li>
              <input type="radio" id="Mountains" name="type" value="Mountains" >
              <label for="Mountains" style="width: 605px; margin-left: 0px;">Mountains</label>

              <div class="check"></div>
            </li>

            <li>
              <input type="radio" id="beaches" name="type" value="beaches">
              <label for="beaches">Beaches</label>

              <div class="check">
                <div class="inside"></div>
              </div>
            </li>

            <li>
              <input type="radio" id="Pilgrimage" name="type" value="Pilgrimage">
              <label for="Pilgrimage">Pilgrimage</label>

              <div class="check">
                <div class="inside"></div>
              </div>
            </li>
          </ul>
      </div>
      <br>
      <div style="position: absolute;">
        <h2 style="margin-left: 900px;     width: 300px;">Choose your budget:</h2>
        <br>
        <div class="range-wrap" style="width: 25%; margin-left: 900px;">
          <input type="range" class="range" min="5000" max="200000" id="budget" name="budget">
          <output class="bubble"></output>
        </div>
      </div>

      <button class="button button4" type="submit" style=" margin-top: 350px;margin-left: 600px"> Filter</button>
      </form>
    </div>
  </div>


  <div class="bagi">


    <?php
    include('fconnection2.php');
    //$selected=$_COOKIE['state_specific'];

    if (session_id() == '') {
      // session isn't started
      echo "hi";
    }

    $selected = $_GET['s'];
    $selected = stripcslashes($selected);
    $selected = mysqli_real_escape_string($con, $selected);
    $_SESSION['statepass'] = $selected;
   // echo $_SESSION['statepass'];
    $sql = "select * from states where state='$selected'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
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
          </div>";
      }
    }
    else { echo "<h2>0 results</h2>"; }

    ?>
  </div>



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script>
    const allRanges = document.querySelectorAll(".range-wrap");
    allRanges.forEach(wrap => {
      const range = wrap.querySelector(".range");
      const bubble = wrap.querySelector(".bubble");

      range.addEventListener("input", () => {
        setBubble(range, bubble);
      });
      setBubble(range, bubble);
    });

    function setBubble(range, bubble) {
      const val = range.value;
      const min = range.min ? range.min : 0;
      const max = range.max ? range.max : 100;
      const newVal = Number(((val - min) * 100) / (max - min));
      bubble.innerHTML = val;

      // Sorta magic numbers based on size of the native UI thumb
      bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
    }
  </script>
</body>

</html>