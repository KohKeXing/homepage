<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us - Feng Shui Consultancy</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="css/aboutus.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
        <script src="path/to/navigationbar.js" defer></script>
    </head>
    <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                 font-family: 'Poppins', sans-serif;
            }

            body {
                font-family: 'Poppins', sans-serif;
                background-color: #ffffff;
                color: #333;
                line-height: 1.6;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 4rem 2rem;
            }

            .header {
                text-align: center;
                margin-bottom: 3rem;
            }

            .header h1 {
                font-size: 2.5rem;
                color: #2c3e50;
                margin-bottom: 1rem;
                position: relative;
                display: inline-block;
            }

            .header h1::after {
                content: '';
                position: absolute;
                bottom: -10px;
                left: 50%;
                transform: translateX(-50%);
                width: 60px;
                height: 3px;
                background: linear-gradient(90deg, #3498db, #2ecc71);
            }

            .services-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 2rem;
            }

            .service-card {
                background: #fff;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
                position: relative;
            }

            .service-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            }

            .service-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 5px;
                background: linear-gradient(90deg, #3498db, #2ecc71);
            }

            .icon-wrapper {
                width: 80px;
                height: 80px;
                margin: 2rem auto;
                display: flex;
                align-items: center;
                justify-content: center;
                background: linear-gradient(135deg, #3498db, #2ecc71);
                border-radius: 50%;
                box-shadow: 0 5px 15px rgba(46, 204, 113, 0.3);
            }

            .icon-wrapper i {
                font-size: 2rem;
                color: #555; /* Changed color to dark gray */
            }

            .service-content {
                padding: 0 2rem 2rem;
                text-align: center;
            }

            .service-title {
                font-size: 1.5rem;
                color: #2c3e50;
                margin-bottom: 1rem;
                font-weight: 600;
            }

            .service-list {
                list-style: none;
                text-align: left;
                margin-top: 1.5rem;
            }

            .service-list li {
                margin-bottom: 0.5rem;
                padding-left: 1.5rem;
                position: relative;
                color: #7f8c8d;
                font-size: 0.9rem;
            }

            .service-list li::before {
                content: '•';
                position: absolute;
                left: 0;
                color: #2ecc71;
                font-weight: bold;
            }

            @media (max-width: 968px) {
                .services-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (max-width: 768px) {
                .container {
                    padding: 2rem 1rem;
                }

                .header h1 {
                    font-size: 2rem;
                }

                .services-grid {
                    grid-template-columns: 1fr;
                }
            }

        /* Hero Section */
        .hero-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('image/aboutus.jpg') center/cover no-repeat;
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
        
        .container2 {
            max-width: 1000px;
            margin: 0 auto;
            padding: 15px;
        }
        
                .container5 {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            height: 300px; /* You can adjust the height as needed */
            border: 2px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
        }

        .text-content {
            flex: 1;
            padding: 20px;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: left;
        }

        .image-content {
            flex: 1;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-content img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .text-content p {
            font-size: 1rem;
            color: #333;
            line-height: 1.6;
        }
        
   .success-rate-section {
    text-align: center;
    background-color: transparent; /* Ensures there is no background color */
}
.container2 {
    max-width: 800px;
    margin: 0 auto;
}



.stats-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
    margin-bottom: 2rem;
    justify-items: center;
}

.stat-card {
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.stat-label {
    margin-top: 1rem;
    font-size: 1rem;
    color: #333;
}

@media (max-width: 768px) {
    .stats-container {
        grid-template-columns: 1fr;
    }

    .stat-card {
        margin-bottom: 2rem;
    }

    .header h1 {
        font-size: 1.5rem;
    }
}

        .contact-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            width: 100%;
            max-width: 1200px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px; /* Reduced padding for smaller height */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);  /* Soft shadow */
        }

        .left-side {
            width: 50%;
            padding: 30px; /* Reduced padding */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left-side h1 {
            font-size: 2rem; /* Reduced font size */
            color: #2d3436;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .left-side p {
            font-size: 1rem; /* Reduced font size */
            color: #666;
            margin-bottom: 15px;
        }

        .left-side img {
            width: 100%;
            border-radius: 10px;
            margin-top: 15px; /* Reduced margin */
        }

        .right-side {
            width: 50%;
            padding: 30px; /* Reduced padding */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-container {
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px; /* Reduced margin */
        }

        label {
            display: block;
            font-size: 1rem;
            color: #555;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px; /* Reduced padding */
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
        }

        textarea {
            height: 130px; /* Reduced height */
        }

        .submit-btn {
            width: 100%;
            padding: 12px; /* Reduced padding */
            font-size: 1.1rem; /* Reduced font size */
            color: white;
            background-color: #166534;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color:black;
            color:white;
        }

       

        
    </style>
    <body>
        <?php include './Header.php'; ?>

        <!-- Hero Section -->
        <header class="hero-banner">
            <div class="hero-content">
                <h1 style="text-decoration:none;">About Us</h1>
            </div>
        </header>

        <div class="container">
            <header class="header">
                <h1>Our Professional Services</h1>
            </header>

            <div class="services-grid">
                <div class="service-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Residential</h3>
                        <ul class="service-list">
                            <li>Land Selection</li>
                            <li>Pre-Purchase (Selection of a new home)</li>
                            <li>Pre-Construction Assessment</li>
                            <li>Existing House</li>
                            <li>Renovating a Home</li>
                            <li>Annual Residential Assessment</li>
                        </ul>
                    </div>
                </div>

                <div class="service-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Commercial</h3>
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
                </div>

                <div class="service-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-city"></i>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Property Developer</h3>
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
        </div>
        
      
        <section class="success-rate-section">
    <div class="container2">
        <div class="header">
            <h1 style='margin-bottom:50px;'>Why Choose Us?</h1>
        </div>
      </div>
               <div class="container5" style='margin-left:20px;margin-right:20px;'>
        <div class="text-content">
            <p><strong>97%</strong> of our clients received positive results in their personal life and career. For instance, from personal aspects, many of them manage to achieve personal growth while improving their health condition and relationships with their family, friends and spouse. For our ambitious clients whom are aspired to upgrade their career path or grow their own business, taking it to a greater height, they have managed to excel exponentially in terms of sales and business profits by engaging our Feng Shui consultation services. </p>
        </div>

        <div class="image-content">
            <img src="image/yeah.png" width="450" height="450" alt="yeah"/>
        </div>
    </div>
            <br>
      
       
    <div class="stats-container">
        <div class="stat-card">
            
            <img src="image/sucess.png" width="252" height="198" alt="sucess"/>
            <div class="stat-label"><strong>Client Satisfaction Rate</strong></div>
        </div>
        <div class="stat-card">
            <img src="image/1000.png" width="252" height="198" alt="1000"/>

            <div class="stat-label"><strong>Successful Consultations</stong></div>
        </div>
        <div class="stat-card">
            <img src="image/experience2.png" width="252" height="198" alt="experience"/>

            <div class="stat-label"><strong>Years of Experience</strong></div>
        </div>
          </div>  
</section>
        
        
       <div class="contact-container">
        <div class="left-side">
            <h1>Contact Us! <br>To Start Your Better Life</h1>
            <p>If you're looking for ways to improve both your personal and work life, you're in the right place.</p>
            <!-- Add your image here -->
            <img src="image/contact.png" alt="Success Image">
        </div>

        <div class="right-side">
            <div class="form-container">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="firstName">First Name*</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Your First Name" required>
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last Name*</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Your Last Name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>

                    <div class="form-group">
                        <label for="message">How can we help you?</label>
                        <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>


        
    
         
        

    

        <?php include './footer.php'; ?>
    </body>
</html>