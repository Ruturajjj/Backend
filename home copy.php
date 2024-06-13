<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['username'])){
        $name = $_GET['username'];
        echo "<h3>WELCOME, $a! </h3>" ;
    }
    else{
        header("location:login.php");
        exit;
    }
    ?>
</body>
</html>