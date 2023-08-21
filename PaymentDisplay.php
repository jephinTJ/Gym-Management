<?php
require_once('PaymentConn.php');
$query="select * from payment";
$result=mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaymentDisplay</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h6 class="display-6 text-left"><a href="verifyPay.html" style="color: red;">log-out</a></h6>
                        <h6 class="display-6 text-left"><a href="mother.html" style="color: red;">home</a></h6><br>
                        <h3 class="display-6 text-center">Fetched Payment Details From <a rel="nofollow" href="..mother.html" target="_parent" style="color: red;"><strong>Z-</strong></a>Database</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>₹amount</td>
                                <td>member_id</td>
                                <td>date</td>
                                <td>payment_ID</td>
                                <!-- <td>edit</td>
                                <td>delete</td> -->
                            </tr>
                            <tr>
                               <?php
                               while($row=mysqli_fetch_assoc($result))
                               {
                               ?> 

                                <td><?php echo $row['amount']; ?></td>
                                <td><?php echo $row['member_id']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['payment_id']; ?></td>
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