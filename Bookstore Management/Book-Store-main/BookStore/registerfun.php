<?php
    session_start();
    include("conn.php");

    if (isset($_POST['register'])) {
        
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO user (name, password, email, mobile, address) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $password, $email, $mobile, $address);

        // Execute the statement
        $stmt->execute();

        // Check if the insertion was successful
        if ($stmt->affected_rows > 0) {
            header('location:login.php');
        } else {
            // Handle insertion failure
            echo "Error: " . $conn->error;
        }

        // Close statement
        $stmt->close();
    }
?>
