<?php
include('connect.php');

$idNumber = $_POST['idNumber'];
$password = $_POST['password'];
$user_status = $_POST['user_status'];

$query = "Select * from `user-data` where idNumber='$idNumber' and
password = '$password' and user-status = '$user_status'";

$result = mysqli_query($con, $query);
if(mysqli_num_rows($result)>0){
    $query = "Select idNumber,votes,id from `user-data` where usere_status ='candidate'";
    $resultcandidate = mysqli_query($con, $query);
    if(mysqli_num_rows($resultcandidate)>0){
        $candidate = mysqli_fetch_all($resultcandidate, MYSQLI_ASSOC);
        $_SESSION['candidate']=$candidate;
    }
    $data=mysqli_fetch_array($result);
    $_SESSION ['id']=$data['id'];
    $_SESSION ['voting_status']= $data['voting_status'];
    $_SESSION ['data']= $data;

echo '<script>
    window.location="../include/dashboard.php";
    </script';
    
}else{
    echo '<script>
    alert("Invalid credentials");
    window.location = "../include/login.php";
    </script>';
}

?>