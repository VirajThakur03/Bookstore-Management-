<?php
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = ($_POST['password']);
    //$email = $_POST['email'];
    
    if (empty($name) || empty($password)) { 
        echo json_encode(array("success" => false, "message"=>"name or Password is required"));
    } else{
        
        // Use prepared statement to prevent SQL injection
        $sql = "SELECT * FROM user WHERE name=? AND password=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $name, $password);
        $stmt->execute();
        $result = $stmt->get_result();
      
        if($result->num_rows == 1){
            header('Location: index.php');
            exit();
        } else {
            echo "Invalid user";
            exit();
        }
    }
}
?>
