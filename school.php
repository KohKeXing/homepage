<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Feng Shui School</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="css/school.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
    </head>
    <body>
       <body>
           <?php 
           include'./Header.php'
           ?>
    <div class="container">
        <div class="sanyuanfengshui">
            <div class="content">
                <h1 class="title">The San Yuan School</h1>
                <p class="description">
                    The San Yuan School, founded by Yang Yun Sun during the T'ang dynasty (618-906 CE),
                    is the oldest Feng Shui school with over 1,100 years of history.
                    It initially focused on Landform Classification for bural site,using a geomantic compass for alignment.
                    <br> 
                    In the Sung dynasty(960-1279 CE), it expanded to buildings, using the Flying Stars System to analyze energy flow.
                    By the Republic era,it applied its principles to structures like roads and bridges.
                    Today, San Yuan includes both Landform and Building Classification but emphasizes natural landform analysis.
                </p>
            </div>
            <div class="image-container">
                <img 
                    src="image/sanyuan1.jpg" 
                    alt="sanyuan" 
                    class="sanyuan-image"
                >
            </div>
        </div>
    </div>
           
           <div class="sanhe-container">
        <div class="image-container slide-out-left">
            <img src="image/sanhe2.jpg" alt="sanhe" class="sanhe-image" style="margin-left:250px;">
        </div>
        <div class="content">
            <h1 class="title">The San He School</h1>
            <p class="description" style='margin-right:50px;'>
             Like the San Yuan school, the San He (Three Combinations) school can be traced back to Yang Yun Sun.
             Hence, its history also goes back at least 1,000 years. 
             Instead of focusing on buildings, it focuses more on the relationship between mountains and waterways. 
             San He uses a compass that is specially developed for use in Landform Classification. Thus, San He is especially useful in environments with complex arrangements of mountains, valleys, and water systems. 
            </p>
        </div>
    </div>
</div>

<div class="container">
        <div class="xuankongfengshui">
            <div class="content">
                <h1 class="title">The Xuan Kong School</h1>
                <p class="description">
                    The Xuan Kong (Mysterious Subtleties) school, founded by Hsü Jen-wang during the Sung dynasty (960-1279 CE), has a history of over 800 years.
                    Originally focused on buildings, it complemented San Yuan, which prioritized landforms. 
                    Both schools use the luo pan and the Flying Stars system to analyze energy flow but interpret the numbers differently. 
                    During the Ch'ing dynasty (1644-1911 CE), Xuan Kong expanded to include landform classification. 
                    Today, it is a comprehensive feng-shui system emphasizing buildings while incorporating both Landform and Building Classification.
                </p>
            </div>
            <div class="image-container">
                <img 
                    src="image/xuankong.webp" 
                    alt="xuankong" 
                    class="xuankong-image"
                >
            </div>
        </div>
    </div>

         <div class="banzhai-container">
    <div class="image-container">
        <img src="image/bazhai.jpeg" alt="bazhai" class="bazhai-image" style="margin-left:250px;margin-bottom:50px;">
    </div>
    <div class="content">
        <h1 class="title">The Eight Mansions (Ba Zhai)</h1>
        <p class="description">
            The Eight Mansions (Ba Zhai) school, the newest in traditional Chinese Feng Shui, has a 300-year history.
            Designed for buildings, it aligns a person's guardian star (based on their birth year) with the main entrance direction of a house.
            People are classified as either "west" or "east" types. If the house entrance aligns with the occupant’s guardian star, it brings good fortune.
            The school uses an eight-point compass (four cardinal and four diagonal directions) to identify positive and negative energy zones in a house.
        </p>
    </div>
</div>

<?php 
    include'./footer.php'
?>           
           
</body>
</html>