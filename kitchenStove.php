<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feng Shui Kitchen Insights</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>importance of Kitchen Stove</title>
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
                url('image/stove.png') center/cover no-repeat;
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
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <?php include'./Header.php' ?>
    <!-- Hero Section -->
    <header class="hero-banner">
        <div class="hero-content">
            <h1>The Importance of the Kitchen Stove in Feng Shui</h1>
          
        </div>
    </header>
    
     <div class="card-container">
            <div class="card">
                <div class="icon-box">
                    <i class="fas fa-bed"></i>
                    <h2>Why Kitchen Stove is Important?</h2>
                </div>
                <p>The kitchen stove is important in Feng Shui because 
                    Feng Shui energy interacts with Fire, which can be used to<strong> suppress negative Qi </strong>. It is a highly active area where we snack and prepare food and drinks.
                </p><br>
                <p>The stove is <strong>symbolic of your resources and prosperity</strong> in Feng Shui. If we can cook and nourish our bodies well, we can also show up in the world with our best foot forward. 
                </p><br>
                <p>The Feng Shui of the kitchen is crucial for a <strong>balanced home</strong>. An improperly placed stove can cause health issues by influencing the quality of food, and negative energy from the kitchen can affect other areas based on your Life Gua number and house Feng Shui chart.</p>
                <div class="highlight-box">
                    <strong>Key Observation:</strong>
                    Stove placed in improper places can cause health problems because bad Qi can influence the quality of the food.
                </div>
            </div>
  
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
                {
                    threshold: 0.3,
                }
            );

            sections.forEach(section => {
                observer.observe(section);
            });
        });
        
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

    // Responsive grid adjustment
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

    // Initial call and event listener for window resize
    adjustGrid();
    window.addEventListener('resize', adjustGrid);
});
    </script>
     <script src="js/workplace.js"></script>
</body>
</html>
