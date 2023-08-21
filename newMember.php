<?php
$name=$_POST['m-name'];
$phone=$_POST['m-phone'];
// $type=$_POST['m-type'];
$gender=$_POST['m-gender'];
$age=$_POST['m-age'];
$membershipid=$_POST['m-membershipid'];
$id=$_POST['m-id'];
// $class=$_POST['m-class'];
$date=$_POST['m-date'];
$city=$_POST['m-city'];
if (!empty($name)||!empty($phone)||!empty($gender)||!empty($age)||!empty($membershipid)||!empty($id)||!empty($class)||!empty($date)||!empty($city)) {
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="gym_management";

    //create connection
    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else {
        $SELECT="SELECT member_id From member Where member_id=? Limit 1";
        $INSERT="INSERT Into member (name, Age, Joining_date, membership_id, Gender, member_id, contact, address ) values('$name','$age','$date','$membershipid','$gender','$id','$phone','$city')";

        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt=mysqli_query($conn,$INSERT);
            echo "New record inserted successfully ✅";
        } else{
            echo "Someone already used this member ID ❌";
        }

        $conn->close();
    }
} else {
    echo "All field are required";
    die();
}
?>