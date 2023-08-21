<?php

$conn=mysqli_connect("localhost","root","","gym_management") or die("connection failed!");



if(!empty($_POST['save'])){

            $username=$_POST['admin'];
            $password=$_POST['passcode'];
            $query="select * from administrator where name='$username' AND passcode='$password'";
            $result=mysqli_query($conn,$query);
            $count=mysqli_num_rows($result);
            if($count>0)    {
                header('location:adminDisplay.php');
            }else{
                
                header('location:verifyAdmin.html');
                echo "login not successful ❌";
            }
}
else {
    echo "All field are required";
    die();
}


?>