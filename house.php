<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Future Workforces</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <script src="path/to/navigationbar.js" defer></script>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
          
            --text-color: #34495e;
            --card-bg: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
         
            color: var(--text-color);
            line-height: 1.6;
           
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        .banner {
            background: linear-gradient(135deg, #16a085, #166534);
            color: white;
            text-align: center;
            padding: 6rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
            opacity: 0.1;
            z-index: 0;
        }

        .banner-content {
            position: relative;
            z-index: 1;
        }

        .banner h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .banner p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .text-and-diagram {
            display: flex;
            gap: 2rem;
            align-items: flex-start;
            margin: 2rem 0;
        }

        .text-section {
            flex: 1;
            text-align: center;
        }

        .text-section h2 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        .venn-diagram {
            flex: 0 0 300px;
            position: sticky;
            top: 2rem;
        }

        .quotation {
            font-style: italic;
            color: var(--text-color);
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            position: relative;
            padding: 2rem;
            background-color: rgba(255,255,255,0.8);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .quotation::before,
        .quotation::after {
            content: '"';
            font-size: 4rem;
            color: var(--accent-color);
            position: absolute;
            opacity: 0.2;
        }

        .quotation::before {
            top: -10px;
            left: 10px;
        }

        .quotation::after {
            bottom: -30px;
            right: 10px;
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 3rem;
           
        }

        .card {
            background: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
             margin-left:20px;
            margin-right:20px;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .card-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 2rem;
        }

        .card h2 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .card p {
            flex-grow: 1;
        }

        .learn-more {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 1.5rem;
            align-self: flex-start;
            text-decoration:none;
        }

        .learn-more:hover {
            background-color: var(--accent-color);
            transform: scale(1.05);
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .modal-content {
            background-color: var(--card-bg);
            margin: 10% auto;
            padding: 2rem;
            border-radius: 15px;
            width: 90%;
            max-width: 600px;
            position: relative;
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
            animation: modalFadeIn 0.3s ease-out;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .close {
            position: absolute;
            right: 1.5rem;
            top: 1rem;
            font-size: 2rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close:hover {
            color: var(--accent-color);
        }

        @media (max-width: 1024px) {
            .text-and-diagram {
                flex-direction: column;
            }

            .venn-diagram {
                flex: 0 0 auto;
                width: 100%;
                max-width: 300px;
                margin: 2rem auto;
                position: static;
            }
        }

        @media (max-width: 768px) {
            .banner h1 {
                font-size: 2.5rem;
            }
            .content-grid {
                grid-template-columns: 1fr;
            }
            .quotation {
                font-size: 1rem;
                padding: 1.5rem;
            }
        }
        
         /* Hero Section */
        .hero-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('image/house2.png') center/cover no-repeat;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 1; /* Ensures text is above the overlay */
            animation: fadeIn 1.5s ease-out;
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: white; /* Ensures text color is white */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);  /* Adds a shadow to enhance visibility */
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1.2rem;
            }
        }
        
        .help-title {
            font-size: 2rem;
            color: #166534;
            text-align: center;
            margin-bottom: 3rem;
        }

        

    </style>
</head>
<body>
    <?php include'./Header.php' ?>
    
    <!-- Hero Section -->
        <header class="hero-banner">
            <div class="hero-content">
                <h1 style="text-decoration:none;">Important of House</h1>
            </div>
        </header>

    <br><br>
    
    <h2 style='text-align:center;'>3 More Essential Areas of House</h2>
    <section class="content-grid">
        <article class="card" id="feng-shui">
            <img src="image/frondoor1.jpg" alt="Main Entrance" class="card-image">
            <div class="card-content">
                <h2>Main Door - 门</h2>
                <p style="margin-bottom:80px;">
                 The main door signifies the Qi mouth of the house, so you need to ensure that there is no obstacles or blockage that prevent the Qi from flowing the house.
                </p>
                <a href="door.php" class="learn-more">Learn More</a>
            </div>
        </article>
        
        <article class="card" id="workspace">
            <img src="image/bedroom1.png" alt="Space Assessment" class="card-image">
            <div class="card-content">
                <h2>Bedroom - 主</h2>
                <p style="margin-bottom:120px;">
                    Is a place that we spent one third of our lives in, and it is a space for us to relax and rejuvenate.
                </p>
                <a href="bedroom.php" class="learn-more">Learn More</a>
            </div>
        </article>
        
        <article class="card" id="desk">
            <img src="image/kitchen1.png" alt="Desk Placement" class="card-image">
            <div class="card-content">
                <h2>Kitchen - 灶</h2>
                <p style="margin-bottom:120px;">Specifically referring to the stove is a representation of our source of food from out hobs and business</p>
                <a href="kitchen.php" class="learn-more">Learn More</a>
            </div>
        </article>
    </section>
    <br><br>

    <?php include'./footer.php' ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Remove modal-related code

        // Scroll animation functions
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function animateOnScroll() {
            document.querySelectorAll('.card').forEach(card => {
                if (isInViewport(card)) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        }

        // Initialize scroll animations
        window.addEventListener('scroll', animateOnScroll);
        animateOnScroll(); // Initial check
    });
    </script>

</html>