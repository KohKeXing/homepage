<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Shopping Banner</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .hero-section {
            position: relative;
            height: 600px;
            width: 100%;
            overflow: hidden;
        }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('image/background2.jpg');
            background-size: cover;
            background-position: center;
            filter: brightness(0.8);
        }

        .hero-content {
            position: relative;
            height: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 300;
            margin-bottom: 1.5rem;
            max-width: 600px;
            animation: fadeInUp 1s ease-out;
        }

        .hero-description {
            font-size: 1.25rem;
            max-width: 600px;
            margin-bottom: 2rem;
            line-height: 1.6;
            animation: fadeInUp 1s ease-out 0.2s backwards;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            font-size: 1.125rem;
            background-color: #0070ba;
            color: white;
            text-decoration: none;
            border-radius: 24px;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
            animation: fadeInUp 1s ease-out 0.4s backwards;
        }

        .cta-button:hover {
            background-color: #005ea6;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-description {
                font-size: 1.125rem;
            }

            .hero-content {
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .cta-button {
                padding: 0.875rem 1.75rem;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <section class="hero-section">
        <div class="hero-background"></div>
        <div class="hero-content">
            <h1 class="hero-title">Less Stress,More Success</h1>
            <p class="hero-description">
                "Feng Shui can grow your business by
                creating happier employees<br>
                And drawing in more clients,
                thus,generating more wealth."
            </p>
        </div>
    </section>


        
</body>
</html>