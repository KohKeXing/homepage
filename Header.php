<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Sidebar Toggle</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            height: 90px;
            background-color: #282d32;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            color: #0aa5ff;
            font-size: 24px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .navbar .logo a {
            color: white;
            text-decoration: none;
        }

        .menu {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .menu-links {
            display: flex;
            gap: 24px;
            border-right: 1px solid #999999;
            padding-inline: 24px;
        }

        .menu-links a {
            font-weight: 500;
            color: #999999;
            text-decoration: none;
        }

        .menu-links a:hover {
            color: white;
        }

        /* New styles for Classic FengShui dropdown */
        .menu-links .dropdown {
            position: relative;
            display: inline-block;
        }

        .menu-links .dropbtn {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #999999;
            text-decoration: none;
            cursor: pointer;
        }

        .menu-links .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #282d32;
            min-width: 200px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .menu-links .dropdown-content a {
            color: #999999;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .menu-links .dropdown-content a:hover {
            background-color: #333;
            color: white;
            border-radius: 8px;
        }

        .menu-links .dropdown:hover .dropdown-content {
            display: block;
        }

        .menu-links .dropdown:hover .dropbtn {
            color: white;
        }

        /* Language dropdown styles */
        .language {
            font-weight: 500;
            padding: 12px 22px;
            color: #999999;
            background-color: transparent;
            border-radius: 10px;
            border: 2px solid #0aa5ff;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: background-color 0.2s, color 0.2s;
        }

        .language:hover {
            background-color: #0aa5ff;
            color: white;
        }

        .language-dropdown .dropdown-content {
            display: none;
            position: absolute;
            background-color: #1a1a1a;
            min-width: 160px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .language-dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: #999999;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #333;
            color: white;
        }

        .menu-btn {
            font-size: 32px;
            color: white;
            display: none;
            cursor: pointer;
        }

        /* Responsive design for screens smaller than 768px */
        @media (max-width: 768px) {
            .menu {
                display: none;
                width: 100%;
            }
            
            .menu-btn {
                display: block;
            }

            .menu.show {
                display: block;
                position: absolute;
                top: 90px;
                left: 0;
                width: 100%;
                background-color: #282d32;
                padding: 20px 0;
                text-align: center;
            }

            .menu-links {
                display: block;
                gap: 16px;
                padding: 0;
            }

            .menu-links a {
                font-size: 18px;
                padding: 10px 20px;
            }

            .language {
                width: 100%;
                padding: 12px 20px;
            }
        }

        /* Responsive design for screens smaller than 468px (mobile-specific) */
        @media (max-width: 468px) {
            .navbar {
                padding: 10px 20px;
            }

            .navbar .logo {
                font-size: 20px;
            }

            .menu-links a {
                font-size: 14px;
            }

            .language {
                padding: 10px 18px;
            }

            .menu-btn {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <i class="fa-solid fa-font-awesome"></i>
            <a href="#">LOGO</a>
        </div>

        <div class="menu">
            <div class="menu-links">
                <a href="homepage.php">Home</a>
                <a href="aboutus.php">About Us</a>
                <div class="dropdown">
                    <a href="#" class="dropbtn">Classic FengShui <i class="fa-solid fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="school3.php">School</a>
                        <a href="trinityluck.php">Trinity Luck</a>
                        <a href="elements.php">5 Elements Feng Shui</a>
                    </div>
                </div>
                
                <div class="dropdown">
                    <a href="#" class="dropbtn">Future World In AI <i class="fa-solid fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="workplace.php">Future Workplace</a>
                        <a href="workforce.php">Future Workforce</a>
                        <a href="house.php">Importance Factor of House</a>
                    </div>
                </div>
            
            </div>
            <div class="dropdown language-dropdown">
                <button class="language">
                    <span>Language</span> <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#" data-lang="en">English</a>
                    <a href="#" data-lang="zh">Chinese</a>
                </div>
            </div>
        </div>
        <div class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>

    <script>
        const menuButton = document.querySelector('.menu-btn');
        const menu = document.querySelector('.menu');

        menuButton.addEventListener('click', () => {
            menu.classList.toggle('show');
        });
    </script>
</body>
</html>
