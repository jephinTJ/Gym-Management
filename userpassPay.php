<?php

$conn=mysqli_connect("localhost","root","","gym_management") or die("connection failed!");



if(!empty($_POST['save'])){

            $username=$_POST['user'];
            $password=$_POST['id'];
            $query="select * from member where name='$username' AND member_id='$password'";
            $result=mysqli_query($conn,$query);
            $count=mysqli_num_rows($result);
            if($count>0)    {
                header('location:PaymentDisplay.php');
            }else{
                
                header('location:verifyPay.html');
                echo "login not successful ❌";
            }
}
else {
    echo "All field are required";
    die();
}


?>