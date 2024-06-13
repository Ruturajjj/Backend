<?php
include 'connect.php';

session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['uname'];
    $pass = $_POST['pass'];

    

    $sql = "SELECT id , password, name  FROM teachers WHERE username = '$user'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        if($row['password']==$pass){
            // echo "Login Sucessful. Welcome, teacher name: " . $row['name'];
            $name = $row['name'];
            $_SESSION['n'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location:home.php");
        }
        else{
            echo " INVALID PASSWORD";
        }
    }
 else{
  echo "NO USER FOUND";
 }
}
mysqli_close($conn);    


?>