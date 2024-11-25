<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Ooi Wai Loon - Feng Shui Consultant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="css/homepage.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
        <script src="path/to/navigationbar.js" defer></script>
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

        .container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            padding: 2rem 1rem;
            flex-grow: 1;
        }

        .main-content {
            display: flex;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .left-content, .right-content {
            flex: 1;
            height: 370px;
        }

        .left-content {
            padding: 2rem;
        }

        .right-content img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #065f46;
        }

        p {
            color: #666;
            margin-bottom: 1.5rem;
        }

        .button {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .button-primary {
            background-color: #065f46;
            color: white;
        }

        .button-primary:hover {
            background-color: #064e3b;
        }

        .button-outline {
            background-color: white;
            color: #065f46;
            border: 2px solid #065f46;
        }

        .button-outline:hover {
            background-color: #065f46;
            color: white;
        }

        .imagecontainer {
            display: flex;
            justify-content: center;
            align-items: stretch;
            gap: 1.5rem;
            width: 90%;
            max-width: 1000px;
            padding: 2rem;
            margin: 0 auto;
        }

        .image-card {
            flex: 1;
            background: white;
            padding: 1.5rem;
            border-radius: 0.5rem;
            min-height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Basic styling */
.imagecontainer {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
    margin: 0 auto;
    padding: 20px;
}

.image-card {
    flex: 1 1 30%; /* 30% width, with ability to shrink and grow */
    max-width: 33%;
    box-sizing: border-box;
}

/* Ensuring images fill their containers without stretching */
.image-card img {
    width: 100%;
    height: auto;
}

/* Mobile responsiveness */
@media screen and (max-width: 768px) {
    .image-card {
        flex: 1 1 100%; /* Full width on small screens */
        max-width: 100%;
    }
    
    .image-card img {
        margin-top: 20px; /* Ensure spacing between images if needed */
    }
}

@media screen and (max-width: 480px) {
    .imagecontainer {
        padding: 10px; /* Less padding on very small screens */
    }
}

               .cards-container {
            display: flex;
            justify-content: center;
            gap: 2rem;
            width: 100%;
            max-width: 850px;
            margin: 0 auto;
            padding: 2rem;
        }

        .card-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 400px;
        }

        .card1, .card2 {
            background-color: #ffe4e4;
            border-radius: 12px;
            width: 350px;
            height: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            margin-bottom: 2rem;
            position: relative;
        }

        .card-content1, .card-content2 {
            width: 100%;
            text-align: center;
        }

        .x-icon1, .x-icon2 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .x-icon1 { color: #ff0000; }
        .x-icon2 { color: #317022; }

        .card-label1, .card-label2 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .card-label1 { color: #cc0000; }
        .card-label2 { color: #33b315; }

        .card-text1, .card-text2 {
            font-size: 22px;
            font-weight: bold;
            word-wrap: break-word;
            max-width: 100%;
            margin-bottom: 1rem;
        }

        .card-text1 { color: #990000; }
        .card-text2 { color: #317022; }

        .card1 { background-color: #ffe6c7; }
        .card2 { background-color: #d2ffc7; }

        .controls-container {
            width: 100%;
        }

        .navigation1, .navigation2 {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .nav-button1, .nav-button2 {
            background: none;
            border: 1px solid #ddd;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .nav-button1:hover, .nav-button2:hover {
            background-color: #f5f5f5;
        }

        .counter1, .counter2 { color: #666; }

        .progress-container1, .progress-container2 {
            width: 100%;
            max-width: 300px;
            height: 8px;
            background-color: #eee;
            border-radius: 4px;
            overflow: hidden;
            margin: 0 auto;
        }

        .progress-bar1, .progress-bar2 {
            width: 12.5%;
            height: 100%;
            background-color: #000;
            transition: width 0.3s ease;
        }

        @media (max-width: 1024px) {
            .cards-container { flex-direction: column; }
        }

        .reviews {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 2rem;
            margin: 2rem 0;
        }

        .review {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background-color: #f8f8f8;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .avatar {
            width: 80px; /* Set the width to 80px */
            height: 80px; /* Set the height to 80px */
            border-radius: 50%; /* Make the avatar circular */
            object-fit: cover; /* Ensure the image fills the area without distortion */
            margin-right: 10px; /* Optional: space between image and text */
        }

        .stars {
            color: #FFD700;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .success-rate-section {
            margin: 4rem 0;
            text-align: center;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            gap: 2rem;
            margin: 3rem 0;
            flex-wrap: wrap;
        }

        .stat-card {
            flex: 1;
            min-width: 200px;
            max-width: 300px;
            background: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #065f46;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.4;
        }

        .help-container {
            background: linear-gradient(to bottom, #f0fff4, #ffffff);
            padding: 4rem 1rem;
        }

        .help-title {
            font-size: 2rem;
            color: black;
            text-align: center;
            margin-bottom: 3rem;
        }

        .outer-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .card {
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            padding: 1.5rem;
            text-align: center;
        }

        .card-icon {
            font-size: 3rem;
            background: #dcfce7;
            width: 4rem;
            height: 4rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 1rem;
        }

        .card-title {
            font-size: 1.25rem;
            color: #166534;
            margin: 0;
        }

        .card-content {
            padding: 0 1.5rem 1.5rem;
        }

        .card-description {
            color: #4b5563;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .card-footer {
            padding: 0 1.5rem 1.5rem;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: white;
            color: #166534;
            border: 1px solid #166534;
            border-radius: 0.25rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: #f0fff4;
        }

        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
            }

            .left-content, .right-content {
                height: auto;
            }

            .right-content img {
                height: 300px;
            }

            .reviews {
                flex-direction: column;
                align-items: center;
            }

            .card-grid {
                grid-template-columns: 1fr;
            }
        }
        
        
      .help-container {
            background: linear-gradient(to bottom, #f0fff4, #ffffff);
            padding: 4rem 1rem;
            overflow: hidden;
            max-width: 1200px;
            margin: 0 auto;
        }

        .help-title {
            font-size: 2rem;
            color: black;
            text-align: center;
            margin-bottom: 3rem;
        }

        .outer-container {
            display: flex;
            justify-content: center;
            max-width: 100%;
            margin: 0 auto;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            width: 100%;
        }

        .card {
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            width: 100%;
            font-family:"Arial";
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .card-content {
            padding: 1.5rem;
            font-family:"Arial";
        }

        .card-title {
            font-size: 1.25rem;
            color: black;
            margin: 0 0 1rem 0;
            text-align: center;
            font-family:"Arial";
        }

        .card-image-container {
            height: 150px;
            overflow: hidden;
            margin-bottom: 1rem;
            font-family:"Arial";
        }

        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-description {
            color: #4b5563;
            font-size: 0.9rem;
            line-height: 1.5;
            text-align: center;
            font-family:"Arial";
        }

        @media (max-width: 768px) {
            .card-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }
        
        @media (max-width: 468px) {
    .card-grid {
        grid-template-columns: 1fr; /* Stack cards in a single column */
    }

    .card-title {
        font-size: 1.1rem; /* Adjust font size of titles for smaller screens */
    }

    .card-description {
        font-size: 0.85rem; /* Reduce description text size */
    }

    .help-title {
        font-size: 1.5rem; /* Reduce the help title size */
    }

    .help-container {
        padding: 2rem 1rem; /* Reduce padding for smaller screens */
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

        .comparison-container {
            display: flex;
            gap: 20px;
            perspective: 1000px;
        }

        .column {
            flex: 1;
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 1s ease-out;
        }

        .column:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }

        .yes-column {
            border-top: 4px solid #4CAF50;
        }

        .no-column {
            border-top: 4px solid #f44336;
        }

        .column-header {
            padding: 20px;
            text-align: center;
        }

        .yes-header {
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
        }

        .no-header {
            background: linear-gradient(135deg, #f44336 0%, #e53935 100%);
        }

        .column-header h2 {
            color: white;
            font-size: 1.5em;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .column-header p {
            color: rgba(255,255,255,0.9);
            font-size: 0.9em;
        }

        .items-container {
            padding: 15px;
        }

        .item {
            padding: 10px 15px;
            margin: 8px 0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .yes-column .item {
            background: #d0f5d9;
        }

        .no-column .item {
            background: #ffebee;
        }

        .item:hover {
            transform: translateX(5px);
        }

        .item::before {
            font-family: "Arial";
            font-weight: bold;
            margin-right: 10px;
            font-size: 1em;
            min-width: 20px;
            text-align: center;
        }

        .yes-column .item::before {
            content: '✓';
            color: #4CAF50;
        }

        .no-column .item::before {
            content: '×';
            color: #f44336;
        }

        .item-text {
            flex-grow: 1;
            font-size: 0.95em;
            color: #333;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        @media (max-width: 768px) {
            .comparison-container {
                flex-direction: column;
            }
            
            .column {
                margin-bottom: 20px;
            }
            
            .header h1 {
                font-size: 1.5em;
            }
        }


        .container3 {
            max-width: 1200px;
            margin: 0 auto; /* Centers the container horizontally */
            padding: 4rem 2rem; /* Adds padding of 4rem on top and bottom, 2rem on left and right */
        }

        h2 {
            font-size: 2.5rem;
            color: black;
            text-align: center;
            margin-bottom: 3rem;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
        }

        .card-grid3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Automatically adjusts the number of columns */
            gap: 2rem;  /* Space between cards */
            margin-bottom: 4rem;
        }

        .card3 {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease-in-out;
            overflow: hidden;
        }

        .card3:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        .card-header3 {
            padding: 2rem 1.5rem;
            background-color: #66bb6a;
            color: white;
            text-align: center;
            border-radius: 12px 12px 0 0;
        }

        .card-icon3 {
            font-size: 3rem;
            background: #ffffff;
            color: #66bb6a;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-title3 {
            font-size: 1.5rem;
            margin: 0;
            font-weight: bold;
            color: #2d6a4f;
        }

        .card-content3 {
            padding: 1.5rem;
            color: #555;
            font-size: 1.1rem;
        }

        .card-description3 {
            margin-bottom: 1.5rem;
            line-height: 1.6;
            font-family:"Arial";
        }

        .help-container3 {
            margin-bottom: 5rem;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            justify-content: flex-start; /* Ensure it aligns the content properly */
        }

        .help-title3 {
            font-size: 2.5rem;
            color: black;
            text-align: center;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
            flex: 1; /* Ensures the title stretches and occupies space */
        }

        @media (max-width: 768px) {
            h2 {
                font-size: 2rem;
            }

            .card-grid3 {
                grid-template-columns: 1fr; /* Stack the cards in a single column on small screens */
            }

            .card3 {
                padding: 1.5rem;
            }

            .card-title3 {
                font-size: 1.3rem;
            }

            .card-content3 {
                font-size: 1rem;
            }
        }

    </style>
</head>
<body>
    <?php include './Header.php'; ?>

    <div class="container">
        <div class="main-content">
            <div class="left-content">
                <h1>Master Ooi Wai Loon</h1>
                <p style="font-size:18px;">Master Ooi Wai Loon is one of only a few consultants worldwide certified in Classical Feng Shui and well versed in this ancient science. Through skills and closely guarded secrets learned directly from world renowned Chinese Masters, Master Ooi Wai Loon offers clients unprecedented results.</p>
                <a href="userdetail.php" class="button button-primary">Free Report</a>
                <a href="register.php" class="button button-outline">Login</a>
            </div>
            <div class="right-content">
                <img src="image/image1.jpg" alt="Master Ooi Wai Loon">
            </div>
        </div>

        <div class="imagecontainer">
            <div class="image-card">
                <img src="image/nyse.png" alt="Image 1">
            </div>
            <div class="image-card">
                <img src="image/fortune5003.jpg" alt="Image 2" style="margin-top:40px;">
            </div>
            <div class="image-card">
                <img src="image/nasdaq.png" alt="Image 3">
            </div>
        </div>
        
        <div class="container2">
        <div class="header">
            <h1>Modern Feng Shui: Getting it RIGHT</h1>
            <p>Discover the authentic principles of Feng Shui that truly matter for your space's harmony and energy flow</p>
        </div>
        
        <div class="comparison-container">
            <div class="column yes-column">
                <div class="column-header yes-header">
                    <h2 style="font-weight:bold;">DO THIS</h2>
                    <p style="font-weight:bold;">Essential principles that work</p>
                </div>
                <div class="items-container">
                    <div class="item"><span class="item-text">Good Environment</span></div>
                    <div class="item"><span class="item-text">Good Direction</span></div>
                    <div class="item"><span class="item-text">Matching Direction to YOU</span></div>
                    <div class="item"><span class="item-text">Right Main Entrance</span></div>
                    <div class="item"><span class="item-text">Choice of Bedroom</span></div>
                    <div class="item"><span class="item-text">Right Bed Angle</span></div>
                    <div class="item"><span class="item-text">Good Kitchen Stove</span></div>
                    <div class="item"><span class="item-text">Simple Feng Shui</span></div>
                </div>
            </div>
            
            <div class="column no-column">
                <div class="column-header no-header">
                    <h2 style="font-weight:bold;">AVOID THIS</h2>
                    <p style="font-weight:bold;">Common misconceptions to skip</p>
                </div>
                <div class="items-container">
                    <div class="item"><span class="item-text">Lucky Color</span></div>
                    <div class="item"><span class="item-text">Lucky Numbers</span></div>
                    <div class="item"><span class="item-text">Decorative Items</span></div>
                    <div class="item"><span class="item-text">Too Many Taboos</span></div>
                    <div class="item"><span class="item-text">Religious</span></div>
                    <div class="item"><span class="item-text">No Scientific Evidence</span></div>
                    <div class="item"><span class="item-text">Local Tradition/Culture</span></div>
                    <div class="item"><span class="item-text">Not Feng Shui at all</span></div>
                </div>
            </div>
        </div>
    </div>

        
  
        <div class="reviews">
            <div class="review">
                <img src="image/avatar4.png" alt="Kexing" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Kexing</strong></p>
                <p>Well Result!</p>
            </div>
            <div class="review">
                <img src="image/avatar7.png" alt="Alex" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Alex</strong></p>
                <p>Exceptional insights!</p>
            </div>
            <div class="review">
                <img src="image/avatar5.png" alt="Jordan" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Jordan</strong></p>
                <p>Highly recommended!</p>
            </div>
            <div class="review">
                <img src="image/avatar6.png" alt="Taylor" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Taylor</strong></p>
                <p>Life-changing advice!</p>
            </div>
        </div>
    
    
    
     <div class="help-container">
           <div class="container2">
        <div class="header">
            <h1>Benefit of Feng Shui</h1>
        </div>
      </div>

            <div class="outer-container">
                <div class="card-grid" style='font-family:"Arial"';>
                    <?php 
                    $cards = [
                        ['title' => 'Health', 'image' => 'image/health3.png', 'description' => 'Prevent serious illnesses such as stroke and cancer through a healthy lifestyle.'],
                        ['title' => 'Wealth', 'image' => 'image/wealth5.png', 'description' => 'Understanding the flow of money helps create long-term financial sustainability.'],
                        ['title' => 'Family', 'image' => 'image/family3.png', 'description' => 'Strengthen family relationships, reduce conflicts, and promote fertility and harmony.'],
                        ['title' => 'Love', 'image' => 'image/love3.png', 'description' => 'Supports couples in family-building and helps singles find meaningful relationships.'],
                        ['title' => 'Peace of Mind', 'image' => 'image/peace3.png', 'description' => 'When everything is well-balanced and aligned, you will have peace of mind.']
                    ];

                    foreach($cards as $card) {
                        echo "
                            <div class='card'>
                                <div class='card-content'>
                                    <h2 class='card-title'>{$card['title']}</h2>
                                    <div class='card-image-container'>
                                        <img src='{$card['image']}' alt='{$card['title']}' class='card-image'>
                                    </div>
                                    <p class='card-description' style='font-family:Arial;'>{$card['description']}</p>
                                </div>
                            </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    
    
        <div class="reviews">
            <div class="review">
                <img src="image/avatar8.png" alt="Kexing" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Kexing</strong></p>
                <p>Well Result!</p>
            </div>
            <div class="review">
                <img src="image/avatar9.png" alt="Alex" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Alex</strong></p>
                <p>Exceptional insights!</p>
            </div>
            <div class="review">
                <img src="image/avatar10.png" alt="Jordan" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Jordan</strong></p>
                <p>Highly recommended!</p>
            </div>
            <div class="review">
                <img src="image/avatar11.png" alt="Taylor" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Taylor</strong></p>
                <p>Life-changing advice!</p>
            </div>
        </div>
        
        
         <div class="container3">
            <div class="help-container3">
                <div class="container2">
        <div class="header">
            <h1>How Feng Shui Improve Your Business</h1>
        </div>
      </div>
                <div class="outer-container3">
                    <div class="card-grid3">
                        <?php
                        $businessImprovementSteps = [
                            [
                                "title" => "Optimize Your Office Layout",
                                "description" => "Arrange your workspace for better energy flow and focus by placing desks in a commanding position.",
                                "icon" => "📐"
                            ],
                            [
                                "title" => "Enhance the Entrance",
                                "description" => "Create a welcoming entryway to attract positive energy and success.",
                                "icon" => "🚪"
                            ],
                            [
                                "title" => "Balance the Five Elements",
                                "description" => "Use wood, fire, earth, metal, and water elements to create balance and support growth.",
                                "icon" => "⚙️"
                            ],
                            [
                                "title" => "Foster Positive Relationships",
                                "description" => "Arrange workstations to encourage collaboration and open communication.",
                                "icon" => "🤝"
                            ]
                        ];

                        foreach ($businessImprovementSteps as $step) {
                            echo "<div class='card3'>";
                            echo "<div class='card-header3'>";
                            echo "<div class='card-icon3'>{$step['icon']}</div>";
                            echo "<h3 class='card-title3'>{$step['title']}</h3>";  
                            echo "</div>";
                            echo "<div class='card-content3'>";
                            echo "<p class='card-description3'>{$step['description']}</p>";
                            echo "</div>";
                            echo "<div class='card-footer3'></div>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
       
        <div class="reviews">
            <div class="review">
                <img src="image/avatar8.png" alt="Kexing" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Kexing</strong></p>
                <p>Well Result!</p>
            </div>
            <div class="review">
                <img src="image/avatar9.png" alt="Alex" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Alex</strong></p>
                <p>Exceptional insights!</p>
            </div>
            <div class="review">
                <img src="image/avatar10.png" alt="Jordan" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Jordan</strong></p>
                <p>Highly recommended!</p>
            </div>
            <div class="review">
                <img src="image/avatar11.png" alt="Taylor" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Taylor</strong></p>
                <p>Life-changing advice!</p>
            </div>
        </div>
        
        
        <div class="help-container3">
                <div class="container2">
        <div class="header">
            <h1>How Feng Shui Improve Your Relationship</h1>
        </div>
      </div>
                <div class="outer-container3">
                    <div class="card-grid3">
                        <?php
                        $relationshipImprovementSteps = [
                            [
                                "title" => "Activate the Relationship Corner",
                                "description" => "Enhance the Southwest corner with pairs of items and soft colors to attract love and harmony.",
                                "icon" => "❤️"
                            ],
                            [
                                "title" => "Optimize Bedroom Energy",
                                "description" => "Keep your bedroom clutter-free and place your bed in a commanding position for intimacy.",
                                "icon" => "🛏️"
                            ],
                            [
                                "title" => "Use Symmetry and Pairs",
                                "description" => "Incorporate pairs of items to symbolize balance and harmony in your relationship.",
                                "icon" => "⚖️"
                            ],
                            [
                                "title" => "Clear Negative Energy",
                                "description" => "Use sage or crystals to remove stagnant energy and invite positivity.",
                                "icon" => "✨"
                            ]
                        ];

                        foreach ($relationshipImprovementSteps as $step) {
                            echo "<div class='card3'>";
                            echo "<div class='card-header3'>";
                            echo "<div class='card-icon3'>{$step['icon']}</div>";
                            echo "<h3 class='card-title3'>{$step['title']}</h3>";  
                            echo "</div>";
                            echo "<div class='card-content3'>";
                            echo "<p class='card-description3'>{$step['description']}</p>";
                            echo "</div>";
                            echo "<div class='card-footer3'></div>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
       
        
        <div class="reviews">
            <div class="review">
                <img src="image/avatar8.png" alt="Kexing" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Kexing</strong></p>
                <p>Well Result!</p>
            </div>
            <div class="review">
                <img src="image/avatar9.png" alt="Alex" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Alex</strong></p>
                <p>Exceptional insights!</p>
            </div>
            <div class="review">
                <img src="image/avatar10.png" alt="Jordan" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Jordan</strong></p>
                <p>Highly recommended!</p>
            </div>
            <div class="review">
                <img src="image/avatar11.png" alt="Taylor" class="avatar">
                <div class="stars">★★★★★</div>
                <p><strong>Taylor</strong></p>
                <p>Life-changing advice!</p>
            </div>
        </div>
        
        
        
        <div class="help-container3">
                <div class="container2">
        <div class="header">
            <h1>How Feng Shui Improve Your Health</h1>
        </div>
      </div>
                <div class="outer-container3">
                    <div class="card-grid3">
                        <?php
                        $healthImprovementSteps = [
                            [
                                "title" => "Assess Your Space",
                                "description" => "Identify energy blockages and create a layout that supports your health.",
                                "icon" => "🔍"
                            ],
                            [
                                "title" => "Optimize Energy Flow",
                                "description" => "Boost positive energy with decluttering, natural light, and calming elements.",
                                "icon" => "🌿"
                            ],
                            [
                                "title" => "Personalize Your Space",
                                "description" => "Customize your space to align with your energy and enhance well-being.",
                                "icon" => "🏠"
                            ],
                            [
                                "title" => "Maintain and Thrive",
                                "description" => "Regularly cleanse and update your space for lasting balance and health.",
                                "icon" => "🌟"
                            ]
                        ];

                        foreach ($healthImprovementSteps as $step) {
                            echo "<div class='card3'>";
                            echo "<div class='card-header3'>";
                            echo "<div class='card-icon3'>{$step['icon']}</div>";
                            echo "<h3 class='card-title3'>{$step['title']}</h3>";  
                            echo "</div>";
                            echo "<div class='card-content3'>";
                            echo "<p class='card-description3'>{$step['description']}</p>";
                            echo "</div>";
                            echo "<div class='card-footer3'></div>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         </div>
    </div>
    </div>
    <?php include'./footer.php' ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const stepTitle = this.closest('.card').querySelector('.card-title').textContent;
                    alert(`You clicked Learn More for ${stepTitle}`);
                });
            });
        });
    </script>
</body>
</html>