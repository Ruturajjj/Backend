<?php
include 'connect.php';

session_start();
// echo "Session ID" . session_id();if(isset($_POST['register'])){

if(isset($_POST['login'])){
    $user = $_POST['uname'];
    $pass = $_POST['pass'];
    // echo "HII";
    // require 'connect.php';
    $sql = "SELECT id ,username, password, name  FROM user WHERE username = '$user'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        echo "HII";
        $row = mysqli_fetch_assoc($result);
        if($row['password']==$pass){
            echo "HIII";
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: homeu.php");
            exit();
        }
        else{
        echo " INVALID PASSWORD";
        }
    }
    
    else{
        echo "NO USER FOUND";
        }
    
}

        
    $conn->close();


?>