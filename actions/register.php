<?php
include ('connect.php');

$fullname = $_POST['fullname'];
$mobile = $_POST['mobile'];
$idNumber = $_POST['idNumber'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$user_status = $_POST['user_status'];

if($password!= $cpassword){
    echo '<script>
    alert("Passwords do not match");
    window.location= "../";
    </script>';
} else {
    $query = "insert into `user-data`(fullname,mobile,idNumber,password,user_status,voting_status,votes)";
    $query .= "Values('$fullname','$mobile','$idNumber','$password','$user_status',0,0)";

    $result = mysqli_query($con, $query);

    if ($result) {
        echo'<script>
        alert("Registration successfful");
        window.location= "../include/login.php";
        </script>';
    }
}

?>