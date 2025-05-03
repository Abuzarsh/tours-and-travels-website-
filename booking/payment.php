<?php
session_start(); // Start session if using session variables

// Check if values are passed via SESSION, GET, or POST
$bookingId = $_SESSION['booking_id'] ?? $_GET['booking_id'] ?? $_POST['booking_id'] ?? null;
$name = $_SESSION['name'] ?? $_GET['name'] ?? $_POST['name'] ?? null;
$email = $_SESSION['email'] ?? $_GET['email'] ?? $_POST['email'] ?? null;

// Handle errors to prevent "Undefined variable" warnings
if (!$bookingId || !$name || !$email) {
    die("<h2 style='color:red;'>Error: Missing booking details. Please try again.</h2>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
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
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        h2 {
            color: #e65100;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background: #ff9800;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
        }
        button:hover {
            background: #e65100;
        }
        .hidden {
            display: none;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-top: -5px;
        }
    </style>
    <script>
        function togglePaymentFields() {
    let method = document.getElementById("payment_method").value;
    document.getElementById("selected_payment_method").value = method; // Update hidden field

    let cardFields = document.getElementById("card_fields");
    let upiField = document.getElementById("upi_field");
    let upiInput = document.getElementById("upi_id");

    cardFields.classList.toggle("hidden", method !== "card");
    upiField.classList.toggle("hidden", method !== "upi");

    if (method === "upi") {
        upiInput.setAttribute("required", "true");
    } else {
        upiInput.removeAttribute("required");
    }
}
        function validateUPI() {
            let upiInput = document.getElementById("upi_id");
            let upiError = document.getElementById("upi_error");
            let upiPattern = /^[a-zA-Z0-9.\-_]{2,256}@[a-zA-Z]{2,64}$/;

            if (!upiPattern.test(upiInput.value)) {
                upiError.textContent = "Invalid UPI ID format (e.g., example@upi)";
                return false;
            } else {
                upiError.textContent = "";
                return true;
            }
        }

        function validateForm(event) {
            let paymentMethod = document.getElementById("payment_method").value;
            if (paymentMethod === "upi" && !validateUPI()) {
                event.preventDefault();
                return;
            }

            let confirmPayment = confirm("Do you want to proceed with the payment?");
            if (confirmPayment) {
                window.location.href = "payment_success.php";
            } else {
                event.preventDefault();
            }
        }
    </script>
</head>
<body>

<div class="container">
    <h2>Payment for Booking: <?php echo $bookingId; ?></h2>
    <p>Name: <?php echo htmlspecialchars($name); ?></p>
    <p>Email: <?php echo htmlspecialchars($email); ?></p>

    <form action="process_payment.php" method="POST" onsubmit="validateForm(event)">
        <input type="hidden" name="booking_id" value="<?php echo $bookingId; ?>">
        <input type="hidden" name="selected_payment_method" id="selected_payment_method">

        <label for="payment_method">Select Payment Method:</label>
        <select id="payment_method" name="payment_method" onchange="togglePaymentFields()">
            <option value="card">Credit/Debit Card</option>
            <option value="upi">UPI</option>
        </select>
        
        <!-- Card Payment Fields -->
        <div id="card_fields">
            <input type="text" name="card_number" placeholder="Card Number (16 digits)" required minlength="16" maxlength="16">
            <input type="text" name="expiry_date" placeholder="Expiry Date (MM/YY)" required>
            <input type="text" name="cvv" placeholder="CVV (3 digits)" required minlength="3" maxlength="3">
        </div>

        <!-- UPI Payment Field -->
        <div id="upi_field" class="hidden">
            <input type="text" name="upi_id" id="upi_id" placeholder="Enter UPI ID" oninput="validateUPI()">
            <span id="upi_error" class="error"></span>
        </div>

        <button type="submit">Pay Now</button>
    </form>
</div>

</body>
</html>
