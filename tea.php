<?php

if(isset($_POST['dept_id'])){
    $dept_id = $_POST['dept_id'];
//   $dept_id =1;
//     echo $dept_id;

    include 'connect.php';

    $query = "SELECT id, name FROM teachers WHERE dept_id = " . intval($dept_id);
    $result = mysqli_query($conn, $query);

    if(!$result){
        error_log('Query failed: ' . mysqli_error($conn));
        die('Query failed : ' . mysqli_error($conn));
    }
    else{
    
    echo "<option value=''>--Select Teacher--</option>";

    while($row = mysqli_fetch_assoc($result)){
        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
        // echo "<option value='". $row['id'] . "'>" . $row['name'] . "</option>";

        
    }
}

    mysqli_close($conn);
}

?>