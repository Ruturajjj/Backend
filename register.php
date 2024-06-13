<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Teacher Registration</h2>
    <form method="POST" action="re.php">
        <label for="name"> Full Name: </label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="name"> Email: </label>
        <input type="text" id="email" name="email" required><br><br>
        <label for="name"> Username: </label>
        <input type="text" id="uname" name="uname" required><br><br>

        <!-- <label for="department">Department:</label><br>
        <select id="dept" name="department" required>
        <option value="1">Information Technology</option>
        <option value="2">Biotechnology</option>
        <option value="3">Arts</option>
        <option value="4">Commerce</option>
        <option value="5">Physics</option>
        <option value="6">Botany</option> -->
        <label for="department">Department:</label><br>
        <select id="department" name="dept_id">
            <option value="">--Select Department--</option>
            <?php
            echo "Hii";
            include 'connect.php';
            $sql = "SELECT dept_id, dept_name FROM department";
            $result = mysqli_query($conn,$sql);
             
            while($row = mysqli_fetch_assoc($result)){
                // echo $row['dept_id']  . $row['dept_name'] ;
                echo "<option value='". $row['dept_id'] . "'>" . $row['dept_name'] . "</option>";
            
            }
            mysqli_close($conn);
            ?>
            </select><br><br>
    <br><br>

        <label for="name"> Password: </label>
        <input type="text" id="pw" name="pass" required><br><br>

        <button type="submit">Register</button>
    </form>
</body>

</html>