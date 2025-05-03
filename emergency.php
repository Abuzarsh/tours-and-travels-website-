<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Assistance Services</title>
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
        <h1>Emergency Assistance Services</h1>
        <p>Get the help you need, anytime, anywhere.</p>
    </div>
    <div class="container">
        <div class="section">
            <h2><i class="fas fa-ambulance icon"></i> Medical Assistance</h2>
            <p>Access emergency medical care, hospitals, and first aid services quickly.</p>
        </div>
        <div class="section">
            <h2><i class="fas fa-phone-alt icon"></i> 24/7 Helpline</h2>
            <p>Reach out for immediate support during crises, including lost documents and travel disruptions.</p>
        </div>
        <div class="section">
            <h2><i class="fas fa-shield-alt icon"></i> Safety & Security</h2>
            <p>Get guidance on staying safe while traveling, and contact local authorities when needed.</p>
            <div class="grid">
                <div class="card">
                    <h3>Emergency Contacts</h3>
                    <p>Find local police, embassy, and medical contacts.</p>
                </div>
                <div class="card">
                    <h3>Lost & Found Assistance</h3>
                    <p>Report lost belongings and seek recovery options.</p>
                </div>
                <div class="card">
                    <h3>Travel Insurance Support</h3>
                    <p>Learn how to claim emergency expenses efficiently.</p>
                </div>
            </div>
        </div>
        <div class="section">
            <h2><i class="fas fa-hands-helping icon"></i> Community Support</h2>
            <p>Connect with fellow travelers and local support groups during emergencies.</p>
        </div>
    </div>
</body>
</html>