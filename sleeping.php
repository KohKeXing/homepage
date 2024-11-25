<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importance of Kitchen Stove - Feng Shui Insights</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/homepage.css" rel="stylesheet">
    <link href="css/workplace2.css" rel="stylesheet">
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
                url('image/bedoroom2.png') center/cover no-repeat;
            height: 50vh; /* Changed to a percentage for responsiveness */
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
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: slideDown 1.5s ease-in-out;
        }

        /* Content Section */
        .content-section {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            padding: 4rem 2rem;
            margin: 4rem 0;
        }

        .content-section .image-container {
            margin-right: 2rem; /* Space between image and text */
        }

        .content-section img {
            width: 100%; /* Adjusts image size to the container */
            max-width: 450px; /* Sets the maximum width */
            height: auto; /* Maintains aspect ratio */
        }

        .content-section .text-content {
            max-width: 60%; /* Adjust this to fit the text content nicely */
            text-align: left;
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        }

        .content-section .text-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #2c3e50;
        }

        .content-section .text-content p {
            font-size: 1.2rem;
            line-height: 1.7;
            margin-bottom: 1.5rem;
            color: #34495e;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            justify-content: center;
            align-items: center;
        }

        ul li {
            background-color: #ecf0f1;
            border-radius: 10px;
            padding: 1.5rem;
            width: 80%;
            max-width: 600px;
            text-align: left;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        ul li:hover {
            transform: translateY(-5px);
            background-color: #bdc3c7;
        }
        
        .card-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 2rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content-section {
                flex-direction: column;
                align-items: center;
            }

            .content-section .text-content {
                max-width: 100%;
                padding: 1.5rem;
            }

            .content-section .image-container img {
                max-width: 100%;
                height: auto;
            }
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

        @keyframes zoomIn {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <?php include './Header.php'; ?>
    
    <!-- Hero Section -->
    <header class="hero-banner">
        <div class="hero-content">
            <h1>The Importance of Bedroom & Sleeping Direction</h1>
        </div>
    </header>
    
    <div class="card-container">
        <div class="card">
            <div class="icon-box">
                <i class="fas fa-bed"></i>
                <h2>Why Feng Shui Bedroom is Important?</h2>
            </div>
            <p>A Feng Shui bedroom should be <strong>peaceful, relaxing, and balanced.</strong> You may also notice you'll sleep better if objects are organized in a certain way. Having a good Feng Shui for your bedroom can lead to better health, luck, and success. </p>
            <div class="highlight-box">
                <strong>Key Observation:</strong> The right placement and energy flow can enhance your health and well-being.
            </div>
        </div>
    </div>
    
    <section class="content-section">
        <div class="image-container">
            <img src="image/sleep.png" alt="sleep" />
        </div>
        <div class="text-content">
            <h2>Position Your Bed Correctly</h2>
            <p>Follow these simple steps:</p>
            <ul>
                <li>
                    <i class="fas fa-compass"></i>
                    Step 1: Stand at the end of your bed facing the bedhead and take the reading from your compass.
                </li>
                <li>
                    <i class="fas fa-bed"></i>
                    Step 2: Sleep with your head pointing to any of the four good directions in your Life Gua.
                </li>
            </ul>
            <div class="highlight-box">
                <strong>Key Insight:</strong> Correct bed positioning is key to better health, luck, and success.
            </div>
        </div>
    </section>

    <?php include './footer.php'; ?>

    <script>
        // Scroll Effect for Sections
        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll("section");

            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("slide-in-visible");
                            observer.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.3 }
            );

            sections.forEach(section => {
                observer.observe(section);
            });
        });

        // Responsive grid adjustment
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.trend-card');

            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-10px) scale(1.05)';
                });

                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0) scale(1)';
                });
            });

            function adjustGrid() {
                const grid = document.querySelector('.trends-grid');
                if (window.innerWidth >= 768) {
                    grid.style.gridTemplateColumns = 'repeat(5, 1fr)';
                } else if (window.innerWidth >= 480) {
                    grid.style.gridTemplateColumns = 'repeat(2, 1fr)';
                } else {
                    grid.style.gridTemplateColumns = '1fr';
                }
            }

            adjustGrid();
            window.addEventListener('resize', adjustGrid);
        });
    </script>

    <script src="js/workplace.js"></script>
</body>
</html>
