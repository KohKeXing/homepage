<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Improvement Section</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f0fff4, #ffffff);
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 1rem;
        }
        h2 {
            font-size: 2rem;
            color: #166534;
            text-align: center;
            margin-bottom: 3rem;
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
                echo "<div class='card-footer'>";
                echo "<a href='#' class='btn'>Learn More</a>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

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