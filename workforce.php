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
            --background-color: #ecf0f1;
            --text-color: #34495e;
            --card-bg: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
             font-family: 'Poppins', sans-serif;
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
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
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
                url('image/workforce3.jpg') center/cover no-repeat;
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
            color: black;
            text-align: center;
            margin-bottom: 3rem;
        }
        
         .container2 {
            max-width: 1000px;
            margin: 0 auto;
            padding: 15px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            animation: fadeInDown 1s ease-out;
        }

        .header h1 {
            font-size: 1.8em;
            color: #2c3e50;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .header p {
            color: #666;
            font-size: 1em;
            max-width: 500px;
            margin: 0 auto;
            line-height: 1.5;
        }

    </style>
</head>
<body>
    <?php include'./Header.php' ?>
    <!-- Hero Section -->
        <header class="hero-banner">
            <div class="hero-content">
                <h1 style="text-decoration:none;">The Future Workforce</h1>
            </div>
        </header>

    <main class="container">
        <div class="text-and-diagram">
            <section class="text-section">
                 <div class="container2">
        <div class="header">
            <h1 style="margin-top:30px;">Feng Shui for People-Centric, Creative, and Productive Workplaces</h1>
           
        </div>
      </div>
             
                <blockquote class="quotation">
                    The workplace is changing, becoming increasingly people-centric, so organisations competing for talent will need to be more supportive of their staff than ever before. Applying effective Classical Feng Shui in the new era is no longer the same, we must ensure that all employees in the company are considered. Employers need to start taking action now to adapt effectively to its evolution or they face significant financial repercussions.
                </blockquote>    
            </section>

            
            <div class="venn-diagram" style="margin-top:60px;">
    <svg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg' width="400" height="400">
        <circle cx='120' cy='200' r='120' fill='#293462' fill-opacity='0.8' />
        <circle cx='280' cy='200' r='120' fill='#69B7F0' fill-opacity='0.8' />
        <circle cx='200' cy='120' r='120' fill='#A259FF' fill-opacity='0.8' />
        <text x='50' y='200' fill='white' font-size='16' font-weight='bold'>Work</text>
        <text x='250' y='200' fill='white' font-size='16' font-weight='bold'>Workforce</text>
        <text x='150' y='80' fill='white' font-size='16' font-weight='bold'>Workplace</text>
        <text x='140' y='140' fill='white' font-size='15' font-weight='bold'>The future of work</text>
    </svg>
</div>
        </div>

        <h2 style='text-align:center;color:black;'>Key Aspects of Feng Shui for a People-Centric Workplace</h2>
        <section class="content-grid">
            <article class="card" id="feng-shui">
                <img src="image/mainEntrance2.png" alt="Main Entrance" class="card-image">
                <div class="card-content">
                    <h2 >Main Entrance</h2>
                    <p style="margin-bottom:20px;">The main entrance signifies the Qi mouth of the office, so you need to ensure that there is no obstacle or blockage that prevents the Qi from flowing into the office</p>
                    <button class="learn-more" data-section="feng-shui">Learn More</button>
                </div>
            </article>
            
            <article class="card" id="workspace">
                <img src="image/space1.png" alt="Space Assessment" class="card-image">
                <div class="card-content">
                    <h2 style="margin-bottom:20px;">Space Assessment</h2>
                    <p style="margin-bottom:70px;">Assessing the space based on the purpose or type of usage is one of the most important factors.</p>
                    <button class="learn-more" data-section="workspace">Learn More</button>
                </div>
            </article>
            
            <article class="card" id="desk">
                <img src="image/workplace3.png" alt="Desk Placement" class="card-image">
                <div class="card-content">
                    <h2>Placement of Desk</h2>
                    <p>Placing employee working desks in the best commanding position in their workplace and workspace."<br>
                    This positioning helps employee "see and feel who and what opportunities are approaching</p>
                    <button class="learn-more" data-section="desk">Learn More</button>
                </div>
            </article>
        </section>
    </main>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modal-title"></h2>
            <div id="modal-body"></div>
        </div>
    </div>
    <?php include'./footer.php' ?>
</body>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('modal');
        const modalTitle = document.getElementById('modal-title');
        const modalBody = document.getElementById('modal-body');
        const closeBtn = document.querySelector('.close');
        
        const content = {
            'feng-shui': {
                title: "Why Main Entrance Important?",
                body: `
                    <h3 style="text-decoration:underline;">Practical Tips:</h3>
                    <ul>
                        <li>• Ensure that there is no obstacle or blockage that prevents the Qi from flowing into the office</li>
                        <li>• Make sure the direction and location of the main door are in the good Qi sector based on Feng Shui calculation and time factor</li>
                    </ul>
                    <h3 style="text-decoration:underline;">Signs of Poor Entrance Feng Shui</h3>
                    <ul><li>• If the Qi is blocked,the space may experience stagnation,reduced opportunities, and an overall lack of vibrancy.</li></ul>
                    `
            },
            'workspace': {
                title: "Why Space Assessment Important?",
                body: `
                    <h3 style="text-decoration:underline;">Key Personnel Placement:</h3>
                    <ul>
                        <li>• Key personnel, like the CEO and teams in Finance and Sales, should be placed in high-Qi locations to attract energy, attention, and opportunities.</li>
                    </ul>
                    <h3 style="text-decoration:underline;">Areas for Negative Qi:</h3>
                    <ul>
                        <li>• Whereas storage,server room and washroom should be locked at the death Qi location</li>
                    </ul>
                    <h3 style="text-decoration:underline;">Practical Assessment Steps:</h3>
                    <ul>
                        <li>• Make sure to evaluate which parts of the office align with positive Qi and place important departments accordingly</li>
                    </ul>
                    `
            },
            'desk': {
                title: "Why Desk Placement Important?",
                body: `
                    <h3 style="text-decoration:underline;">Personalized Orientation:</h3>
                    <ul>
                        <li>• Each employee is calculated based on their individual date of birth to identify the best direction for their productivity and efficiency.</li>
                    </ul>
                    <h3 style="text-decoration:underline;">Avoiding Negative Locations:</h3>
                    <ul>
                        <li>• Avoid location at the death energy sector<br>(based on Feng Shui formula to identify).
                        <br>•These are indications of 'Sha Qi' energy(killing Qi) or life-draining Qi(exhausting Qi)</li> 
                    </ul>
                    <h3 style="text-decoration:underline;">Practical Tips:</h3>
                    <ul>
                        <li>• By placing desk in positive energy sectors,employees can maintain focus and productivity</li>
                    </ul>
                    `
            }
        };

        // Modal handlers
        document.querySelectorAll('.learn-more').forEach(button => {
            button.addEventListener('click', function() {
                const section = this.dataset.section;
                showModal(content[section].title, content[section].body);
            });
        });
        
        closeBtn.addEventListener('click', hideModal);
        window.addEventListener('click', function(event) {
            if (event.target === modal) {
                hideModal();
            }
        });

        function showModal(title, body) {
            modalTitle.innerHTML = title;
            modalBody.innerHTML = body;
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function hideModal() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

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