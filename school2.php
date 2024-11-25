<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Feng Shui School</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            }

            body {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                background: white; /* White background */
                overflow-x: hidden;
                color: black; /* Black text color */
            }

            .container {
                padding: 2rem;
                max-width: 1000px;
                margin: 0 auto;
            }

            .hero {
                text-align: center;
                padding: 2rem;
                background: #2e7d32; /* Green background */
                color: white;
                border-radius: 12px;
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
                margin-bottom: 2rem;
                transition: transform 0.3s ease-in-out;
            }

            .hero:hover {
                transform: translateY(-5px);
            }

            .hero-image {
                max-width: 100%;
                height: auto;
                width: 400px;
                margin-top: 1rem;
                border-radius: 8px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            }

            .tabs {
                display: flex;
                justify-content: center;
                gap: 1rem;
                margin-top: 2rem;
            }

            .tab-btn {
                padding: 0.7rem 1.5rem;
                cursor: pointer;
                background: #f5f5f5;
                border: 2px solid #2e7d32; /* Green border */
                border-radius: 20px;
                color: black;
                font-weight: bold;
                transition: all 0.3s ease;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .tab-btn:hover {
                background: #2e7d32; /* Green background on hover */
                color: white;
                transform: translateY(-2px);
            }

            .tab-btn.active {
                background: black;
                color: white;
                border-color: black; /* Black border for active tab */
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            }

            .tab-content {
                display: none;
                margin-top: 2rem;
                padding: 2rem;
                background: #f5f5f5;
                border-radius: 12px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
                animation: fadeIn 0.5s ease-in-out;
                text-align: center;
            }

            .tab-content.active {
                display: block;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            h2 {
                font-size: 2rem;
                margin-bottom: 1rem;
            }

            h3 {
                font-size: 1.5rem;
                color: #2e7d32; /* Green color for subheadings */
            }

            p {
                color: #333;
                line-height: 1.6;
            }
        </style>
    </head>
    <body>
        <main class="container">
            <section id="hero" class="hero">
                <h2>Discover The Ancient Wisdom of Feng Shui</h2>
                <p>Explore the four main schools and their unique approaches to harmony and balance</p>
                <img src="image/background3.png" alt="Feng Shui" class="hero-image">
            </section>
            
            <section id="schools" class="schools-section">
                <h2 style="text-align: center;">The Four Main Schools of Feng Shui</h2>
                <div class="tabs">
                    <button class="tab-btn active" data-tab="sanyuan">The San Yuan School</button>
                    <button class="tab-btn" data-tab="sanhe">The San He School</button>
                    <button class="tab-btn" data-tab="xuankong">The Xuan Kong School</button>
                    <button class="tab-btn" data-tab="eightmansions">The Eight Mansions (Ba Zhai)</button>
                </div>
                <div class="tabs-content">
                    <div class="tab-content active" id="sanyuan">
                        <h3>The San Yuan School</h3>
                        <p>The San Yuan School focuses on the influence of time and space on energy. It utilizes the "Flying Stars" method to analyze the energy patterns in your environment.</p>
                    </div>
                    <div class="tab-content" id="sanhe">
                        <h3>The San He School</h3>
                        <p>The San He School emphasizes the natural landscape and surroundings. It analyzes mountains, rivers, and the flow of energy to harmonize your space.</p>
                    </div>
                    <div class="tab-content" id="xuankong">
                        <h3>The Xuan Kong School</h3>
                        <p>The Xuan Kong School integrates numerology and directions. It aims to balance the energies in your environment based on time cycles and spatial arrangements.</p>
                    </div>
                    <div class="tab-content" id="eightmansions">
                        <h3>The Eight Mansions (Ba Zhai)</h3>
                        <p>The Eight Mansions School assigns favorable and unfavorable directions based on your personal Kua number, optimizing your space for better energy flow.</p>
                    </div>
                </div>
            </section>
        </main>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const tabs = document.querySelectorAll('.tab-btn');
                const tabContents = document.querySelectorAll('.tab-content');
                
                tabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        // Remove 'active' class from all buttons
                        tabs.forEach(t => t.classList.remove('active'));
                        tab.classList.add('active');
                        
                        // Show the corresponding tab content
                        tabContents.forEach(content => {
                            content.classList.remove('active');
                            if (content.id === tab.dataset.tab) {
                                content.classList.add('active');
                            }
                        });
                    });
                });
            });
        </script>
    </body>
</html>
