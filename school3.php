<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Feng Shui Schools</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/footer.css" rel="stylesheet">
    
 
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
     font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    flex-direction: column;
    background-color: #f5f5f5;
    color: black;
}

/* Tabs Container */
.tabs {
    background-color: #166534; /* Green Background */
    display: flex;
    justify-content: center;
    padding: 1rem;
    gap: 10px; /* Add spacing between buttons */
    flex-wrap: wrap; /* Allow tabs to wrap on smaller screens */
}

/* Tab Button Styles */
.tab-btn {
    background: none;
    border: none;
    color: white;
    padding: 1rem 2rem;
    text-align: center;
    cursor: pointer;
    font-size: 1.1rem;
    border-radius: 4px; /* Rounded corners */
    outline: none; /* Remove default browser outline */
    position: relative; /* For pseudo-element positioning */
    transition: color 0.3s ease-in-out; /* Smooth text color change */
    width: auto; /* Default for larger screens */
}

/* Horizontal line under button (initially hidden) */
.tab-btn::after {
    content: "";
    position: absolute;
    bottom: -5px; /* Position the line slightly below the button */
    left: 0;
    width: 0; /* Start with zero width */
    height: 3px; /* Line thickness */
    background-color: white; /* Line color */
    transition: width 0.3s ease-in-out; /* Smooth width transition */
}

/* Show line on hover or active state */
.tab-btn:hover::after, .tab-btn.active::after {
    width: 100%; /* Full width of the button */
}

.tab-btn:hover {
    color: #ddd; /* Lighter text color on hover */
}

/* Main Content Styling */
.main-content {
    flex-grow: 1;
    padding: 3rem;
    background-color: white;
    overflow-y: auto;
}

/* Tab Content */
.tab-content {
    display: none;
    animation: fadeIn 0.5s ease-in-out;
}

.tab-content.active {
    display: block;
}

/* Fade In Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Hero Section */
.hero-section {
    background: url('image/background3.png') no-repeat center center/cover;
    padding: 4rem;
    color: white;
    text-align: center;
    border-radius: 12px;
    margin-bottom: 2rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.hero-section h1 {
    font-size: 2.5rem;
}

.hero-section p {
    margin-top: 1rem;
    font-size: 1.2rem;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .tab-btn {
        padding: 0.8rem 1.5rem;
        font-size: 1rem;
    }

    .hero-section {
        padding: 3rem;
    }

    .main-content {
        padding: 2rem;
    }
}

@media (max-width: 768px) {
    /* Stack tabs vertically on mobile */
    .tabs {
        flex-direction: column; /* Stack tabs vertically */
        padding: 1rem;
    }

    .tab-btn {
        width: 100%; /* Make each tab take full width */
        text-align: left; /* Align text to the left */
        padding: 1rem; /* Adjust padding for mobile */
        font-size: 1rem; /* Reduce font size */
    }

    /* Hero section padding and font size adjustments */
    .hero-section {
        padding: 2rem;
    }

    .hero-section h1 {
        font-size: 2rem;
    }

    .hero-section p {
        font-size: 1rem;
    }

    /* Adjust main content padding */
    .main-content {
        padding: 1.5rem;
    }
}

@media (max-width: 480px) {
    .tab-btn {
        padding: 0.8rem 1rem; /* Further reduce padding on very small screens */
        font-size: 0.9rem;
    }

    .hero-section h1 {
        font-size: 1.8rem;
    }

    .hero-section p {
        font-size: 0.9rem;
    }

    /* Main content padding */
    .main-content {
        padding: 1rem;
    }
}

    </style>
</head>

<body>
    <!-- Include a Header -->
    <?php include './Header.php'; ?>

    <!-- Tabs Navigation -->
    <div class="tabs">
        <button class="tab-btn active" data-tab="sanyuan">San Yuan School</button>
        <button class="tab-btn" data-tab="sanhe">San He School</button>
        <button class="tab-btn" data-tab="xuankong">Xuan Kong School</button>
        <button class="tab-btn" data-tab="eightmansions">Eight Mansions</button>
    </div>

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Hero Section -->
        <div class="hero-section">
            <h1>Discover the Wisdom of Feng Shui</h1>
            <p>Explore the different schools and their unique principles of harmony and balance.</p>
        </div>

        <!-- Tab Contents -->
        <div class="tabs-content">
            <div class="tab-content active" id="sanyuan">
                <h2 style='text-decoration:underline;'>The San Yuan School</h2><br>
                <p >Founded by Yang Yun Sun in the T'ang dynasty (618-906 CE), the San Yuan (Three Periods) school, the oldest school of Feng Shui, has existed for at least 1,100 years. 
                    The classic San Yuan school focused on Landform Classification, in particular the Feng-Shui of burial grounds, relying heavily on the geomantic compass to align the burial site with special features in the land. </p><br>
                <p>During the Sung dynasty (960-1279 CE), San Yuan turned its attention to buildings, using the Flying Stars System to chart the flow of energy in buildings. </p><br>
                <p>During the Republic years, San Yuan began applying landform analysis principles to buildings and other human-made structures, such as roads, dams, and bridges. As practised today, San Yuan is a complete system of Feng Shui that includes both branches of Landform Classification and Building Characteristics, but with an emphasis on Landform Classification.</p>
            </div>
            <div class="tab-content" id="sanhe">
                <h2 style='text-decoration:underline;'>The San He School</h2><br>
                <p>Like the San Yuan school, the San He (Three Combinations) school can be traced back to Yang Yun Sun. Hence, its history also goes back at least 1,000 years. Instead of focusing on buildings, it focuses more on the relationship between mountains and waterways. San He uses a compass that is specially developed for use in Landform Classification. Thus, San He is especially useful in environments with complex arrangements of mountains, valleys, and water systems.</p>
            </div>
            <div class="tab-content" id="xuankong">
                <h2 style='text-decoration:underline;'>The Xuan Kong School</h2><br>
                <p>The Xuan Kong (Mysterious Subtleties) school, founded by Hsü Jen-wang during the Sung dynasty (960-1279 CE), has existed for at least 800 years. Originally designed for use with buildings, it was intended as a complement to San Yuan, which in its early years concerned itself exclusively with landforms. Like the San Yuan school, Xuan Kong uses the luo pan in conjunction with the Flying Stars system to chart the flow of energy in buildings, but the two schools have different interpretations of the numbers on the Flying Stars grid. </p><br>
                <p>During the Ch'ing dynasty (1644-1911 CE), the classic form of Xuan Kong was expanded to incorporate landform classification of both natural and human-made structures. As practised today, Xuan Kong is a complete system of feng-shui, with both Landform Classification and Building Characteristics branches, though it emphasizes buildings over landforms.

</p>
            </div>
            <div class="tab-content" id="eightmansions">
                <h2 style='text-decoration:underline;'>The Eight Mansions (Ba Zhai)</h2><br>
                <p>The Eight Mansions 
(Ba Zhai)

While the Eight Mansions (Ba Zhai) school is the newest school of traditional Chinese Feng Shui. Nevertheless, it has a 300-year history. Designed exclusively for use with buildings, it matches a person's guardian star (based on his/her year of birth) with the direction that the main entrance of a house faces. According to the original Eight Mansions, people are ruled either by a "west" or an "east" type of guardian star. When the main entrance of a house faces a direction that "favours" the personal guardian star of an occupant, it will bode well for his or her fortunes. In traditional China, the main entrance and the direction of the house with the most expansive views are usually located on the same side. Eight Mansions uses the simple eight-point compass (the four cardinal and four diagonals directions) to locate areas of positive and negative energy in a house.

</p>
            </div>
        </div>
    </div>
    
    <?php include'footer.php' ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove 'active' class from all tabs and tab contents
            tabs.forEach(t => t.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Add 'active' class to the clicked tab and its corresponding content
            tab.classList.add('active');
            document.getElementById(tab.dataset.tab).classList.add('active');
        });
    });
});
    </script>
</body>
</html>
