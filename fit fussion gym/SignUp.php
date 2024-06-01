<?php
session_start();

include_once("connect.php");

if(isset($_POST['submit'])){

$username = $_POST["username"];
$email=$_POST["email"];
    $password = $_POST["password"];
    
  
    $sql = "INSERT INTO user VALUES ('$username', '$email','$password');";
    $result = mysqli_query($conn, $sql);
    

    if ($result != null) {

        header("Location: gym.html");
      
    } else {
        

        header("Location: signup.html");
    }
    
    mysqli_close($conn);
}
?>
