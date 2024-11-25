<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feng Shui Consulting Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/homepage.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <script src="path/to/navigationbar.js" defer></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding: 2rem;
            line-height: 1.6;
        }
/*
        * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            }

            body {
                min-height: 100vh;
                display: flex;
                flex-direction: column; 
            }*/

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 3rem;
        }

        h1 {
            font-size: 2.5rem;
            color: #2d3436;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: #e17055;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 1rem;
        }

        .service-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #e17055;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card h2 {
            color: #2d3436;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .service-list {
            list-style: none;
        }

        .service-list li {
            margin-bottom: 1rem;
            padding-left: 1.5rem;
            position: relative;
            color: #636e72;
            transition: color 0.3s ease;
        }

        .service-list li::before {
            content: "•";
            color: #e17055;
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        .service-list li:hover {
            color: #2d3436;
            transform: translateX(5px);
        }

        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            h1 {
                font-size: 2rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .service-card {
                padding: 1.5rem;
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.8s ease forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <?php 
    include'./Header.php'
    ?>
    <div class="container">
        <header class="fade-in">
            <h1>Professional Feng Shui Services</h1>
        </header>


        <div class="services-grid">
            <div class="service-card fade-in" style="animation-delay: 0.2s">
                <h2>Residential</h2>
                <ul class="service-list">
                    <li>Land Selection</li>
                    <li>Pre-Purchase (Selection of a new home)</li>
                    <li>Pre-Construction Assessment (Building a new home)</li>
                    <li>Existing House</li>
                    <li>Renovating a Home</li>
                    <li>Annual Residential Assessment</li>
                </ul>
            </div>

            <div class="service-card fade-in" style="animation-delay: 0.4s">
                <h2>Commercial</h2>
                <ul class="service-list">
                    <li>Retail Shops/ Shop Houses</li>
                    <li>Corporate Offices</li>
                    <li>Corporate Tower</li>
                    <li>Shopping Malls</li>
                    <li>Health and Educational Institutes</li>
                    <li>Restaurants & Cafes</li>
                    <li>Factories & Industrial Plants</li>
                    <li>Hotels</li>
                    <li>Annual Assessment</li>
                </ul>
            </div>

            <div class="service-card fade-in" style="animation-delay: 0.6s">
                <h2>Property Developer</h2>
                <ul class="service-list">
                    <li>Township Planning</li>
                    <li>Sales Gallery</li>
                    <li>Pre-Construction Planning</li>
                    <li>Panel Feng Shui Consultant</li>
                    <li>Post-Consultation Advisory Services</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Intersection Observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });

        // Observe all service cards
        document.querySelectorAll('.service-card').forEach(card => {
            observer.observe(card);
        });

        // Add hover effect to list items
        document.querySelectorAll('.service-list li').forEach(item => {
            item.addEventListener('mouseenter', () => {
                item.style.transform = 'translateX(10px)';
                item.style.transition = 'transform 0.3s ease';
            });

            item.addEventListener('mouseleave', () => {
                item.style.transform = 'translateX(0)';
            });
        });
    </script>
</body>
</html>