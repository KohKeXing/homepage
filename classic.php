<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <title>5 Elements of Feng Shui</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        
        .flex-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start; /* 让内容靠左对齐 */
    gap: 20px;
    margin-top: 20px;
    width: 100%;
    overflow: hidden;
}

/* 卡片样式 */
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

/* 图片包装 */
.image-wrapper {
    width: 100%;
    height: 300px;
    overflow: hidden;
    margin: 20px 0;
}

/* 图片过渡动画 */
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

/* 适应小屏幕布局的调整 */
@media (max-width: 768px) {
    .flex-container {
        flex-direction: column; /* 在小屏幕上垂直排列 */
        align-items: flex-start; /* 确保内容靠左对齐 */
    }

    .card {
        width: 100%; /* 确保卡片宽度占满父容器 */
        margin-left: 0; /* 移除可能存在的左边距 */
        padding: 15px;
    }

    .image-wrapper {
        height: 250px;
    }

    .tabs-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start; /* 标签项靠左对齐 */
        gap: 10px;
    }

    .tab-trigger {
        padding: 10px;
        font-size: 16px;
    }

    .element-container {
        flex-direction: column;
        align-items: flex-start; /* 元素详情靠左对齐 */
        gap: 10px;
        width: 100%;
    }

    .element-info {
        text-align: left; /* 在小屏幕下左对齐文本 */
        width: 100%;
    }

    .element-icon {
        font-size: 40px;
    }

    .element-title {
        font-size: 20px;
    }

    .element-description,
    .element-details p {
        font-size: 14px;
    }
}

/* 较大屏幕设备的调整 */
@media (min-width: 769px) {
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
    </style>
<body>
    <?php include'./Header.php' ?>
    
    <h1 style="text-align:center;margin-top:20px;">The Elements of Feng Shui</h1>
        <div class="flex-container">
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

        <h2 style="text-align: center;">Explore the Five Key Elements</h2><br>

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
                        return 'Wood represents new beginnings, growth, and flexibility. It\'s associated with the east and southeast areas of your space.';
                    case 'fire':
                        return 'Fire symbolizes transformation, expansion, and dynamic passion. It\'s linked to the south area and can boost recognition and reputation.';
                    case 'earth':
                        return 'Earth provides grounding, stability, and nourishment. It\'s connected to the center, northeast, and southwest areas, promoting balance and harmony.';
                    case 'metal':
                        return 'Metal represents clarity, precision, and efficiency. It\'s associated with the west and northwest areas, enhancing creativity and helpful people.';
                    case 'water':
                        return 'Water embodies wisdom, intuition, and abundance. It\'s linked to the north area and can improve career prospects and life journey.';
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