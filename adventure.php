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
    Adventure Packages
    </h1>
    <div class="package-grid">
        <div class="package-card" id="rishikesh-river">
            <img src="https://static2.tripoto.com/media/filter/tst/img/1215002/TripDocument/1595435936_8_1595095394_screenshot_109.png" alt="Adventure">
            <div class="package-content">
                <h3>Rishikesh River Rafting & Camping</h3>
                <p> Experience white-water rafting in the Ganges, along with cliff jumping and camping by the river.</p>
                <div class="package-footer">
                    <span class="price">₹9,000</span>
                    <button class="book-now" onclick="checkLogin(event, 'Rishikesh River Rafting & Camping')">Book Now</button>
                </div>
            </div>
        </div>
        <div class="package-card" id="jim-corbett">
            <img src="https://www.shutterstock.com/image-photo/jim-corbett-national-park-uttarakhand-600nw-2426844295.jpg" alt="Adventure">
            <div class="package-content">
                <h3>Jim Corbett Wildlife Safari, Uttarakhand</h3>
                <p>Explore the oldest national park in India and spot tigers, elephants, and other wildlife.</p>
                <div class="package-footer">
                    <span class="price">₹8,000</span>
                    <button class="book-now" onclick="checkLogin(event, 'Jim Corbett Wildlife Safari, Uttarakhand')">Book Now</button>

                </div>
            </div>
        </div>
        <div class="package-card" id="Paragliding">
            <img src="https://www.tourmyindia.com/blog//wp-content/uploads/2017/11/Best-time-to-visit-Bir-Biling.jpg" alt="Adventure">
            <div class="package-content">
                <h3>Paragliding in Bir Billing, Himachal Pradesh </h3>
                <p>Soar over the picturesque landscapes of Himachal, known as the paragliding capital of IndiaParagliding in Bir Billing, Himachal Pradesh .</p>
                <div class="package-footer">
                    <span class="price">₹11,000</span>
                    <button class="book-now" onclick="checkLogin(event, 'Paragliding in Bir Billing, Himachal Pradesh ')">Book Now</button>

                </div>
            </div>
        </div>
        <div class="package-card" id="Ladhak">
            <img src="https://discoverlehladakh.in/wp-content/uploads/2025/01/Chadar-Trek-on-Zanskar-river-in-Leh-Ladakh.jpg" alt="Adventure">
            <div class="package-content">
                <h3>Chadar Trek, Ladakh</h3>
                <p>A frozen river trek on the Zanskar River, offering breathtaking winter landscapes.</p>
                <div class="package-footer">
                    <span class="price">₹7,500</span>
                    <button class="book-now" onclick="checkLogin(event, 'Chadar Trek, Ladakh')">Book Now</button>

                </div>
            </div>
        </div>
        <div class="package-card" id="scuba-diving">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6sftSq70cUevTZVjYAHub67l8K5shK8g-9A&s" alt="Adventure">
            <div class="package-content">
                <h3>Scuba Diving & Snorkeling in Goa </h3>
                <p>Discover underwater wonders at Grande Island, along with water sports like jet skiing and parasailing.</p>
                <div class="package-footer">
                    <span class="price">₹5,000</span>
                    <button class="book-now" onclick="checkLogin(event, 'Scuba Diving & Snorkeling in Goa')">Book Now</button>

                </div>
            </div>
        </div>
        <div class="package-card" id="Meghalya">
            <img src="https://oddessemania.in/wp-content/uploads/2024/07/Krem-Umthloo-Cave-1024x577.jpg" alt="Adventure">
            <div class="package-content">
                <h3>Caving and Rock Climbing in Meghalaya</h3>
                <p>Explore ancient limestone caves in Cherrapunji and climb rugged cliffs in the Northeast's adventure hub.</p>
                <div class="package-footer">
                    <span class="price">₹6,000</span>
                    <button class="book-now" onclick="checkLogin(event, 'Caving and Rock Climbing in Meghalaya')">Book Now</button>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pop-up form (only appears if logged in) -->
<div class="popup" id="popup">
    <div class="popup-content">
    <h3>Book Your Adventure</h3>
    <form action="booking/process_booking.php" method="POST" id="booking-form">
    <!-- Hidden Fields for Package Name and Package Price -->
    <input type="hidden" id="package_name" name="package_name" value="">
    <input type="hidden" id="package_price" name="package_price" value="">
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

    // Get the package card element
    let packageCard = event.target.closest(".package-card");
    
    // Fetch the price from the span and remove the ₹ symbol
    let packagePrice = packageCard.querySelector(".price").textContent.replace(/[^\d]/g, "");

    // Set values in the hidden input fields
    document.getElementById("package_name").value = packageName;
    document.getElementById("package_price").value = packagePrice;

    // Open the booking popup
    openPopup();
}

function openPopup() {
    document.getElementById("popup").classList.add("active"); // Show popup
}

function closePopup() {
    document.getElementById("popup").classList.remove("active"); // Hide popup
}

</script>

</body>
</html>
