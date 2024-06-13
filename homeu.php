<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js"></script>
</head>
<body>
<h3>User Home Page</h3>
<form  action ="meeting.php" method="POST">
<?php
// ini_set('display_errors',1);
// ini_set('display_startup_errors',1);
// error_reporting(E_ALL);
// echo "Hii";
// include 'connect.php';
// $sql = "SELECT dept_id, dept_name FROM department";
// $result = mysqli_query($conn,$sql);
 
// while($row = mysqli_fetch_assoc($result)){
//     echo $row['dept_id']  . $row['dept_name'] ;

// }
// mysqli_close($conn);

if(isset($_GET['username'])){
    $user = $_GET['username'];
    echo "<h3>Welcome, $user</h3>";
}
session_start();
if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    echo $user_id;
    
}
$user_id = $_SESSION['user_id'];
$_SESSION['u'] = $user_id;

?>

<!-- <script> $(document).ready(function(){alert(1);})</script> -->


<label for="department">Select Department:</label>
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

<label for="teacher">Select Teacheer:</label>
<select id="teacher" name="id">
<option value="">--Select teacher--</option>
</select>
<script>
    $(document).ready(function() {
        $('#department').change(function() {
        var dept_id = $(this).val();
        

        $.ajax({
            url: 'tea.php',
            type: 'POST',
            data: {dept_id: dept_id},
            dataType: 'html',
            success: function(data){
                $('#teacher').html(data);
            },
            error: function(xhr, status, error){
                console.error('AJAX ERROR: '+ status + error);
            }
            });
        });
    });
</script>
<br><br>
<label for="purpose">Purpose to meet</label>
<input type="text" id="purpose" name="purpose">
<br><br>
<button name="meet">Schedule Meeting</button>
</form>


    
</body>
</html>