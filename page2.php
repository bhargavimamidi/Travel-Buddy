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
<!doctype html>

<head>

  <!-- Bootstrap CSS -->

  <style>
    ul,
    li {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    a {
      text-decoration: none;
    }

    .profile-wrapper {
      width: 200px;
      float: right;
      margin: 50px auto;
    }

    .profile-wrapper::after {
      content: '';
      position: absolute;
      top: 20px;
      right: 10px;
      border-color: #333 transparent transparent;
      border-width: 6px;
      border-style: solid;
    }

    .profile-wrapper::before {
      content: '';
      position: absolute;
      top: 20px;
      right: 10px;
      border-color: #eee transparent transparent;
      border-width: 6px;
      border-style: solid;
    }

    .profile-wrapper:hover::after {
      border-color: #111 transparent transparent;
    }

    .profile {
      padding: 10px;
      border: 1px solid #000;
      border-radius: 3px;
      box-shadow: 0 1px 0 #555 inset, 0 1px 7px #111;
      background: -webkit-linear-gradient(#222, #111);
    }

    .profile:hover {
      cursor: pointer;
      background: -webkit-linear-gradient(#1f1f1f, #0a0a0a);
    }

    .profile .name {
      font-size: 12px;
      color: #fff;
      line-height: 26px;
      margin-left: 10px;
    }

    .profile .name:hover {
      color: #0088cc;
    }

    .profile img {
      width: 25px;
      display: inline;
      float: left;
      border: 1px solid #111;
      border-radius: 3px;
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.5) inset;
    }

    /* hide menu */
    .menu {
      display: none;
      clear: both;
      margin: 20px 0 0 0;
    }

    .menu li {
      font-size: 12px;
      margin: 0;
      padding: 10px 4px;
    }

    .menu li a {
      color: #555;
    }

    .menu li:hover>a {
      color: #eee;
    }

    .menu li:hover {
      border-left: 1px solid #111;
      border-right: 1px solid #222;
      border-bottom: 1px solid #222;
      border-top: 1px solid #111;
      border-radius: 3px;
    }

    /* hover profile show menu */
    .profile:hover .menu {
      display: block;
    }



    .map {
      width: 60%;
      margin-top: 3%;
      margin-left: 10%;
      border-radius: 4px;
      float: left;
    }

    select {
      margin-top: 100px;
      display: inline-block;
      float: left;
      padding: 0%;
    }

    .right {
      margin-top: 100px;
      display: inline-block;
      margin-left: 5%;
      padding: 0%;
      top: 4%;
    }

    .box {

      position: relative;
      top: 20%;
      left: 40%;
      transform: translate(-50%, -50%);
      color: aliceblue;
      padding: 0%;
      padding-right: 0px;
      width: 900px;

    }

    .box select {
      width: 700px;
      color: goldenrod;
      padding: 12px;
      width: 250px;
      border: goldenrod;
      border-radius: 4px;
      font-size: 20px;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
      -webkit-appearance: button;
      appearance: button;
      width: 700px;
      box-shadow: #85837f 0px 3px 8px;


    }

    .box::before {
      content: "\f13a";
      font-family: FontAwesome;
      position: fixed;
      right: 0;
      width: 10%;
      height: 100%;
      text-align: center;
      font-size: 28px;
      line-height: 45px;
      color: rgba(255, 255, 255, 0.5);
      background-color: rgba(255, 255, 255, 0.1);
      pointer-events: none;
      border: goldenrod;
      padding: 0%;

    }

    .box:hover::before {
      background-color: rgba(255, 255, 255, 0.2);
      color: var(--c);
      font-size: 16px;
      border-radius: 4em;
      border: goldenrod 5px;
      background-color: var(--c);
      padding: 0%;

    }

    .box select option {
      width: 1000px;
      padding: 30px;
      background-image: url("https://image.freepik.com/free-vector/abstract-pattern-design_1053-523.jpg");

    }

    body {
      margin: 0;
      padding: 0;
      background-image: url("https://image.freepik.com/free-vector/abstract-pattern-design_1053-523.jpg");

    }

    .btn {
      border: none;

      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 32px;
    }

    .btn:hover {
      background-color: grey;
      
    }
  </style>
</head>

<body>
  <ul class="profile-wrapper">
    <li>
      <!-- user profile -->
      <div class="profile">
        <?php
        include "fconnection.php";

        $user1 = $_SESSION['n'];
        $name1 = $_SESSION['name'];
        $sql = "select dp from mp where username='$user1'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        $dp = $row['dp'];
        echo "
					<img src='images/$dp'>
					<a class='name'>$name1</a>
					
					<!-- more menu -->
					<ul class='menu'>
						<li><a href='settings.php'>Account Settings</a></li>
						<li><a href='logout.php'>Log out</a></li>
					</ul>

				</div>
			</li>
		</ul>";
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>

        <?php
        echo
        '<div class="left">
    <div class="box">
      <form action="ftrial3.php" method="POST">
        <select id="state" name="state"> 
          <option value="Kerala">Kerala</option>
          <option value="Goa">Goa</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Delhi">Delhi</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
        </select>
        <div class="right">
              <button type="submit" class="btn">Submit</button>
        </div>
    </div>
      </form>
    </div>
    
      <div class="map">
        <iframe width="100%" height="300px" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/en/map/untitled-map_590838?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
        
        <!--<p><a href="//umap.openstreetmap.fr/en/map/untitled-map_590838">See full screen</a></p>-->
      </div>';
        ?>

</body>

</html>