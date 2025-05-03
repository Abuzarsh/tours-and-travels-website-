
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            color: #fff;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background: rgba(0, 0, 0, 0.9);
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .logo {
            font-size: 26px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
        }

        .logo span {
            color: #ff8c00;
        }

        .navbar {
            display: flex;
            gap: 25px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .navbar a:hover {
            color: #ff8c00;
        }

        .icons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .fa-user {
            font-size: 22px;
            cursor: pointer;
        }

        /* dropdown menu*/
        .dropdown {
    position: relative;
}

.dropdown-menu {
    display: none;
    position: absolute;
    background: rgba(0, 0, 0, 0.9);
    border-radius: 5px;
    padding: 10px;
    top: 30px;
    left: 0;
    z-index: 999;
}

.dropdown-menu a {
    display: block;
    padding: 8px 12px;
    color: white;
    text-decoration: none;
    font-size: 16px;
}

.dropdown-menu a:hover {
    background: #ff8c00;
}

.dropdown:hover .dropdown-menu {
    display: block;
}


        /* Search Bar */
        .search-bar-container {
            position: relative;
        }

        #searchBar {
            width: 250px;
            padding: 8px 15px;
            font-size: 16px;
            border: 2px solid #ff8c00;
            border-radius: 20px;
            outline: none;
            transition: 0.3s;
            background: #fff;
            color: #000;
        }

        #searchBar::placeholder {
            color: #888;
        }

        /* User Info */
        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-link {
            font-size: 16px;
            color: #fff;
            text-decoration: none;
        }

        .logout-btn {
            color: #ff8c00;
            font-size: 18px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .logout-btn:hover {
            color: red;
        }

    
    .search-results-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 10px;
    background: #fff; /* White background for better visibility */
    padding: 10px;
    border-radius: 5px;
    position: absolute;
    width: 450px; /* Match search bar width */
    max-height: 300px;
    overflow-y: auto;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.search-result-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px;
    background: #e07b00;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}



.search-result-item img {
    width: 40px;
    height: 40px;
    border-radius: 5px;
    object-fit: cover;
}
#searchResults {
    list-style: none;
    padding: 0;
    margin: 0;
    position: absolute;
    background-color: #222; /* Match background */
    width: 100%;
    max-width: 465px; /* Same as the search bar */
    border-radius: 5px;
    overflow: hidden;
    
}

#searchResults li {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px;
    background-color:  #e07b00 !important; /* Keeps the orange background */
    color: black !important; /* Ensures text appears black */
    font-weight: bold;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: 0.3s;
}


#searchResults img {
    width: 40px;
    height: 40px;
    border-radius: 5px;
    object-fit: cover;
}
#searchResults li span {
    color: black !important; /* Ensures fetched text is black */
}

@media screen and (max-width: 768px) {
    header {
        padding: 10px 20px;
    }

    .navbar {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.9);
        padding: 10px 0;
        text-align: center;
    }

    .navbar a {
        padding: 10px;
        display: block;
    }

    .navbar.active {
        display: flex;
    }

    #menu-bar {
        display: block;
    }

    /* Adjust Search Bar */
    .search-bar-container {
        width: 100%;
        max-width: 250px;
    }

    #searchBar {
        width: 100%;
    }
    @media screen and (max-width: 768px) {
    .dropdown-menu {
        position: static; /* Prevents it from going outside the screen */
        width: 100%;
        text-align: center;
    }
}
}
</style>
</head>
<body>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}// Start the session to access session variables
?>
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="index.php#home" class="logo"><span>BACK</span>Packers</a>
    <!-- NavBar -->
    <nav class="navbar">
        <a href="index.php#home">Home</a>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle" id="packages-link">Packages</a>
            <div class="dropdown-menu">
                <a href="honeymoon.php">Summer</a>
                <a href="adventure.php">Adventure</a>
                <a href="luxury.php">Luxury</a>
                <a href="family.php">Family</a>  
            </div>
        </div>
        <a href="index.php#services">Services</a>
        <a href="index.php#gallery">Gallery</a>
        <a href="index.php#review">Review</a>
        <a href="index.php#contact">Contact</a>
    </nav>
    <div class="icons">
    <form action="" class="search-bar-container">
    <input type="search" id="searchBar" placeholder="Search..." onkeyup="filterPackages()" autocomplete="off">
    <div id="searchResults" class="search-results-grid"></div>
    </form>

        <?php
        // Check if the user is logged in
        if (isset($_SESSION['username'])) {
            echo '<div class="user-info">
                    <span class="navbar-link">'. htmlspecialchars($_SESSION['username']) . '</span>
                    <a href="reg_log/logout.php" class="logout-btn"><i class="fa-solid fa-right-from-bracket"></i></a>
                  </div>';
        } else {
            echo '<i class="fas fa-user" id="login-btn"></i>';
        }
        ?>
    
    </div>
</header>
<div class="login-form-container">
        <i class="fa fa-window-close" id="form-close" aria-hidden="true"></i>
        <form action="Reg_log/login_process.php" method="POST">
            <h3>Login</h3>
            <input type="email" name="login_email" class="box" placeholder="Enter your email" required>
            <input type="password" name="login_password" class="box" placeholder="Enter your password" required>
            <input type="submit" value="Login Now" class="btn">
            <p>Forgot password? <a href="Reg_log/reset_password.php">Click here</a></p>
            <p>Don't have an account? <a href="Reg_log/register.php">Register now</a></p>
        </form>
    </div>
    <script>
let packages = [];

// Fetch packages.json to load all package data
fetch("packages.json?v=" + new Date().getTime()) // Prevents caching
    .then(response => response.json())
    .then(data => {
        packages = data;
        console.log("Loaded Packages:", packages); // Debugging check
    })
    .catch(error => console.error("Error loading packages:", error));

window.filterPackages = function() {  
    let input = document.getElementById("searchBar").value.toLowerCase();
    let resultsContainer = document.getElementById("searchResults");
    resultsContainer.innerHTML = ""; // Clear previous results

    if (input.length < 2) return;

    let filtered = packages.filter(pkg => pkg.name.toLowerCase().includes(input));

    if (filtered.length === 0) {
        resultsContainer.innerHTML = "<p>No results found</p>";
        return;
    }
    
    filtered.forEach(pkg => {
        let item = document.createElement("div");
        item.classList.add("search-result-item");
        item.innerHTML = `
            <img src="${pkg.image}" alt="${pkg.name}">
            <p>${pkg.name}</p>
        `;
        item.onclick = () => {
            window.location.href = `${pkg.page}#${pkg.id}`;
        };
        resultsContainer.appendChild(item);
    });
};
document.getElementById("menu-bar").addEventListener("click", function () {
    document.querySelector(".navbar").classList.toggle("active");
});

</script>

    <script src="script.js" defer></script>
 
</body>
</html>