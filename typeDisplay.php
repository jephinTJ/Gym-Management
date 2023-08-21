<?php
require_once('typeConn.php');
$query="select * from membership_type";
$result=mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planDisplay</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <!-- <h6 class="display-6 text-left"><a href="verifyMem.html" style="color: red;">log-out</a></h6> -->
                        <h6 class="display-6 text-left"><a href="mother.html" style="color: red;">home</a></h6><br>
                        <h3 class="display-6 text-center">Fetched Type Details From <a rel="nofollow" href="..mother.html" target="_parent" style="color: red;"><strong>Z-</strong></a>Database</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>name</td>
                                <td>membership ID</td>
                                <td>membership amount</td>
                                <td>membership period(months)</td>
                                
        
                            </tr>
                            <tr>
                               <?php
                               while($row=mysqli_fetch_assoc($result))
                               {
                               ?> 

                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['Membership_id']; ?></td>
                                <td><?php echo $row['membership_amount']; ?></td>
                                <td><?php echo $row['membership_period']; ?></td>
                                
                                
                                <!-- <td><a href="#" class="btn btn-primary">edit</a></td>
                                <td><a href="#" class="btn btn-danger">delete</a></td> -->
                            </tr>
                               <?php    
                               }
                               ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>