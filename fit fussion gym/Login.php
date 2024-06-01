<?php
session_start();

include_once("connect.php");

if(isset($_POST['submit'])){

$username = $_POST["username"];
    $password = $_POST["password"];
    
  
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    

    if ($result && mysqli_num_rows($result) > 0) {

        $_SESSION['username'] = $username; 
        header("Location: gym.html");

        
    
      
    } else {
        
        header("Location: login.html");
    }
    
    mysqli_close($conn);
}
?>
