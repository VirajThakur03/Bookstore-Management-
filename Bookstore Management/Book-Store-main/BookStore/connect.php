<?php
$firstName = $_POS['firstName'];
$lastName = $_POS['lastName'];
$gender = $_POS['gender'];
$email = $_POS['email'];
$password = $_POS['password'];
$number = $_POS['number'];

$conn = new mysqli('localhost','root','','shop_dbs');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into shop(firstname,lastname,gender,email,password,number)values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi",$firstname,$lastname,$gender,$email,$password,$number );
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}
?>