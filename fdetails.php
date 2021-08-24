<?php
session_start();
?>
<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .details {
      display: block;
      margin: 25px 100px 25px 100px;
      padding: 25px 100px 75px 100px;

    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .place-name {
      font-family: Georgia, serif;
      text-align: center;
    }

    h1 {
      text-align: center;
    }

    .deets {
      font-family: Verdana;
      background-color: #FFFFFF;
      border-radius: 15px;
      font-size: 1.5rem;
      font-weight: 300;
      font-family: Benton Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
      margin: 0px 150px 0px 150px;
      padding: 10px 25px 10px 25px;
    }

    body {
      background-color: #eee;
      margin: 0px 0px 0px 0px;
    }

    .front {
      position: absolute;
      top: 550px;
      left: 700px;
    }

    .flex-container {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 1000px;
      margin-left: 300px;

    }

    .flex-container>div {
      margin: 10px;
      padding-top: 1px;
      padding-right: 10px;
      padding-bottom: 1px;
      padding-left: 10px;
      font-size: 20px;

    }

    .ref {
      background-color: #FFFFFF;
      border-radius: 25px;
      transition: 0.3s;
    }

    .ref:hover {
      background-color: #808080;

    }

    .book {
      background-color: #FFFFFF;
      border-radius: 25px;
      transition: 0.3s;
     
    }


    .container {

      height: 100vh;
      padding-bottom: 20px;
      text-align: center;
    }

    .content {

      margin-left: 950px;
      margin-right: 300px;
      margin-top: -400px;
      padding-bottom: 2px;
      display: inline-block;
      position: relative;
      border-radius: 15px;
      float: left;
    }

    polygon {
      fill: PaleGoldenRod;
      text-align: center;

      &.arrow-middle {
        opacity: 0.75;
      }

      &.arrow-top {
        opacity: 0.5
      }

    }

    svg {
      text-align: center;
      display: block;
      padding-left: 200px;
      padding-top: 20px;

    }

    .more-arrows {
      transition: transform .2s;
    }

    .more-arrows:hover {
      transform: scale(1.5);

    }


    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: red;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #555;
    }


    .pointer {
      width: 400px;
      height: 80px;
      position: relative;
      background:  #00e6e6;
      margin-left: 350px;
    }

    .pointer:after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0;
      height: 0;
      border-left: 40px solid #eee;
      border-top: 40px solid transparent;
      border-bottom: 40px solid transparent;
    }

    .button {

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
      margin-left: 675px;

    }

    .button4 {
      background-color: white;
      border: 2px solid #e7e7e7;
    }
  </style>
</head>

<body>
  <?php
  include "logoutbtn.php";
  ?>
  <br>
  <br>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <?php
  include 'fconnection2.php';
  //session_start();
  //$place=$_SESSION['place'];
  //$place = stripcslashes($place);.details deets {
  //background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%);
  //}  
  //$place = mysqli_real_escape_string($con, $place); 
  //$_SESSION['var']=$selected; 
  //echo $_SESSION['statepass'];
  $pname = $_GET['p'];
  $sql = "select * from places where place='$pname'";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $place    = $row['place'];
      $brief   = $row['brief'];
      $image1 = $row['image1'];
      $image2 = $row['image2'];
      $package1 = $row['package1'];
      $package2 = $row['package2'];
      $bpe = $row['bpe'];
      $btv = $row['btv'];
      $bps = $row['bps'];
      echo "

    
            <h2 style='text-align: center;font-size: 4rem;font-weight: 600;margin-bottom: 5px;margin-top: 5px; margin-left: 180px;'> Welcome to $place </h2>
            <div class='flex-container' >
                <div class='ref'><a href='#bps'><p>Best Places to stay </p> </a></div>
                <div class='ref'><a href='#bpe'><p>Best Places to eat </p></div></a>
                <div class='ref'><a href='#btv'><p>Best time to visit</p></div></a>
                <div class='ref'><a href='#pckg'><p>Our Packages </p></div></a>

            </div>
            <div style='margin-right: 0px;'>
                <img src='images/$image2' style='width: 800px; height: 500px;' alt='' class='back'>
            <div class='container' >
            <div class='content'>
            <h2>Let's take a quick tour </h2>
              <a href='#opening'> <svg class='more-arrows'>
              
                <polygon class='arrow-top' points='37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3 '/>
                <polygon class='arrow-middle' points='37.6,45.8 0.8,18.7 4.4,16.4 37.6,41.2 71.2,16.4 74.5,18.7 '/>
                <polygon class='arrow-bottom' points='37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 '/>
              </svg>
              </a>
            </div>
          </div>
          </div>


            <div class='details'>
                <h1 id='opening' class='place-name' style='font-size: 6em;'>$place</h1>
                <p style='text-align:center;'><img src='images/$image1' style='{display: block;margin-left: auto;margin-right: auto;width:50%;}' alt='' class='center'></p>
                <div class='deets'>
                    <p style='left:100px;right: 100px;'>$brief</p>
                </div>
                <h2 style='text-align: center;font-family: Benton Sans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;font-size: 3rem;' id='bps'>Best Places to stay in $place </h2>
                <br>
                <div class='deets'><p>$bps</p></div>
                <h2 style='text-align: center; font-family: Benton Sans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;font-size: 3rem;' id='bpe'>Best Places to eat in $place</h2>
                    <br>
                    <div class='deets'><p>$bpe</p></div>
                    <h2 style='text-align: center; font-family: Benton Sans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;font-size: 3rem; ' id='btv'>Best time to visit $place</h2>
                    <br>
                    <div class='deets'><p>$btv</p></div>

                    <h2 style='text-align: center; font-family: Benton Sans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;font-size: 3rem;' id='pckg'>Our Packages</h2>
                    <div class='pointer' style='  text-align: center;'>
                    <h3 style='padding-left:13px;padding-top: 25px;font-size: 1.5rem;'>      2 Nights 3 Days -Rs. $package1</h3>
                    </div>
                    <div class='pointer' style='  text-align: center;'>
                    <h3 style='padding-left:13px; padding-top: 25px;font-size: 1.5rem;'>      5 Nights 6 Days -Rs. $package2</h3>
                    </div>
            </div>
           
    
";
    }
  }
  //else { echo "0 results"; }
  $con->close();
  ?>

  <?php
  echo "<a href='book/book.php?pl=$place' class='button button4' > BOOK NOW!</a> ";
  ?>
</body>

</html>