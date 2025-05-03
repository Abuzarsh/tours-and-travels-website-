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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff3e0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 450px;
            text-align: center;
        }
        h2 {
            color: #e65100;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #333;
            margin: 8px 0;
        }
        strong {
            color: #ff9800;
        }
        .success-icon {
            font-size: 50px;
            color: #ff9800;
        }
        .back-button, .download-button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #ff9800;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }
        .back-button:hover, .download-button:hover {
            background: #e65100;
        }
        .details {
            text-align: left;
            margin-top: 15px;
            padding: 10px;
            border-top: 2px solid #ff9800;
        }
        @media print {
            .download-button, .back-button {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="container" id="receipt">
    <div class="success-icon">✅</div>
    <h2>Payment Successful!</h2>
    <p>Your booking has been confirmed.</p>

    <?php if ($booking): ?>
        <div class="details">
            <p><strong>Package Name:</strong> <?php echo htmlspecialchars($booking['package_name']); ?></p>
            <p><strong>Package Price:</strong> <?php echo htmlspecialchars($booking['package_price']); ?></p>
            <p><strong>Payment Method:</strong> <?php echo htmlspecialchars($paymentMethod); ?></p>
            <p><strong>Booking ID:</strong> <?php echo htmlspecialchars($booking['booking_id']); ?></p>
            <p><strong>Confirmation Number:</strong> <?php echo htmlspecialchars($confirmationNumber); ?></p>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($booking['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($booking['email']); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($booking['phone']); ?></p>
            <p><strong>Adults:</strong> <?php echo htmlspecialchars($booking['adults']); ?></p>
            <p><strong>Children:</strong> <?php echo htmlspecialchars($booking['children']); ?></p>
        </div>
    <?php else: ?>
        <p>Booking details not found.</p>
    <?php endif; ?>

    <a href="download_reciept.php?confirmation=<?php echo $confirmationNumber; ?>" class="download-button">Download Receipt 📄</a>
    <a href="../index.php" class="back-button">Go Back</a>
</div>

</body>
</html>
