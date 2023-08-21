<?php
$name=$_POST['cf-name'];
$email=$_POST['cf-email'];
$message=$_POST['cf-message'];
if (!empty($name)||!empty($email)||!empty($message)) {
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="gym_management";

    //create connection
    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else {
        $SELECT="SELECT email From user_enquiry Where email=? Limit 1";
        $INSERT="INSERT Into user_enquiry (name, email, message) values('$name','$email','$message')";

        //prepare statement
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt=mysqli_query($conn,$INSERT);
            echo "New record inserted successfully ✅";
        } else{
            echo "Someone already used this email ❌";
        }
    
        $conn->close();
    }
} else {
    echo "All field are required";
    die();
}
?>