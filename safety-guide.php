<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safety Guide Services</title>
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
        <h1>Safety Guide Services</h1>
        <p>Stay safe while traveling with expert tips and guidance.</p>
    </div>
    <div class="container">
        <div class="section">
            <h2><i class="fas fa-user-shield icon"></i> Personal Safety</h2>
            <p>Learn how to stay aware of your surroundings and avoid common travel risks.</p>
        </div>
        <div class="section">
            <h2><i class="fas fa-map-marked-alt icon"></i> Safe Destinations</h2>
            <p>Get insights on the safest places to visit and tips for navigating unfamiliar areas.</p>
        </div>
        <div class="section">
            <h2><i class="fas fa-hand-holding-medical icon"></i> Health & Well-being</h2>
            <p>Understand essential health precautions, vaccinations, and emergency contacts.</p>
            <div class="grid">
                <div class="card">
                    <h3>Emergency Preparedness</h3>
                    <p>Know how to handle unexpected situations efficiently.</p>
                </div>
                <div class="card">
                    <h3>Local Laws & Regulations</h3>
                    <p>Stay informed about important legal guidelines in different countries.</p>
                </div>
                <div class="card">
                    <h3>Scam Awareness</h3>
                    <p>Identify and avoid common travel scams and frauds.</p>
                </div>
            </div>
        </div>
        <div class="section">
            <h2><i class="fas fa-phone-alt icon"></i> Emergency Contacts</h2>
            <p>Access essential phone numbers for assistance in any destination.</p>
        </div>
    </div>
</body>
</html>