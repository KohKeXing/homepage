<?php
$pageTitle = "Discover Door Direction";
$mainQuestion = "Did You Know How to Measure Door Direction?";
$buttonText = "Let's Get Started";
$nextPage = "DirectionDoor.php"; // Link to the next page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
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
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.container {
    background: white;
    border-radius: 30px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.1);
    overflow: hidden;
    width: 90%;
    max-width: 850px;
    display: flex;
    position: relative;
    height: 500px;
}

.thinking-person {
    flex: 1;
    min-height: 600px;
    position: relative;
    background: linear-gradient(45deg, #FFD700, #FFA500);
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.thinking-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.content {
    flex: 1;
    padding: 60px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background: white;
}

h1 {
    color: #2c3e50;
    font-size: 2.5rem;
    margin-bottom: 30px;
    line-height: 1.3;
    font-weight: 700;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s forwards;
}

.description {
    color: #666;
    font-size: 1.1rem;
    margin-bottom: 40px;
    line-height: 1.6;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s 0.2s forwards;
}

.btn {
    background: linear-gradient(45deg, #3498db, #2980b9);
    color: white;
    padding: 18px 36px;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 600;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s 0.4s forwards;
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.btn:after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 300px;
    height: 300px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: transform 0.5s;
}

.btn:hover:after {
    transform: translate(-50%, -50%) scale(1);
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 968px) {
    .container {
        flex-direction: column;
    }

    .thinking-person {
        min-height: 400px;
    }

    .content {
        padding: 40px 20px;
    }

    h1 {
        font-size: 2rem;
    }
}

.highlight {
    color: #3498db;
    font-weight: 600;
}

.decorative-element {
    position: absolute;
    width: 200px;
    height: 200px;
    background: linear-gradient(45deg, rgba(52, 152, 219, 0.1), rgba(41, 128, 185, 0.1));
    border-radius: 50%;
    right: -100px;
    top: -100px;
    z-index: 0;
}

/* New Close Button Styles */
.close-btn {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 40px;
    height: 40px;
    background: #f0f0f0;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 10;
}

.close-btn:hover {
    background: #e0e0e0;
    transform: rotate(90deg);
}

.close-btn::before,
.close-btn::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 2px;
    background-color: #666;
    transform: rotate(45deg);
}

.close-btn::after {
    transform: rotate(-45deg);
}

@media (max-width: 768px) {
    .container {
        flex-direction: column;
        height: auto;
    }

    .thinking-person {
        min-height: 300px;
    }

    .content {
        padding: 30px 15px;
    }

    h1 {
        font-size: 1.8rem;
    }

    .description {
        font-size: 1rem;
        margin-bottom: 30px;
    }

    .btn {
        padding: 14px 28px;
        font-size: 1rem;
    }

    .decorative-element {
        display: none;
    }
}

/* Mobile-specific Styles */
@media (max-width: 480px) {
    .thinking-person {
        display: block; /* Ensure the image is displayed */
        min-height: 250px;
        height: 250px; /* Adjust height for smaller screens */
    }

    .thinking-image {
        object-fit: contain; /* Ensures the image scales correctly */
        width: 100%;
        height: 100%;
    }

    .content {
        text-align: left;
    }

    h1 {
        font-size: 1.5rem;
    }

    .description {
        font-size: 0.9rem;
    }

    .btn {
        width: 100%;
        text-align: center;
    }

    .close-btn {
        width: 35px;
        height: 35px;
    }

    .close-btn::before,
    .close-btn::after {
        width: 15px;
    }
}

        
    </style>
</head>
<body>
    <div class="container">
        <!-- Close Button -->
        <div class="close-btn" onclick="window.location.href='house.php'"></div>
        
        <div class="thinking-person">
            <img src="image/thinking4.png" alt="Person thinking" class="thinking-image">
        </div>
        <div class="content">
            <div class="decorative-element"></div>
            <h1><?php echo $mainQuestion; ?></h1>
            <p class="description">
                Discover the ancient wisdom of <span class="highlight">Feng Shui</span> and learn how your door's direction 
                can influence the flow of energy in your space. Ready to begin your journey?
            </p>
            <a href="<?php echo $nextPage; ?>" class="btn" id="letsGoBtn" >
                <?php echo $buttonText; ?>
            </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const letsGoBtn = document.getElementById('letsGoBtn');
            const thinkingImage = document.querySelector('.thinking-image');

            // Add hover effect to the image
            letsGoBtn.addEventListener('mouseenter', function() {
                thinkingImage.style.transform = 'scale(1.05)';
            });

            letsGoBtn.addEventListener('mouseleave', function() {
                thinkingImage.style.transform = 'scale(1)';
            });

            // Add click effect
            letsGoBtn.addEventListener('click', function(e) {
                // Add ripple effect before navigation
                const ripple = document.createElement('div');
                ripple.style.position = 'absolute';
                ripple.style.background = 'rgba(255,255,255,0.7)';
                ripple.style.borderRadius = '50%';
                ripple.style.pointerEvents = 'none';
                ripple.style.animation = 'ripple-animation 0.6s';
                ripple.style.width = '60px';
                ripple.style.height = '60px';
                ripple.style.top = '50%';
                ripple.style.left = '50%';
                ripple.style.transform = 'translate(-50%, -50%)';
                letsGoBtn.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
    </script>
</body>
</html>
