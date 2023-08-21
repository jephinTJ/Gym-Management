<?php
require_once('planConn.php');
$query="select * from workoutplan";
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
                        <h3 class="display-6 text-center">Fetched Plan Details From <a rel="nofollow" href="..mother.html" target="_parent" style="color: red;"><strong>Z-</strong></a>Database</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>workoutPlan ID</td>
                                <td>member ID</td>
                                <td>trainer ID</td>
                                <td>workout date</td>
                                <td>workout time</td>
                                <td>workout ID</td>
        
                            </tr>
                            <tr>
                               <?php
                               while($row=mysqli_fetch_assoc($result))
                               {
                               ?> 

                                <td><?php echo $row['workoutPlan_id']; ?></td>
                                <td><?php echo $row['member_id']; ?></td>
                                <td><?php echo $row['trainer_id']; ?></td>
                                <td><?php echo $row['workout_date']; ?></td>
                                <td><?php echo $row['workout_time']; ?></td>
                                <td><?php echo $row['workout_id']; ?></td>
                                
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