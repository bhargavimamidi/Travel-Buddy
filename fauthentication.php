<?php    

    include('fconnection.php');  

    session_start();


    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
        $_SESSION['n']=$username;
        $sql = "select * from mp where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $pass = $row['password'];
        $user = $row['username'];
        $count = mysqli_num_rows($result);
        //if(password_verify($password,$pass)){
          
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>"; 
            //window.open("page2.php?name='$username'");
            //<a href='page2.php?name='$username'>Here</a>
            header('Location: test.php'); 
            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  
   // }   
?>