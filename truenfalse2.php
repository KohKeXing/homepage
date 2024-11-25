<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True and False</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        body {
            min-height: 1000px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            overflow-x: hidden;
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
        
        .card, .card2 {
            background-color: #ffe4e4;
            border-radius: 12px;
            width: 350px; /* 减小宽度 */
            height: 400px; /* 减小高度 */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; /* 垂直居中内容 */
            padding: 1.5rem; /* 减小内边距 */
            margin-bottom: 2rem;
            position: relative;
        }

        .card-content, .card-content2 {
            position: static; /* 取消绝对定位 */
            transform: none; /* 移除transform */
            width: 100%;
            text-align: center;
            margin-bottom: 1rem; /* 添加底部间距 */
        }

        .x-icon, .x-icon2 {
            color: #ff0000;
            font-size: 2.5rem; /* 稍微减小图标大小 */
            margin-bottom: 0.5rem; /* 减小底部间距 */
            font-weight: bold;
        }

        .card-label, .card-label2 {
            color: #cc0000;
            font-size: 1.25rem; /* 稍微减小字体大小 */
            margin-bottom: 0.5rem; /* 减小底部间距 */
            font-weight: bold;
        }

        .card-text, .card-text2 {
            color: #990000;
            font-size: 22px; /* 稍微减小字体大小 */
            font-weight: bold;
            word-wrap: break-word;
            max-width: 100%;
            margin-bottom: 1rem; /* 添加底部间距 */
        }

        .card2 {
            background-color: #d2ffc7;
        }

        .x-icon2 {
            color: #317022;
        }

        .card-label2 {
            color: #33b315;
        }

        .card-text2 {
            color: #317022;
        }

        .controls-container {
            position: static; /* 取消绝对定位 */
            transform: none; /* 移除transform */
            width: 100%;
        }

        .navigation, .navigation2 {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1rem;
            width: 100%;
        }

        .nav-button, .nav-button2 {
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

        .nav-button:hover, .nav-button2:hover {
            background-color: #f5f5f5;
        }

        .counter, .counter2 {
            color: #666;
        }

        .progress-container, .progress-container2 {
            width: 100%;
            max-width: 300px;
            height: 8px;
            background-color: #eee;
            border-radius: 4px;
            overflow: hidden;
            margin: 0 auto;
        }

        .progress-bar, .progress-bar2 {
            width: 12.5%;
            height: 100%;
            background-color: #000;
            transition: width 0.3s ease;
        }

        @media (max-width: 1024px) {
            .cards-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="cards-container">
        <!-- First card -->
        <div class="card-section">
            <div class="card">
                <div class="card-content">
                    <div class="x-icon">✕</div>
                    <div class="card-label">DON'T Do This:</div>
                    <div class="card-text" id="principle">Lucky Color</div>
                </div>
                <div class="controls-container">
                    <div class="navigation">
                        <button class="nav-button" onclick="previousPrinciple()">←</button>
                        <span class="counter" id="counter">1 of 8</span>
                        <button class="nav-button" onclick="nextPrinciple()">→</button>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" id="progress"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second card -->
        <div class="card-section">
            <div class="card2">
                <div class="card-content2">
                    <div class="x-icon2">✓</div>
                    <div class="card-label2">Do This:</div>
                    <div class="card-text2" id="principle2">Good Environment</div>
                </div>
                <div class="controls-container">
                    <div class="navigation2">
                        <button class="nav-button2" onclick="previousPrinciple2()">←</button>
                        <span class="counter2" id="counter2">1 of 8</span>
                        <button class="nav-button2" onclick="nextPrinciple2()">→</button>
                    </div>
                    <div class="progress-container2">
                        <div class="progress-bar2" id="progress2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const principles = [
            "Lucky Color",
            "Lucky Number",
            "Decorative Item(Horse,Dragon)",
            "Too Many Taboos",
            "Religious",
            "No Scientific Evidence",
            "Local Tradition/Culture",
            "Not Feng Shui At All"
        ];

        let currentIndex = 0;

        function updateDisplay() {
            document.getElementById('principle').textContent = principles[currentIndex];
            document.getElementById('counter').textContent = `${currentIndex + 1} of ${principles.length}`;
            document.getElementById('progress').style.width = `${((currentIndex + 1) / principles.length) * 100}%`;
        }

        function nextPrinciple() {
            currentIndex = (currentIndex + 1) % principles.length;
            updateDisplay();
        }

        function previousPrinciple() {
            currentIndex = (currentIndex - 1 + principles.length) % principles.length;
            updateDisplay();
        }

        const principles2 = [
            "Good Environment",
            "Good Direction",
            "Matching direction to You",
            "Right Main Entrance",
            "Choice of Bedroom",
            "Right Bed Angle",
            "Good Kitchen Stove",
            "Simple Feng Shui"
        ];

        let currentIndex2 = 0;

        function updateDisplay2() {
            document.getElementById('principle2').textContent = principles2[currentIndex2];
            document.getElementById('counter2').textContent = `${currentIndex2 + 1} of ${principles2.length}`;
            document.getElementById('progress2').style.width = `${((currentIndex2 + 1) / principles2.length) * 100}%`;
        }

        function nextPrinciple2() {
            currentIndex2 = (currentIndex2 + 1) % principles2.length;
            updateDisplay2();
        }

        function previousPrinciple2() {
            currentIndex2 = (currentIndex2 - 1 + principles2.length) % principles2.length;
            updateDisplay2();
        }

        // Initial calls to set up the display
        updateDisplay();
        updateDisplay2();
    </script>
</body>
</html>