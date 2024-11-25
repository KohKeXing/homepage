<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinity Luck</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/trinityluck.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
</head>
<body>
    <?php 
    include './Header.php';
    ?>
    
    <div class="help-container">
        <h2 class="help-title">Trinity Luck</h2>
        <div class="outer-container">
            <div class="card-grid">
                <?php 
                $cards = [
                    ['title' => 'Heaven Luck', 'image' => 'image/heavenluck.jpg', 'description' => 'The luck we are born with, predetermined before birth.'],
                    ['title' => 'Earth Luck', 'image' => 'image/earthluck.jpg', 'description' => 'The luck associated with Feng Shui and our environment.'],
                    ['title' => 'Man Luck', 'image' => 'image/manluck.jpg', 'description' => 'The luck we create through our actions and choices.']
                ];
                foreach($cards as $card) {
                    echo "
                        <div class='card'>
                            <div class='card-content'>
                                <h2 class='card-title'>{$card['title']}</h2>
                                <img src='{$card['image']}' alt='{$card['title']}' class='card-image'>
                                <p class='card-description'>{$card['description']}</p>
                            </div>
                        </div>";
                }
                ?>
            </div>
        </div>
    </div>
    
    <div class="button-container">
        <button onclick="showDetails('heaven')">Heaven Luck Details</button>
        <button onclick="showDetails('earth')">Earth Luck Details</button>
        <button onclick="showDetails('man')">Man Luck Details</button>
    </div>
    <div id="luck-details" class="luck-details"></div>
       
    <script>
        function showDetails(luckType) {
            const detailsDiv = document.getElementById('luck-details');
            let content = '';
            
            switch(luckType) {
                case 'heaven':
                    content = `
                        <h3>Heaven Luck - The Blueprint</h3>
                        <p>Heaven Luck is the blueprint that heaven has gifted us with and contains the secrets that will lead us to our life's purpose, or our soul's purpose. It allows you to decode vital information about yourself to gain clarity towards the world and about your life to date.</p>
                        <p>While we have little control over this type of Luck, having said that, our ultimate Destiny is still a choice.</p>
                    `;
                    break;
                case 'earth':
                    content = `
                        <h3>Earth Luck - Environmental Harmony</h3>
                        <p>Earth Luck is specifically associated with Feng Shui. Earth luck is determined by the relationship between man and earth where it points to the influences of our location and where we lead our lives everyday.</p>
                        <p>Classical Feng Shui is based on The Five Element Theory and helps reduce the negative energy around us while harnessing the benevolent energy in our surroundings to bring us prosperity, harmony and joy.</p>
                    `;
                    break;
                case 'man':
                    content = `
                        <h3>Man Luck - Personal Development</h3>
                        <p>This is the luck we create for ourselves – and the one luck we have complete control over. It is created from our very own thoughts, virtues, actions and ideas. It is what we achieve through our education, our talents, our behaviour and the work we do to reach our goals.</p>
                        <p>Man Luck includes our cultural and religious beliefs as well as the moral codes that we stand by, the charities we get involved in and our willingness to help others and the environment around us.</p>
                    `;
                    break;
            }

            detailsDiv.innerHTML = content;
        }
    </script>
    
    <?php 
    include './footer.php';
    ?>
</body>
</html>