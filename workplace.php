<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Workplace</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/workplace2.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
</head>
<style>
    
        /* Hero Section */
        .hero-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('image/workplace4.jpg') center/cover no-repeat;
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
        .quote-section {
    /* Remove the solid background color */
    background-color: transparent;
    /* Add background image */
    background-image: url('image/stone.png');
    /* Add additional background properties for better presentation */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    /* Keep other existing properties */
    color: white;
    padding: 4rem 2rem;
    margin: 4rem 0;
    text-align: center;
    /* Add a dark overlay to ensure text readability */
    position: relative;
}
</style>
<body>
    <?php include './Header.php'; ?>
      <!-- Hero Section -->
        <header class="hero-banner">
            <div class="hero-content">
                <h1 style="text-decoration:none;">The Future Workplace</h1>
            </div>
        </header>
    
    <main class="container">
        <section class="workplace-features">
            <div class="feature-card">
                <h3>Employee-Centric Approach</h3>
                <p>The future of the workplace is increasingly employee-centric, with hybrid working models putting staff firmly in the driving seat in terms of when and where they work.</p>
            </div>
            <div class="feature-card">
                <h3 style="margin-bottom:50px;">Technological Integration</h3>
                
                <p>Technology has transformed the way we meet, share knowledge, access training and plan tasks and projects. Workers are demanding more freedom and flexibility.</p>
            </div>
            <div class="feature-card">
                <h3>Organizational Adaptation</h3>
                <p>Organizations are looking again at many aspects of their working practices, providing flexibility and maximizing the benefits of new ways of working.</p>
            </div>
        </section>
        <br><br
        
        <div class="hero2">
            <h1>The New Remote Work Landscape</h1>
            <p>Exploring the evolution of workplace flexibility and emerging business trends in the modern era</p>
        </div>
        
        <div class="card-container">
            <div class="card">
                <div class="icon-box">
                    <i class="fas fa-sync-alt"></i>
                    <h2>Shifting Paradigm</h2>
                </div>
                <p>Remote work is also changing, much to the dismay of many employees who have adjusted to and favoured the remote lifestyle of the pandemic. </p>
                <div class="highlight-box">
                    <strong>Key Observation:</strong>
                    The trend is moving away from full-time remote work towards hybrid models that balance various organisational needs
                </div>
            </div>
            <div class="card">
                <div class="icon-box">
                    <i class="fas fa-chart-line"></i>
                    <h2>Current Trends</h2>
                </div>
                <ul class="trend-list">
                    <li><i class="fas fa-building"></i><strong> Hybrid Work Models:</strong>
                        <br>Flexible arrangements combining remote and in-office work
                        </li>
                        <li><i class="fas fa-heart"></i><strong> Employee Wellness:</strong>
                            <br>Greater emphasis on work-life balance
                            </li>
                            <li><i class="fas fa-graduation-cap"></i><strong> Continuous Learning:</strong>
                            <br>Ongoing education and development</li>
                </ul>
            </div>
        </div>
        
        <div class="card-container">
            <div class="card">
                <div class="icon-box">
                    <i class="fas fa-lightbulb"></i>
                    <h2>Benefits of Hybrid Work</h2>
                </div>
                <ul class="trend-list">
                    <li><i class="fas fa-users"></i><strong> Team Creativity:</strong>
                    In-person collaboration fosters innovation</li>
                    <li><i class="fas fa-laptop-house"></i><strong> Autonomous Working:</strong>
                    Remote work enables focused productivity</li>
                    <li><i class="fas fa-balance-scale"></i><strong> Work-Life Balance:</strong>
                    Flexible arrangements support personal needs</li>
                </ul>
            </div>
            
            <div class="card">
                <div class="icon-box">
                    <i class="fas fa-bullseye"></i>
                    <h2>Why Track Trends?</h2>
                </div>
                <div class="highlight-box">
                    <ul class="trend-list">
                        <li><i class="fas fa-forward"></i> Stay ahead of industry shifts</li>
                        <li><i class="fas fa-building"></i> Build progressive workplace</li>
                        <li><i class="fas fa-user-plus"></i> Attract and retain top talent</li>
                        <li><i class="fas fa-trophy"></i> Maintain competitive advantage</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <section class="quote-section">
            <blockquote>
                "Feng Shui can grow your business by creating happier employees<br>
                And drawing in more clients,<br>
                thus, generating more wealth."
            </blockquote>
        </section>
        
        <section class="workplace-container">
            <h2>The Four Trends of Future Workplace</h2>
            <div class="trends-grid">
                <div class="trend-card" data-trend="ageless">
                    <div class="trend-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="trend-title">Ageless</h3>
                    <p class="trend-description">A workplace which allows 'returnment', encouraging older workers to remain or return to the workplace instead of retiring, and sees workers energised to continue to work until a later age because they want to, rather than have to.</p>
                </div>
                <div class="trend-card" data-trend="mindful">
                    <div class="trend-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 class="trend-title">Mindful</h3>
                    <p class="trend-description">A workplace which nurtures mental health and encourages workers to recharge mentally and achieve balance in their busy hyper-connected, digital lifestyles.</p>
                </div>
                <div class="trend-card" data-trend="intuitive">
                    <div class="trend-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="trend-title">Intuitive</h3>
                    <p class="trend-description">A workplace that uses data and insight on its workers's environment, mood, wants and needs to create an all-encompassing, intelligent and intuitive environment.</p>
                </div>
                <div class="trend-card" data-trend="collaborative">
                    <div class="trend-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="trend-title">Collaborative</h3>
                    <p class="trend-description">A workplace that embraces the collapse of traditional structures to promote open and social exchange, operating a flat structure and embracing the impact of more women in the workplace.</p>
                </div>
            </div>
        </section>
             <script>
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
            grid.style.gridTemplateColumns = 'repeat(4, 1fr)';
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
            
            
    </main>
   
    <?php include './Footer.php'; ?>

    <script src="js/workplace.js"></script>
</body>
</html>