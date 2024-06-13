<?php
include 'connect.php';
session_start();
// include 'connect.php';

 if(isset($_POST['meet'])){
    $user_id = $_SESSION['u'];
    
    $teacher_id = $_POST['id'];
     $dept_id = $_POST['dept_id'];
     $purpose = $_POST['purpose'];

     $sql = "INSERT INTO meetings(user_id, teacher_id, dept_id, purpose) VALUES
            ('$user_id', '$teacher_id', '$dept_id', '$purpose')";

      $result = mysqli_query($conn, $sql); 
      
      if(!$result){
        echo "ERROR " . mysqli_error($conn);
          }
          else{
            echo "INSERTED SUCESSFULLY";
          }

 }
 ?>
