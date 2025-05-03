<?php
include 'db_connection.php'; // Include database connection file
$conn = getDatabaseConnection(); // Get database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Secure input data using trim & mysqli_real_escape_string
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));
    $country = mysqli_real_escape_string($conn, trim($_POST['country']));
    $destination = mysqli_real_escape_string($conn, trim($_POST['destination']));
    $travel_interest = mysqli_real_escape_string($conn, trim($_POST['travel_interest']));

    // Password Hashing for Security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if Email Already Exists
    $email_check_query = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
    $result = $conn->query($email_check_query);

    if ($result && $result->num_rows > 0) {
        echo "<script>
        alert('Email already registered. Please use a different email.');
        location.href = '../register.php'; // Redirect to registration page
        </script>";
    } else {
        // Insert user into database
        $sql = "INSERT INTO user (name, email, phone, password, country, destination, travel_interest) 
                VALUES ('$name', '$email', '$phone', '$hashed_password', '$country', '$destination', '$travel_interest')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
            alert('Registration successful! Welcome to Tours & Travels.');
            location.href = '../index.php'; // Redirect to login page
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>
