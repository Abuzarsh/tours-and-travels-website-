<?php
include 'db_connect.php';  // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $package_name = $_POST["package_name"];//Capture package price
    $package_price = $_POST["package_price"]; //Capture package price
    $payment_method = $_POST['payment_method'] ?? 'Unknown';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $adults = $_POST["adults"];
    $children = $_POST["children"];
    $guests = $_POST["guests"];
    $duration =$_POST["duration"];
    
    // Generate a fake booking ID
    $bookingId = "BOOK" . rand(1000, 9999);
    // Generate a unique confirmation number
$confirmation_number = uniqid('CONF-'); 


    // Insert booking into database (without confirmation number yet)
    $sql = "INSERT INTO bookings (package_name, package_price,payment_method, name, email, phone, adults, children, guests, duration, booking_id, confirmation_number) 
    VALUES ('$package_name', '$package_price','$payment_method', '$name', '$email', '$phone', '$adults', '$children', '$guests', '$duration', '$bookingId', '$confirmation_number')";


    if ($conn->query($sql) === TRUE) {
        // Redirect to payment page with booking details
        header("Location: payment.php?booking_id=$bookingId&name=$name&email=$email");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>