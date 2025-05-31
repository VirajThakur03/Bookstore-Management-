<?php
session_start();
include("conn.php");

if (isset($_POST['submit'])) {
    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mobile = $_POST['mobile'];
    $message = htmlspecialchars($_POST['message']);

    // Validation (you may add more validation as needed)
    if (empty($name) || empty($email) || empty($mobile) || empty($message)) {
        echo "All fields are required.";
        exit;
    }
    
    // Additional validation (example: validate email format)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }
    
    // Additional validation (example: validate mobile number format)
    // You can use regular expressions or other methods to validate the format

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO message (name, email, mobile, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $mobile, $message);

    // Execute the statement
    if ($stmt->execute()) {
        // Check if the insertion was successful
        if ($stmt->affected_rows > 0) {
            // Redirect to index.php with a success message
            $_SESSION['success_message'] = "Message submitted successfully!";
            header('Location: index.php');
            exit;
        } else {
            // Handle insertion failure
            echo "Error: Message not inserted.";
        }
    } else {
        // Handle execution failure
        echo "Error: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}
?>
