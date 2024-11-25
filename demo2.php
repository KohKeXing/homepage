<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Improvement Section</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f0f9ff, #e1f5d4);
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 1rem;
        }
        h2 {
            font-size: 2.5rem;
            color: #2d6a4f;
            text-align: center;
            margin-bottom: 3rem;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
        }
        .card-grid {
            display: flex;  /* Flex container for horizontal layout */
            justify-content: space-between;  /* Distribute cards evenly */
            gap: 2rem;  /* Space between cards */
            flex-wrap: nowrap;  /* Prevent wrapping of cards */
        }
        .card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease-in-out;
            overflow: hidden;
            flex: 1;  /* Allow cards to stretch equally */
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
            font-weight: 300; /* Softer font weight */
            color: #777; /* Softer font color */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>How We Help You To Improve Health</h2>
        <div class="card-grid">
            <?php
            $healthImprovementSteps = [
                [
                    "title" => "Assess Your Space",
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
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
