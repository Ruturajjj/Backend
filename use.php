<?php
include 'connect.php';
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cid = $_POST['cid'];
    $pw = $_POST['password'];

    $n = str_replace(' ','',$name);


$username = substr($n, 0, 5). substr($phone,0,5);

$sql = "INSERT INTO user(name, email, phone, cid, password, username)VALUES
          ('$name', '$email', '$phone', '$cid', '$pw', '$username')";
$result = $conn->query($sql);
if($result==TRUE){
    echo "User registratiion sucessful";
    echo $username;
    echo "<script>alert('<b>Your username is $username</b>')</script>";
}
else{
    echo "ERROR ".$sql. "<br>". $conn->error;
}
}
$conn->close();
?>
