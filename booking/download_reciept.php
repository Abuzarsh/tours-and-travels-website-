<?php
session_start();
include 'db_connect.php';  // Include database connection

$confirmationNumber = $_GET['confirmation'] ?? 'Unknown';
$paymentMethod = $_SESSION['payment_method'] ?? 'Unknown';

// Fetch booking details
$sql = "SELECT * FROM bookings WHERE confirmation_number = '$confirmationNumber'";
$result = $conn->query($sql);
$booking = $result->fetch_assoc();
$conn->close();

if ($booking) {
    $receiptContent = "Payment Successful!\n";
    $receiptContent .= "-----------------------------------\n";
    $receiptContent .= "Package Name: " . $booking['package_name'] . "\n";
    $receiptContent .= "Package Price: " . $booking['package_price'] . "\n";
    $receiptContent .= "Payment Method: " . $paymentMethod . "\n";
    $receiptContent .= "Booking ID: " . $booking['booking_id'] . "\n";
    $receiptContent .= "Confirmation Number: " . $confirmationNumber . "\n";
    $receiptContent .= "Name: " . $booking['name'] . "\n";
    $receiptContent .= "Email: " . $booking['email'] . "\n";
    $receiptContent .= "Phone: " . $booking['phone'] . "\n";
    $receiptContent .= "Adults: " . $booking['adults'] . "\n";
    $receiptContent .= "Children: " . $booking['children'] . "\n";
    $receiptContent .= "-----------------------------------\n";
    $receiptContent .= "Thank you for booking with us!";

    // Set headers for file download
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="Payment_Receipt_' . $confirmationNumber . '.txt"');

    echo $receiptContent;
    exit;
} else {
    echo "Booking details not found.";
}
?>
