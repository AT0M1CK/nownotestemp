<?php
require_once('db_connection.php');
session_start();

$con = new mysqli($servername, $username, $pass, $dbName);

if($con->connect_error){
    die($con->connect_error);
    echo 'Database connection error!';
}
else{
    $name = $_POST['user'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM tbl_register WHERE user_email = '$name' AND user_password = '$pass'";
    $result = mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);

    if($count >= 1){
        while($row = $result->fetch_assoc()){
            $_SESSION['name'] = $row["user_email"];
            // $_SESSION['loginStatus'] = "1";
        }
        echo "USER  FOUND";
       
        header("location: index.php");
         //$data= mysqli_fetch_array($result);
         //$_SESSION['name'] = $data["user_email"];
        // header("location: home.php");
    }
    else{
        var_dump(http_response_code(401));
       // echo "USER NOT FOUND";
    }

    // if($result->num_rows == 1){
        // while($row = $result->fetch_assoc()){
        //     $_SESSION['name'] = $row["user_email"];
        // }
    //     header("location: home.php");
    // }
    // else{
    //     echo 'User not found';

    // }
}

?>