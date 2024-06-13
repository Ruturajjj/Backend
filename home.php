<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'connect.php';
    session_start();
    if(isset($_SESSION['n'])){
        $name = $_SESSION['n'];
        $id = $_SESSION['id'];
        echo "<h3>WELCOME, $name! </h3>" ;
    }
    else{
        header("location:log.html");
        exit;
    }
    $sql = "SELECT * FROM user INNER JOIN meetings ON user.id = meetings.user_id 
            INNER JOIN department ON department.dept_id =meetings.dept_id WHERE meetings.teacher_id ='$id'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Control ID</th><th>Name</th><th>Department</th><th>Purpose</th>></tr>";
    // Loop through each row in the result set
    while($row = mysqli_fetch_assoc($result)) {
        // Output data from each row
        echo "<tr>";
        echo "<td>".$row['cid']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['dept_name']."</td>";
        echo "<td>".$row['purpose']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data found";
}

mysqli_close($conn);
?>


    ?>
</body>
</html>