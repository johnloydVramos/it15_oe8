<?php 
require_once('connect.php');
echo "<script>alert ('You are in view page')</script>";

$query = "SELECT * FROM users_tbl";

$result = $con->query($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Record List</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <h3>Student Records</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Registration Date</th>
                    </tr>
                </thead>
        </div>
    </body>

<?php
if($result->num_rows > 0 ){
    while($row = $result ->fetch_assoc()){ 
    ?>
    <tr>
        <td><?php echo $row['first_name']?></td>
        <td><?php echo $row['last_name']?></td>
        <td><?php echo $row['date_of_birth']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['addre']?></td>
        <td><?php echo $row['regs_date']?></td>
        <td><a class="btn btn-info" href="">Update</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
    </tr>
    <?php
    }//end of if $result
}//end of while loop
?>
</table>
</html>