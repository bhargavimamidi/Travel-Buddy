<style>
    
    .one {
  margin: 50px auto 20px auto;
  padding: 10px;
  border-bottom: 2px solid #eee;
  width: 500px;
}

.two p {
  font-family: 'Lato';
  font-size: 18px;
  font-weight: 300;
  line-height: 32px;
}

.one a {
  font-family: 'Lato';
  text-decoration: none;
  font-size: 26px;
  color: #000;
  font-weight: 900;
  margin: 0 20px 0 0;
  position: relative;
}

.one a:before {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 3px;
  background-color: #000;
  content: '';
  -webkit-transform: translateY(8px);
  opacity: 0;
  transition-property: -webkit-transform, opacity;
  transition-duration: .3s;
}

.one a:hover:before {
  -webkit-transform: translateY(0);
  opacity: 1;
}

</style>
<?php    
 session_start();
    include('fconnection.php');  
    
   


    $username = $_POST['username'];  
    $secret = $_POST['secret'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $secret = stripcslashes($secret);  
        $username = mysqli_real_escape_string($con, $username);  
        $secret = mysqli_real_escape_string($con, $secret);  
      
    $_SESSION['n']=$username;

        $sql = "select * from mp where username = '$username' and secret = '$secret';";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>"; 
            //window.open("page2.php?name='$username'");
            //<a href='page2.php?name='$username'>Here</a>
            //header('Location: reset.php?u=$username'); 
            echo "<div class='one'><a class='link' href='reset.php?u=$username'> RESET HERE</a></div>";
            //<input type="password" name="password" class="zip" id="password" placeholder="New Password" required>
            
        }  
        else{  
            echo "<h1> Invalid username or secret answer is wrong.</h1>";  
        }     
?>

