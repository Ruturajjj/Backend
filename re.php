<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $department = $_POST['dept_id'];

    require 'connect.php';
    echo $department;
    $sql = "INSERT INTO teachers(name,email,username,password,dept_id)VALUES
             ('$name','$email','$uname','$pass','$department')";

    if($conn->query($sql)==TRUE){
        echo"REGISTRATION SUCESSFUL";
        header("Location:log.html");
    } else{
        echo"Error ".$sql."<br>". conn->error;
    }     

   
$conn->close();
           
}
?>