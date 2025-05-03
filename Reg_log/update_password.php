<?php
include 'db_connection.php';
$conn = getDatabaseConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $old_password = trim($_POST['old_password']);
    $new_password = password_hash(trim($_POST['new_password']), PASSWORD_DEFAULT);

    // Check if email exists
    $query = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify old password
        if (password_verify($old_password, $user['password'])) {
            // Update new password
            $update_query = "UPDATE user SET password='$new_password' WHERE email='$email'";
            if ($conn->query($update_query)) {
                echo "<script>
                alert('Password updated successfully');
                location.href = '../index.php'; // Redirect to home
                </script>";
            } else {
                echo "Error updating password: " . $conn->error;
            }
        } else {
            echo "<script>
            alert('Old password is incorrect');
            location.href = 'reset_password.php';
            </script>";
        }
    } else {
        echo "<script>
        alert('Email not found');
        location.href = 'reset_password.php';
        </script>";
    }
}
$conn->close();
?>
