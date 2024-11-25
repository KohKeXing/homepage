<?php
$pageTitle = "Discover Sleeping Direction";
$mainQuestion = "How to Check Your Sleeping Direction?";
$buttonText = "Let's Get Started";
$nextPage = "sleeping.php"; // Link to the next page
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
    display:flex;
    justify-content:center;
    align-items:center;
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

@media (max-width: 468px) {
    .container {
        flex-direction: column;
        height: auto;
        padding: 15px;
    }

    .thinking-person {
        min-height: 250px; /* Smaller height for ultra-small screens */
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .thinking-image {
        width: 60%; /* Reduce the image size even further */
        height: auto;
    }

    .content {
        padding: 20px 10px;
    }

    h1 {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    .description {
        font-size: 0.9rem;
        margin-bottom: 25px;
    }

    .btn {
        font-size: 0.9rem;
        padding: 12px 24px;
        border-radius: 50px;
        width: 100%; /* Full width button for mobile */
    }

    .btn:hover {
        transform: translateY(-1px);
    }

    .close-btn {
        top: 10px;
        right: 10px;
    }

    .highlight {
        font-size: 1rem;
    }

    .decorative-element {
        display: none; /* Hide the decorative element on small screens */
    }

    /* Optional: Adjust button hover effect for small screens */
    .btn:hover {
        box-shadow: none;
        transform: translateY(0);
    }
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

    </style>
</head>
<body>
    <div class="container">
        <!-- Close Button -->
        <div class="close-btn" onclick="window.location.href='house.php'"></div>
        
        <div class="thinking-person">
            <img src="image/thinking2.png" alt="Person thinking" class="thinking-image">
        </div>
        <div class="content">
            <div class="decorative-element"></div>
            <h1><?php echo $mainQuestion; ?></h1>
            <p class="description">
                Discover the ancient wisdom of <span class="highlight">Feng Shui</span> and learn how your sleeping direction 
                can influence the flow of energy in your space. Ready to begin your journey?
            </p>
            <a href="<?php echo $nextPage; ?>" class="btn" id="letsGoBtn">
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
                ripple.style.width = ripple.style.height = '100px';
                ripple.style.transform = 'translate(-50%, -50%)';
                ripple.style.animation = 'ripple 0.6s linear';
                
                const rect = this.getBoundingClientRect();
                ripple.style.left = e.clientX - rect.left + 'px';
                ripple.style.top = e.clientY - rect.top + 'px';
                
                this.appendChild(ripple);
                
                setTimeout(() => ripple.remove(), 600);
            });
        });
    </script>
</body>
</html>