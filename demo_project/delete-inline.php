<?php
echo $stu_id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","yahoo baba") or die("conection failed");
    $sql = "DELETE FROM rishu WHERE sid = {$stu_id}";
    $result=mysqli_query($conn,$sql) or die("connection failed");
    header("Location: http://localhost/demo_project/add.php");
    mysqli_close($conn);  
    

?>