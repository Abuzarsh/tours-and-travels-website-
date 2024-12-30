<?php
// Database 
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
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']); 

    // Check if email already exists
    $checkEmailSql = "SELECT email FROM reg WHERE email = '$email'";
    $result = $conn->query($checkEmailSql);

    if ($result->num_rows > 0) {
        // Email already exists
        echo "<script>
                alert('Email already exists');
                location.href = 'register.php'; // Change to your registration page URL
              </script>";
    } else {
        // Hash the password before storing
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert data into the database
        $sql = "INSERT INTO reg (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            // Display alert and redirect to main page
            echo "<script>
                    alert('Registration successful');
                    location.href = 'index.php'; // Change to your main page URL
                  </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
