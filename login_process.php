<?php
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']); 

    // Query to check email and password
    $sql = "SELECT * FROM reg WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verify password (assuming password is stored hashed)
        if (password_verify($password, $row['password'])) {
            // Start session and set session variables
            $_SESSION['userid'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];

            // Redirect to main page
            echo "<script>
                    alert('Login successful');
                    location.href = 'index.php'; // Change to your main page URL
                  </script>";
        } else {
            // Invalid password
            echo "<script>
                    alert('Invalid password');
                    location.href = 'index.php'; // Change to your login page URL
                  </script>";
        }
    } else {
        // Email does not exist
        echo "<script>
                alert('Email does not exist');
                location.href = 'index.php'; // Change to your login page URL
              </script>";
    }
}

$conn->close();
?>
