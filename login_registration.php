<?php
// Include the config.php file
require_once 'config.php';

// Handle login form submission
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform a MySQL query to retrieve user with matching credentials
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful!";
        header("Location: contact_details.php");
        // Redirect to a success page or perform other actions
    } else {
        echo "Invalid credentials. Please try again.";
    }
}

// Close the database connection
$conn->close();
?>
