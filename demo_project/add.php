<?php
include 'header.php';
?>
<div id="main-content">
    <h2>Student Records</h2>

    <!-- made mysqli connection -->
    
    <?php
    $conn = mysqli_connect("localhost","root","","yahoo baba") or die("conection failed");
    $sql = "SELECT * FROM rishu join studentclass where rishu.sclass=studentclass.cid";
    $result=mysqli_query($conn,$sql) or die("connection failed");
    
    if(mysqli_num_rows($result)>0){
     ?>
    <table cellpadding="7px">
     <thead>
        <th>Id</th>
        <th>Student Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Admin</th>
        </thead>
        <?php
        while($row=mysqli_fetch_assoc($result)){
        
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['sid'];?></td>
                <td><?php echo $row['sname'];?></td>
                <td><?php echo $row['saddress'];?></td>
                <td><?php echo $row['cname'];?></td>
                <td><?php echo $row['sphone'];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row ['sid'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row ['sid'];?>'>Delete</a>
                </td>
            </tr>
            <?php }?>
        
            
        </tbody>
    </table>
    <?php } else{
        echo "<h2>no record found</h2>";}
        ?>
</div>
</div>
</body>
</html>
