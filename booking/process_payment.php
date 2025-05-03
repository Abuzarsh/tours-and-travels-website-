<?php
include 'db_connect.php';  // Include database connection
session_start(); // Ensure this is at the top
$_SESSION['payment_method'] = $_POST['payment_method'] ?? 'Unknown';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookingId = $_POST["booking_id"];
    $cardNumber = $_POST["card_number"];
    $expiryDate = $_POST["expiry_date"];
    $cvv = $_POST["cvv"];

    // Simple fake validation
    if (strlen($cardNumber) == 16 && strlen($cvv) == 3) {
        // Generate a fake confirmation number
        $confirmationNumber = "CONF" . rand(10000, 99999);

        // Update booking with confirmation number
        $sql = "UPDATE bookings SET confirmation_number='$confirmationNumber' WHERE booking_id='$bookingId'";

        if ($conn->query($sql) === TRUE) {
            // Redirect to success page
            header("Location: payment_success.php?confirmation=$confirmationNumber");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "<h3 style='color:red;'>Invalid payment details. Try again.</h3>";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
