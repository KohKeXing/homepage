<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feng Shui Kitchen Insights</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importance of Kitchen Stove</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/homepage.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <script src="path/to/navigationbar.js" defer></script>

    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
             font-family: 'Poppins', sans-serif;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        /* Hero Section */
        .hero-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('image/frondoor1.jpg') center/cover no-repeat;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            overflow: hidden;
        }

        .hero-content {
            animation: fadeIn 1.5s ease-out;
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            margin-bottom: 1rem;
            animation: slideDown 1.5s ease-in-out;
        }

        /* Animations */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes slideDown {
            0% {
                transform: translateY(-30px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Main Content Section */
        .main-container {
            display: flex;
            justify-content: space-between;
            align-items: stretch; /* Ensures both containers stretch equally */
            width: 80%;
            max-width: 1200px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            background-color: #ffffff;
            padding: 30px;
            margin: 20px auto;
            gap: 20px;
        }

        .arrow-container, .control-container {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 15px;
            height: 100%; /* Ensure both containers take equal height */
        }

        .arrow-container {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 10px;
            position: relative;
        }

        .control-container {
            width: 40%;
            background-color: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-left: 10px;
        }

        .door-image {
            width: 100%;
            height: 350px; /* Adjust this height as necessary */
            object-fit: contain;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .door-image:hover {
            transform: scale(1.05);
        }

        /* Arrow */
        .arrow {
            position: absolute;
            top: 60%; /* Ensure it's vertically centered */
            left: 50%;
            transform-origin: center;
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-top: 10px solid transparent;
            border-bottom: 15px solid red;
            transform: translate(-50%, -50%) rotate(0deg); /* Default arrow direction is 0° */
            transition: transform 0.5s ease-out; /* Smooth rotation */
        }

        h2 {
            text-align: center;
            font-size: 26px;
            color: #333;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }

        input[type="range"] {
            width: 100%;
            margin: 20px 0;
            height: 12px;
            border-radius: 6px;
            background: #ddd;
            transition: background 0.3s ease-in-out;
        }

        input[type="range"]:hover {
            background: #6db1ff;
        }

        .degree-display {
            font-size: 32px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #444;
            letter-spacing: 0.5px;
        }

        .card {
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .card ol {
            padding-left: 20px;
            color: #555;
            font-size: 16px;
        }

        .reminder {
            background-color: #fff4c0;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: left;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .reminder i {
            font-size: 30px;
            color: #ff6f61;
            margin-right: 15px;
            transition: transform 0.3s ease;
        }

        .reminder p {
            font-size: 16px;
            color: #555;
            margin: 0;
        }

        .reminder:hover {
            background-color: #ffe680;
            cursor: pointer;
        }

        .reminder:hover i {
            transform: scale(1.2);
        }

        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }

            .arrow-container,
            .control-container {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <?php include'./Header.php' ?>
    <!-- Hero Section -->
    <header class="hero-banner">
        <div class="hero-content">
            <h1>Door Direction Insights</h1>
        </div>
    </header>
    
    <!-- Main Content Section -->
    <div class="main-container">
        <div class="arrow-container">
            <img src="image/mainEntrance2.png" alt="Door Image" class="door-image">
            <div class="arrow" id="arrow"></div>
            <!-- Reminder Section -->
            <div class="reminder">
                <i class="fas fa-lightbulb"></i>
                <p>Pro Tip: Ensure you're standing away from large metal objects for the most accurate reading!</p>
            </div>
        </div>
        <div class="control-container">
            <h2>Set Door Direction</h2>
            <input type="range" id="angle-slider" min="0" max="360" value="113">
            <div class="degree-display" id="degree-display">113°</div>
            <div class="card">
                <h3>How to measure:</h3>
                <ol>
                    <li>Stand behind the door facing out</li>
                    <li>Use a compass app on your phone</li>
                    <li>Align the arrow with the door's outward direction</li>
                    <li>Read and set the angle using the slider above</li>
                </ol>
            </div>
        </div>
    </div>

    <script>
        const angleSlider = document.getElementById('angle-slider');
        const degreeDisplay = document.getElementById('degree-display');
        const arrow = document.getElementById('arrow');
        
        // Set the default angle to 113° and adjust arrow direction to 0°
        angleSlider.value = 113;
        degreeDisplay.textContent = angleSlider.value + '°';
        arrow.style.transform = `translate(-50%, -50%) rotate(0deg)`; // Arrow at 0° initially

        // Update the angle display and rotate the arrow based on the slider value
        angleSlider.addEventListener('input', function() {
            degreeDisplay.textContent = angleSlider.value + '°';
            // Rotate the arrow based on the slider, but keep it visually fixed at 0°
        });
    </script>
    <?php include'./Footer.php' ?>
</body>
</html>
