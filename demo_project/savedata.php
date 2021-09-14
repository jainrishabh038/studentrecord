<?php

$stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];
 $conn = mysqli_connect("localhost","root","","yahoo baba") or die("conection failed");
               $sql = "INSERT INTO rishu(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
                $result=mysqli_query($conn,$sql) or die("connection failed");
                header("Location: http://localhost/demo_project/add.php");

              // close the  mysqli connection//

  mysqli_close($conn);           
?>