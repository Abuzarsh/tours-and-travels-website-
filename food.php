<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food & Drinks for Backpackers</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #fff5e6;
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 50px;
            background: linear-gradient(to right, #ff9800, #ff5722);
            color: white;
        }
        .header h1 {
            font-size: 40px;
        }
        .section {
            background: #ffe0b2;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .section h2 {
            color: #e65100;
        }
        .icon {
            font-size: 40px;
            color: #e65100;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background: #ffcc80;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, background 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
            background: #ffb74d;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Food & Drinks for Backpackers</h1>
        <p>Explore local cuisine, street food, and budget-friendly dining options!</p>
    </div>
    <div class="container">
        <div class="section">
            <h2><i class="fas fa-utensils icon"></i> Local Cuisine</h2>
            <p>Discover must-try dishes from different destinations. Taste authentic flavors and enjoy traditional meals prepared by locals.</p>
        </div>
        <div class="section">
            <h2><i class="fas fa-dollar-sign icon"></i> Budget Dining</h2>
            <p>Find delicious yet affordable meals perfect for backpackers. Explore budget-friendly restaurants, local eateries, and food stalls.</p>
        </div>
        <div class="section">
            <h2><i class="fas fa-street-view icon"></i> Street Food</h2>
            <p>Experience the best street food from night markets and food carts. Try popular snacks and local specialties.</p>
            <div class="grid">
                <div class="card">
                    <h3>Asian Delights</h3>
                    <p>From Thai Pad Thai to Indian Samosas!</p>
                </div>
                <div class="card">
                    <h3>Latin American Treats</h3>
                    <p>Try tacos, empanadas, and more!</p>
                </div>
                <div class="card">
                    <h3>European Bites</h3>
                    <p>Pretzels, crêpes, and more street favorites!</p>
                </div>
            </div>
        </div>
        <div class="section">
            <h2><i class="fas fa-wine-glass icon"></i> Drinks & Nightlife</h2>
            <p>Relax and enjoy local drinks, from coffee to cocktails. Find the best spots for an evening out.</p>
        </div>
    </div>
</body>
</html>