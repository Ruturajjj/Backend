<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS department(
         dept_id INT AUTO_INCREMENT PRIMARY KEY,
         dept_name VARCHAR(255) NOT NULL
          )";

if(!mysqli_query($conn,$sql)){
    echo " EROOR CREATING TABLE department : " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS teachers(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL UNIQUE,
        email VARCHAR(255) NOT NULL UNIQUE,
        username VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        dept_id INT NOT NULL,
        FOREIGN KEY (dept_id) REFERENCES department(dept_id)
        )";

if(!mysqli_query($conn,$sql)){
    echo "EROOR CREATING TABLE teacher : " . mysqli_error($conn);
}
$sql = "CREATE TABLE IF NOT EXISTS user(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone VARCHAR(255) NOT NULL,
    cid VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL
    )";
    if(!mysqli_query($conn,$sql)){
        echo "EROOR CREATING TABLE user : " . mysqli_error($conn);
    }
    $sql = "CREATE TABLE IF NOT EXISTS meetings(
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL ,
        teacher_id INT NOT NULL,
        dept_id INT NOT NULL,
        purpose VARCHAR(255) NOT NULL,
        FOREIGN KEY (dept_id) REFERENCES department(dept_id),
        FOREIGN KEY (user_id) REFERENCES user(id),
        FOREIGN KEY (teacher_id) REFERENCES teachers(id)
        )";

     if(!mysqli_query($conn,$sql)){
         echo "EROOR CREATING TABLE meetings : " . mysqli_error($conn);
         }


?>
      

    
    