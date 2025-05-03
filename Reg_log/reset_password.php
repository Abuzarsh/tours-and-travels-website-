<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        h2 {
            color: #ff9800;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            font-weight: bold;
            color: #444;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ff9800;
            border-radius: 5px;
            outline: none;
            background: #fff;
        }

        input:focus {
            border-color: #ff5722;
        }

        button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            color: white;
            background: #ff9800;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        button:hover {
            background: #ff5722;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Reset Password</h2>
    <form action="update_password.php" method="POST">
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label for="old_password">Old Password</label>
            <input type="password" id="old_password" name="old_password" placeholder="Enter old password" required>
        </div>

        <div class="form-group">
            <label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required>
        </div>

        <button type="submit">Reset Password</button>
    </form>
</div>

</body>
</html>
