<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Packages</title>
    <link rel="stylesheet" href="styles.css">
    <style>
     @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap");

:root {
    --orange: #ffa500;
    --dark-orange: #e59400;
    --text-color: #555;
    --background-light: #fff;
}
body {
    background-image: url('https://www.felixferiatravel.com/images/17262142741685187089Andaman_Family_Tour_Packages_(1).webp');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Nunito', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

.container {
    max-width: 1200px;
    margin: 69px auto;
    padding: 20px;
}

.package-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.package-card {
    background: var(--background-light);
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    transition: transform 0.3s, box-shadow 0.3s;
}

.package-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}

.package-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.package-content {
    padding: 20px;
    text-align: center;
}
.package-content h3 {
    color: var(--orange);
    margin: 10px 0;
}
.package-content p {
    color: var(--text-color);
    margin: 10px 0;
}
.package-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    border-top: 1px solid #eee;
    background: #f8f8f8;
}

.price {
    font-size: 20px;
    font-weight: bold;
    color: var(--dark-orange);
}

.book-now {
    display: inline-block;
    padding: 10px 15px;
    background-color: var(--orange);
    color: #fff;
    border: none;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
}

.book-now:hover {
    background-color: var(--dark-orange);
}

.popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.popup.active {
    display: flex;
}

.popup-content {
    background: var(--background-light);
    padding: 20px;
    border-radius: 10px;
    width: 90%;
    max-width: 400px;
    text-align: center;
}

.popup-content h3 {
    margin-bottom: 20px;
}

.popup-content form input, 
.popup-content form button {
    width: 95%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.popup-content form button {
    background-color: var(--orange);
    color: #fff;
    border: none;
    font-weight: bold;
    cursor: pointer;
}

.popup-content form button:hover {
    background-color: var(--dark-orange);
}
    </style>
</head>
<body>
<?php 
    session_start(); 
    include 'header.php'; 
    $isLoggedIn = isset($_SESSION['username']) ? 'true' : 'false';
?>
<div class="container">
    <h1 style="background-color:cornsilk; padding: 10px 0; text-align: center; color: var(--orange); border-radius: 12px">
        Family Packages
    </h1>
    <div class="package-grid">
        <div class="package-card" >
            <img src="https://sushanttravels.com/blog/2024/02/1707737479.jpg" alt="Adventure">
            <div class="package-content">
                <h3>Golden Triangle Tour (Delhi - Agra - Jaipur)</h3>
                <p>Explore India’s rich history with visits to the Taj Mahal, Amber Fort, and India Gate, with cultural shows and fun rickshaw rides.</p>
                <div class="package-footer">
                    <span class="price">₹25,000</span>
                    <button class="book-now" onclick="checkLogin(event, 'Golden Triangle Tour')">Book Now</button>
                </div>
            </div>
        </div>
        <div class="package-card">
            <img src="https://sushanttravels.com/blog/2024/02/1707737479.jpg" alt="Adventure">
            <div class="package-content">
                <h3>Golden Triangle Tour (Delhi - Agra - Jaipur)</h3>
                <p>Explore India’s rich history with visits to the Taj Mahal, Amber Fort, and India Gate, with cultural shows and fun rickshaw rides.</p>
                <div class="package-footer">
                    <span class="price">₹25,000</span>
                    <button class="book-now" onclick="checkLogin(event, 'Golden Triangle Tour')">Book Now</button>

                </div>
            </div>
        </div>
        <div class="package-card">
            <img src="https://sushanttravels.com/blog/2024/02/1707737479.jpg" alt="Adventure">
            <div class="package-content">
                <h3>Golden Triangle Tour (Delhi - Agra - Jaipur)</h3>
                <p>Explore India’s rich history with visits to the Taj Mahal, Amber Fort, and India Gate, with cultural shows and fun rickshaw rides.</p>
                <div class="package-footer">
                    <span class="price">₹25,000</span>
                    <button class="book-now" onclick="checkLogin(event, 'Golden Triangle Tour')">Book Now</button>

                </div>
            </div>
        </div>
        <div class="package-card">
            <img src="https://sushanttravels.com/blog/2024/02/1707737479.jpg" alt="Adventure">
            <div class="package-content">
                <h3>Golden Triangle Tour (Delhi - Agra - Jaipur)</h3>
                <p>Explore India’s rich history with visits to the Taj Mahal, Amber Fort, and India Gate, with cultural shows and fun rickshaw rides.</p>
                <div class="package-footer">
                    <span class="price">₹25,000</span>
                    <button class="book-now" onclick="checkLogin(event, 'Golden Triangle Tour')">Book Now</button>

                </div>
            </div>
        </div>
        <div class="package-card">
            <img src="https://sushanttravels.com/blog/2024/02/1707737479.jpg" alt="Adventure">
            <div class="package-content">
                <h3>Golden Triangle Tour (Delhi - Agra - Jaipur)</h3>
                <p>Explore India’s rich history with visits to the Taj Mahal, Amber Fort, and India Gate, with cultural shows and fun rickshaw rides.</p>
                <div class="package-footer">
                    <span class="price">₹25,000</span>
                    <button class="book-now" onclick="checkLogin(event, 'Golden Triangle Tour')">Book Now</button>

                </div>
            </div>
        </div>
        <div class="package-card">
            <img src="https://sushanttravels.com/blog/2024/02/1707737479.jpg" alt="Adventure">
            <div class="package-content">
                <h3>Golden Triangle Tour (Delhi - Agra - Jaipur)</h3>
                <p>Explore India’s rich history with visits to the Taj Mahal, Amber Fort, and India Gate, with cultural shows and fun rickshaw rides.</p>
                <div class="package-footer">
                    <span class="price">₹25,000</span>
                    <button class="book-now" onclick="checkLogin(event, 'Golden Triangle Tour')">Book Now</button>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pop-up form (only appears if logged in) -->
<div class="popup" id="popup">
    <div class="popup-content">
    <h3>Book Your Adventure</h3>
<form action="booking/process_booking.php" method="POST" id="booking-form" >
      <!-- Hidden Field for Package Name -->
      <input type="hidden" id="package_name" name="package_name" value="">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="tel" name="phone" placeholder="Your Phone Number" required>
    <input type="number" name="adults" placeholder="Number of Adults" min="1" required>
    <input type="number" name="children" placeholder="Number of Children" min="0" required>
    <input type="number" name="guests" placeholder="Total Guests" min="1" required>
    <input type="number" name="duration" placeholder="Duration (in days)" min="1" required>
    <button type="submit">Submit</button>
    <button type="button" onclick="closePopup()">Close</button>
</form>
    </div>
</div>

<script>
     // Store login status in JavaScript
     var isLoggedIn = <?php echo $isLoggedIn; ?>;

function checkLogin(event, packageName) {
    event.preventDefault();
    if (!isLoggedIn) {
        alert("You must be logged in to book a package.");
        return;
    }
    openPopup(packageName);
}

function openPopup(packageName) {
    document.getElementById("package_name").value = packageName; // Set package name
    document.getElementById("popup").classList.add("active"); // Show popup
}

function closePopup() {
    document.getElementById("popup").classList.remove("active"); // Hide popup
}

</script>

</body>
</html>
