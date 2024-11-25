<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 Elements of Feng Shui</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    /* Main container for the content */
    .content-container {
        display: flex;
        justify-content: space-between;
        align-items: center; /* Center both text and image vertically */
        gap: 20px;
        margin-top: 20px;
        width: 100%;
        flex-wrap: wrap; /* Allow content to stack on smaller screens */
       
    }

    /* Card Styling */
    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        overflow: hidden;
    }

    /* Image Wrapper Styling */
    .image-wrapper {
        width: 400px; /* Take up 50% of the container's width */
        height: 400px;
        overflow: hidden;
        margin: 20px 0;
        margin-right:70px;
    }

    /* Image Styling and Animation */
    .cycle-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
        transform: translateX(100%);
        transition: opacity 0.5s ease, transform 0.8s ease;
    }

    .cycle-image.visible {
        opacity: 1;
        transform: translateX(0);
    }

    /* Responsive adjustments for smaller screens */
    @media (max-width: 768px) {
        .content-container {
            flex-direction: column; /* Stack content vertically on small screens */
            align-items: flex-start; /* Align content to the left */
        }

        .card {
            width: 100%; /* Ensure the card takes up full width */
            margin-left: 0; /* Remove any possible left margin */
            padding: 15px;
        }

        .image-wrapper {
            width: 100%; /* Make the image take full width on smaller screens */
            height: 250px; /* Adjust height */
        }

        .cycle-image {
            height: 100%; /* Ensure the image fits */
        }
    }

               .card4 {
                background-color: white;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 768px;
                margin: 0 auto; /* Center the card */
                padding: 16px;
            }

            .card-content {
                padding: 24px;
            }

            .tabs-list {
                display: grid;
                grid-template-columns: repeat(5, 1fr);
                gap: 8px;
                margin-bottom: 16px;
            }

            .tab-trigger {
                background-color: #f0f0f0;
                border: none;
                padding: 8px;
                border-radius: 4px;
                cursor: pointer;
                font-size: 18px;
                transition: background-color 0.3s;
            }

            .tab-trigger:hover,
            .tab-trigger.active {
                background-color: #e0e0e0;
            }

            .tab-content {
                display: none;
            }

            .tab-content.active {
                display: block;
            }

            .element-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
                gap: 16px;
                margin-top: 16px;
                padding: 16px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                background-color: white;
            }

            .element-info {
                text-align: center;
            }

            .element-icon {
                font-size: 48px;
                margin-bottom: 8px;
            }

            .element-title {
                font-size: 24px;
                font-weight: 600;
                margin: 0;
            }

            .element-description {
                margin: 8px 0 0;
                color: #666;
            }

            .element-details {
                color: #333;
            }

            @media (min-width: 768px) {
                .element-container {
                    flex-direction: row;
                    text-align: left;
                }

                .element-info {
                    width: 33%;
                }

                .element-details {
                    width: 66%;
                }
            }

            @media (max-width: 768px) {
                .card4 {
                    margin-left: 0; /* Adjust left margin for mobile */
                }

                .tabs-list {
                    grid-template-columns: repeat(3, 1fr); /* Adjust tab layout for smaller screens */
                }

                .element-container {
                    flex-direction: column; /* Stack elements vertically */
                    align-items: center; /* Center items horizontally on mobile */
                }

                .element-info {
                    text-align: center;
                    width: 100%;
                }

                .element-details {
                    width: 100%;
                }

                .element-title {
                    font-size: 20px;
                }

                .element-description,
                .element-details p {
                    font-size: 14px;
                }
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
        /* Global styles for highlighted elements */
.highlight {
    font-weight: bold; /* Optional: To make highlighted text bold */
    color: #000; /* Default color for highlights */
}

/* Specific colors for each element */
.wood {
    color: #228B22; /* Green for Wood */
}

.fire {
    color: #FF4500; /* Red-Orange for Fire */
}

.earth {
    color: #8B4513; /* Brown for Earth */
}

.metal {
    color: #A9A9A9; /* Gray for Metal */
}

.water {
    color: #1E90FF; /* Blue for Water */
}

</style>
<body>
    <?php include'./Header.php' ?>
    
    <div class="container2">
        <div class="header">
            <h1 style="margin-top:30px;">5 Elements of Feng Shui</h1>
        </div>
      </div>

    <div class="content-container" >
        <!-- Text Content Section (Card) -->
        <div class="card">
            <h2>Elements Cycle</h2>
            <br>
            <p>
                In Chinese philosophy, the <span class="highlight">Five Elements</span> are the building blocks of everything in the Universe.
                The elements are <span class="highlight wood">Wood</span>, <span class="highlight fire">Fire</span>,
                <span class="highlight earth">Earth</span>, <span class="highlight metal">Metal</span>, and <span class="highlight water">Water</span>.
            </p><br>
            <p>
                Also known as the <em>Five Transformations of Energy</em>, each of these elements represents a different phase of energy.
                The <strong>Five Element Cycles</strong> show how these phases transform from one to the other, nurturing or controlling each other to maintain balance and harmony in the environment.
            </p>
        </div>

        <!-- Image Section (Beside the Card) -->
        <div class="image-wrapper">
            <img src="image/elements2.png" alt="5 elements cycle" class="cycle-image" id="cycleImage">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const image = document.getElementById('cycleImage');
            const imageWrapper = image.parentElement;

            function isElementInViewport(el) {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function handleScroll() {
                if (isElementInViewport(imageWrapper) && !image.classList.contains('visible')) {
                    image.classList.add('visible');
                }
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll();
        });
    </script>
    <br>
   <div class="container2">
        <div class="header">
            <h1 style="margin-top:30px;">Explore 5 Key Aspect Element</h1>
           
        </div>
      </div>

    <div class="card4">
        <div class="card-content">
            <div class="tabs-list" id="tabsList"></div>
            <div id="tabContents"></div>
        </div>
    </div>
    
      <script>
            const elements = [
                { name: 'wood', icon: '🪵', title: 'Wood', description: 'Growth & Vitality' },
                { name: 'fire', icon: '🔥', title: 'Fire', description: 'Passion & Energy' },
                { name: 'earth', icon: '🌍', title: 'Earth', description: 'Stability & Balance' },
                { name: 'metal', icon: '⚒️', title: 'Metal', description: 'Precision & Intelligence' },
                { name: 'water', icon: '💧', title: 'Water', description: 'Wisdom & Abundance' }
            ];

            function getElementDescription(element) {
                switch (element) {
                    case 'wood':
                        return 'Wood represents new<strong> beginnings, growth, and flexibility</strong>. It\'s associated with the <strong>east and southeast areas</strong> of your space.';
                    case 'fire':
                        return 'Fire <strong>symbolizes transformation, expansion, and dynamic passion</strong>. It\'s linked to the <strong>south area</strong> and can <strong>boost recognition and reputation.</strong>';
                    case 'earth':
                        return 'Earth provides <strong>grounding, stability, and nourishment</strong>. It\'s connected to the <strong>center, northeast, and southwest areas</strong>, promoting balance and harmony.';
                    case 'metal':
                        return 'Metal represents <strong>clarity, precision, and efficiency</strong>. It\'s associated with the <strong>west and northwest areas</strong>, enhancing creativity and helpful people.';
                    case 'water':
                        return 'Water <strong>embodies wisdom, intuition, and abundance</strong>. It\'s linked to the <strong>north area</strong> and can <strong>improve career prospects and life journey</strong>.';
                    default:
                        return '';
                }
            }

            function createTabs() {
                const tabsList = document.getElementById('tabsList');
                const tabContents = document.getElementById('tabContents');

                elements.forEach((element, index) => {
                    const tabTrigger = document.createElement('button');
                    tabTrigger.className = 'tab-trigger';
                    tabTrigger.textContent = `${element.icon} ${element.title}`;
                    tabTrigger.addEventListener('click', () => setActiveTab(index));
                    tabsList.appendChild(tabTrigger);

                    const tabContent = document.createElement('div');
                    tabContent.className = 'tab-content';
                    tabContent.innerHTML = `
                        <div class="element-container">
                            <div class="element-info">
                                <div class="element-icon">${element.icon}</div>
                                <h3 class="element-title">${element.title}</h3>
                                <p class="element-description">${element.description}</p>
                            </div>
                            <div class="element-details">
                                <p>${getElementDescription(element.name)}</p>
                            </div>
                        </div>
                    `;
                    tabContents.appendChild(tabContent);
                });

                setActiveTab(0);
            }

            function setActiveTab(index) {
                const tabTriggers = document.querySelectorAll('.tab-trigger');
                const tabContents = document.querySelectorAll('.tab-content');

                tabTriggers.forEach((trigger, i) => {
                    trigger.classList.toggle('active', i === index);
                });

                tabContents.forEach((content, i) => {
                    content.classList.toggle('active', i === index);
                });
            }

            createTabs();
        </script>


   

    <?php include './Footer.php'; ?>
</body>
</html>
