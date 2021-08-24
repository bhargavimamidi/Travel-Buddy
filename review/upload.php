<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3307", "root", "", "mp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Review = mysqli_real_escape_string($link, $_REQUEST['Review']);

$sql = "INSERT INTO review (Name,Review) VALUES ('$Name','$Review')";
if(mysqli_query($link, $sql)){
    header("location: reviews.php");
    echo "<h2 style='color: white;'>Records added successfully.</h2>";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>