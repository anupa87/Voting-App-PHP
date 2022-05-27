<?php 
    $query = "SELECT * FROM `user-data`";
    $result = mysqli_query($con, $query); 
    if(!$result) {
        die('Query insertion failed');      
    }
    
if (isset($_POST['login'])) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idNumber = $_POST['idNumber'];
    $password = $_POST['password'];
    $user_status = $_POST['user_status'];

    // print_r(mysqli_fetch_assoc($result));

    while($row = mysqli_fetch_assoc($result)) {
        if ($idNumber === $row['idNumber'] && $password === $row['password'] && $user_status === $row['user_status']) {
            header('Location: dashboard.php');
            exit;
        } 
    }  
    }}    
    ?>