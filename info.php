<?php
include 'connect.php';

if(isset($_POST['meet'])){
    $user = $_POST['username'];
    $teacher = $_POST['teacher'];
    $purpose = $_POST['met'];

    $sql = "SELECT id FROM user WHERE username='$user' ";
    $result = $conn->query($sql);
    $id = 

    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        if($row['password']==$pass){

}