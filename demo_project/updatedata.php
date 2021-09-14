<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root","","yahoo baba") or die("conection failed");
              $sql = "UPDATE rishu SET sname = '{$stu_name}',saddress= '{$stu_address}',sclass = '{$stu_class}',sphone = '{$stu_phone}' WHERE sid = {$stu_id}";
               $result=mysqli_query($conn,$sql) or die("connection failed");
               header("Location: http://localhost/demo_project/add.php");

             // close the  mysqli connection//

 mysqli_close($conn);           



?> 