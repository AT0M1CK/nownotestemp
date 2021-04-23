<?php

require_once('db_connection.php');
session_start();
// header('location:login.php');

// $con = mysqli_connect('localhost','root','');

//$email = $_POST['email'];

$con = new mysqli($servername, $username, $pass, $dbName);

if($con->connect_error){
    die($con->connect_error);
    echo 'Database connection error!';
}
else{
    $userRegName = $_POST['userRegName'];
    $userRegPass = $_POST['userRegPass'];

    $sql = "INSERT INTO tbl_register(user_email, user_password)VALUES('$userRegName','$userRegPass')";

    if(mysqli_query($con, $sql)){
        echo "Registeration success.";
        ?>
        <a href="index.html">Now login</a>
        <?php
    }
    else{
        echo "Registeration failed.";
        echo $sql;
    }
}

?>