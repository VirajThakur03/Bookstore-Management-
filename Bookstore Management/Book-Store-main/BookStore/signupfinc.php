<?php
    session_start();
    include("conn.php");

    if (isset($_POST['register'])) {
        
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $mobile = $_POST['Mobileno'];

        $result = mysqli_query($conn,"INSERT INTO logins VALUES('','$name','$email','$username','$password','$mobile')");
       

        if($result){
            header('location:index.php');
        }
        
    }
?>