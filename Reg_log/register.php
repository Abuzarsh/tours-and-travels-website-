<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Global Styling */
/* Google Font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: url('https://static.vecteezy.com/system/resources/thumbnails/025/871/495/small_2x/travel-destination-background-and-template-design-with-travel-destinations-and-famous-landmarks-and-attractions-for-tourism-let-s-go-travel-illustration-vector.jpg') no-repeat center center/cover;
    min-height: 100vh;  /* Allows scrolling if needed */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    overflow-y: auto;
}

/* Form Container */
.form-container {
    background: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    width: 400px;
    text-align: center;
    max-height: 90vh;  /* Prevents cutoff */
    overflow-y: auto;  /* Enables scrolling */
}

/* Heading */
.form-container h1 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

/* Form Group */
.form-group {
    margin-bottom: 15px;
    text-align: left;
}

.form-group label {
    display: block;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-group input, 
.form-group select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

/* Button */
button {
    background: #ff5e00;
    color: white;
    border: none;
    padding: 12px;
    width: 100%;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #e04d00;
}
html, body {
    overflow-y: auto;
}


/* Responsive */
@media (max-width: 480px) {
    .form-container {
        width: 90%;
    }
}



    </style>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Tours & Travels</title>
</head>
<body>
    <div class="form-container">
        <h1>Register for Exclusive Travel Deals</h1>
        <form action="register_process.php" method="post">
            
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="John Doe" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="johndoe@example.com" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="+91 9876543210" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>

            <div class="form-group">
                <label for="country">Country:</label>
                <select id="country" name="country" required>
                    <option value="">Select Country</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="Canada">Canada</option>
                    <option value="Australia">Australia</option>
                </select>
            </div>

            <div class="form-group">
                <label for="destination">Preferred Destination:</label>
                <input type="text" id="destination" name="destination" placeholder="e.g., Maldives, Switzerland, Dubai">
            </div>

            <div class="form-group">
                <label for="travel_interest">Travel Interests:</label>
                <select id="travel_interest" name="travel_interest">
                    <option value="">Select Interest</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Luxury Travel">Luxury Travel</option>
                    <option value="Honeymoon">Honeymoon</option>
                    <option value="Family Vacation">Family Vacation</option>
                    <option value="Solo Travel">Solo Travel</option>
                </select>
            </div>

            <button type="submit">Register Now</button>

            <p>Already have an account? <a href="../index.php">Login here</a></p>
        </form>
    </div>

</body>
</html>

</body>
</html>