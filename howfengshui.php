<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>How Feng Shui Can Do It</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="css/header.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
        <script src="path/to/navigationbar.js" defer></script>
    </head>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: black;
        }

        .container {
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

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Automatically adjusts the number of columns */
            gap: 2rem;  /* Space between cards */
            margin-bottom: 4rem;
        }

        .card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease-in-out;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            padding: 2rem 1.5rem;
            background-color: #66bb6a;
            color: white;
            text-align: center;
            border-radius: 12px 12px 0 0;
        }

        .card-icon {
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

        .card-title {
            font-size: 1.5rem;
            margin: 0;
            font-weight: bold;
            color: #2d6a4f;
        }

        .card-content {
            padding: 1.5rem;
            color: #555;
            font-size: 1.1rem;
        }

        .card-description {
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .help-container {
            margin-bottom: 5rem;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            justify-content: flex-start; /* Ensure it aligns the content properly */
        }

        .help-title {
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

            .card-grid {
                grid-template-columns: 1fr; /* Stack the cards in a single column on small screens */
            }

            .card {
                padding: 1.5rem;
            }

            .card-title {
                font-size: 1.3rem;
            }

            .card-content {
                font-size: 1rem;
            }
        }
    </style>
    <body>
        <?php include './Header.php'; ?>
        
        <div class="container">
            <div class="help-container">
                <h2 class="help-title">How Feng Shui Can Improve Your Business</h2>
                <div class="outer-container">
                    <div class="card-grid">
                        <?php
                        $businessImprovementSteps = [
                            [
                                "title" => "<br>Optimize Your Office Layout",
                                "description" => "Organize your workspace to allow positive energy (Qi) to flow freely. Ensure desks are placed in a commanding position for focus and control.",
                                "icon" => "📐"
                            ],
                            [
                                "title" => "<br>Enhance the Entrance",
                                "description" => "Create a welcoming and clean entrance to attract prosperity and positive energy. A good entryway signals openness and success.",
                                "icon" => "🚪"
                            ],
                            [
                                "title" => "<br>Balance the Five Elements",
                                "description" => "Integrate the five elements (wood, fire, earth, metal, water) in your workspace to foster balance and growth. Each element supports different aspects of your business.",
                                "icon" => "⚙️"
                            ],
                            [
                                "title" => "<br>Foster Positive Relationships",
                                "description" => "Arrange workstations and meeting spaces to encourage collaboration and open communication. Healthy team dynamics lead to business success.",
                                "icon" => "🤝"
                            ]
                        ];

                        foreach ($businessImprovementSteps as $index => $step) {
                            echo "<div class='card'>";
                            echo "<div class='card-header'>";
                            echo "<div class='card-icon'>{$step['icon']}</div>";
                            echo "<h3 class='card-title'>Step " . ($index + 1) . ": {$step['title']}</h3>";
                            echo "</div>";
                            echo "<div class='card-content'>";
                            echo "<p class='card-description'>{$step['description']}</p>";
                            echo "</div>";
                            echo "<div class='card-footer'></div>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="help-container">
                <h2 class="help-title">How Feng Shui Can Improve Your Relationships</h2>
                <div class="outer-container">
                    <div class="card-grid">
                        <?php
                        $relationshipImprovementSteps = [
                            [
                                "title" => "<br>Activate the Relationship Corner",
                                "description" => "Enhance the Southwest corner of your home with pairs of objects and soft colors to attract love and harmony.",
                                "icon" => "❤️"
                            ],
                            [
                                "title" => "<br>Optimize Bedroom Energy<br>",
                                "description" => "Place your bed in the commanding position and keep the bedroom clutter-free for a peaceful, intimate space.",
                                "icon" => "🛏️"
                            ],
                            [
                                "title" => "<br>Use Symmetry and Pairs",
                                "description" => "Incorporate pairs of items in your home to symbolize balance, unity, and harmony in your relationship.",
                                "icon" => "⚖️"
                            ],
                            [
                                "title" => "<br>Clear Negative Energy",
                                "description" => "Use space-clearing techniques like sage and crystals to remove stagnant energy and invite fresh, positive energy into your relationships.",
                                "icon" => "✨"
                            ]
                        ];

                        foreach ($relationshipImprovementSteps as $index => $step) {
                            echo "<div class='card'>";
                            echo "<div class='card-header'>";
                            echo "<div class='card-icon'>{$step['icon']}</div>";
                            echo "<h3 class='card-title'>Step " . ($index + 1) . ": {$step['title']}</h3>";
                            echo "</div>";
                            echo "<div class='card-content'>";
                            echo "<p class='card-description'>{$step['description']}</p>";
                            echo "</div>";
                            echo "<div class='card-footer'></div>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="help-container">
                <h2 class="help-title">How We Help You To Improve Health</h2>
                <div class="outer-container">
                    <div class="card-grid">
                        <?php
                        $healthImprovementSteps = [
                            [
                                "title" => "Assess Your Space<br>",
                                "description" => "Discover the Qi flow in your space, identify blockages, and create a balanced layout to support your health.",
                                "icon" => "🔍"
                            ],
                            [
                                "title" => "Optimize Energy Flow",
                                "description" => "Learn ways to boost positive Qi with decluttering, natural light, fresh air, and calming elements.",
                                "icon" => "🌿"
                            ],
                            [
                                "title" => "Personalize Your Space",
                                "description" => "Customize your space with Feng Shui to align with your energy and enhance well-being.",
                                "icon" => "🏠"
                            ],
                            [
                                "title" => "Maintain and Thrive",
                                "description" => "Maintain positive energy with regular updates, cleansing, and seasonal adjustments for lasting balance.",
                                "icon" => "🌟"
                            ]
                        ];

                        foreach ($healthImprovementSteps as $index => $step) {
                            echo "<div class='card'>";
                            echo "<div class='card-header'>";
                            echo "<div class='card-icon'>{$step['icon']}</div>";
                            echo "<h3 class='card-title'>Step " . ($index + 1) . ": {$step['title']}</h3>";
                            echo "</div>";
                            echo "<div class='card-content'>";
                            echo "<p class='card-description'>{$step['description']}</p>";
                            echo "</div>";
                            echo "<div class='card-footer'></div>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include'./footer.php' ?>
    </body>
</html>
