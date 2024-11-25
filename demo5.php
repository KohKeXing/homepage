<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feng Shui Footer</title>
    <style>
        footer {
            background: #282d32;
            color: #fff;
            padding: 100px 0 30px;
            font-size: 13px;
            line-height: 20px;
        }

        /*put div into horizontal row*/
        .rowfoot {
            width: 85%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
        }

        /*1st collumn only take 25% space of footer*/
        .colfoot {
            flex-basis: 25%;
            padding: 10px;
        }

        /*2nd & 3rd collumn only take 15% space of footer*/
        .colfoot:nth-child(2),
        .colfoot:nth-child(3) {
            flex-basis: 15%;
        }

        .logofoot {
            width: 80px;
            margin-bottom: 30px;
        }

        .colfoot h3 {
            width: fit-content;
            margin-bottom: 40px;
            position: relative;
        }

        h3 {
            font-size: 16px;
        }

        /*make gap for email*/
        .email-id {
            color: #999DA0;
            width: fit-content;
            margin: 20px 0;
        }

        .callus {
            font-size: 14px;
        }

        /*footer links*/
        .callus,
        .parafoot,
        ul li a {
            color: #999DA0;
            text-decoration: none;
        }

        .parafoot {
            margin: 0;
        }

        /*footer links when hovered*/
        .callus:hover,
        ul li a:hover {
            opacity: 0.8;
            color: white;
        }

        /*footer nav*/
        ul li {
            list-style: none;
            margin-bottom: 12px;
        }

        /*line above copyright*/
        hr {
            width: 90%;
            border: 0;
            border-bottom: 1px solid #ccc;
            margin: 20px auto;
        }

        /*underline under footer title*/
        .underline {
            width: 100%;
            height: 5px;
            background: #767676;
            border-radius: 3px;
            position: absolute;
            top: 25px;
            left: 0;
            overflow: hidden;
        }

        /*underline animation*/
        .underline .uline {
            width: 15px;
            height: 100%;
            background: #fff;
            border-radius: 3px;
            position: absolute;
            top: 0;
            left: 10px;
            animation: moving 2s linear infinite;
        }

        /*footer social media icons*/
        button#insta,
        button#facebook,
        button#twitter,
        button#email,
        button#phone {
            border-radius: 50%;
            margin-left: 4px;
            margin-right: 4px;
        }

        .icon-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .icon-logo a {
            display: inline-block;
        }

        /*footer social media icons when hovered*/
        button#insta:hover,
        button#facebook:hover,
        button#twitter:hover,
        button#email:hover,
        button#phone:hover {
            transform: scale(1.2);
        }

        @keyframes moving {
            0% {
                left: -20px;
            }

            100% {
                left: 100%;
            }
        }

        @media (max-width: 700px) {
            footer {
                bottom: unset;
            }

            .colfoot {
                flex-basis: 100%;
            }

            .colfoot:nth-child(2),
            .colfoot:nth-child(3) {
                flex-basis: 100%;
            }
        }

        @media (max-width: 1300px) {
            .fblow {
                font-size: 12px;
            }
        }

        /* Submenu styles */
        .footnav li.submenu {
            position: relative;
        }

        /* Hide submenu by default */
        .sub-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #282d32;
            padding: 10px 0;
            list-style: none;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
        }

        .sub-menu li {
            margin: 0;
        }

        .sub-menu li a {
            padding: 8px 20px;
            color: #999DA0;
            display: block;
            text-decoration: none;
        }

        /* Change color on hover */
        .sub-menu li a:hover {
            color: white;
            background-color: #444;
        }

        /* Display submenu when hovering over parent */
        .submenu:hover .sub-menu {
            display: block;
        }
    </style>
</head>
<body>

<footer>
    <div class="rowfoot">
        <div class="colfoot">
            <p class="parafoot">Choose us for expert Feng Shui guidance tailored to your unique needs. With years of experience...</p>
        </div>
        <div class="colfoot">
            <h3>Contact Us<div class="underline"><span class="uline"></span></div></h3>
            <p class="parafoot">Penthouse, 10th Floor, Wisma Penang Garden, 42, Jalan Sultan Ahmad Shah, 10050 Penang, Malaysia</p>
            <p class="email-id">Wailoon9799@gmail.com</p>
            <h4><a class="callus" href="tel:+017-6689381">(+6) 017-6689381</a></h4>
        </div>
        <div class="colfoot">
            <h3>Navigation<div class="underline"><span class="uline"></span></div></h3>
            <ul class="footnav">
                <li><a href="home.php">Home</a></li>
                <!-- Classic FengShui with a submenu -->
                <li class="submenu">
                    <a href="event.php">Classic FengShui</a>
                    <ul class="sub-menu">
                        <li><a href="fengshui_basics.php">Feng Shui Basics</a></li>
                        <li><a href="fengshui_elements.php">Five Elements</a></li>
                        <li><a href="fengshui_ba_zhi.php">Ba Zhi (8 Mansions)</a></li>
                        <li><a href="fengshui_lucky_directions.php">Lucky Directions</a></li>
                    </ul>
                </li>
                <li><a href="displayTicket.php">Future World In AI</a></li>
                <li><a href="aboutus.php">Services</a></li>
                <li><a href="feedback.php">Contact Us</a></li>
                <li><a href="faq.php">Login</a></li>
            </ul>
        </div>
        <div class="colfoot">
            <h3 style="font-size: 14px;" class="fblow">Find Us With Below!<br>
                <div class="underline"><span class="uline"></span></div>
            </h3>
            <div class="icon-logo">
                <a href="https://www.instagram.com" target="_blank"><button id="insta"></button></a>
                <a href="https://www.facebook.com" target="_blank"><button id="facebook"></button></a>
                <a href="mailto:Wailoon9799@gmail.com" target="_blank"><button id="email"></button></a>
                <a href="https://wa.me/60176689381" target="_blank"><button id="phone"></button></a>
            </div>
        </div>
    </div>
    <hr>
    <p class="parafoot" style="text-align: center; font-size: 16px;margin-left:20px;">© 2024 Master Ooi Wai Loon. All rights reserved.</p>
</footer>

</body>
</html>
