<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
<form action="register_process.php" method="post">
    <div class="form-container">
        <h1>Registration Form</h1>
    <div class="form-group">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"  required>
    </div>
    <button type="submit">Register</button>
</form>

    </div>
</body>
</html>
