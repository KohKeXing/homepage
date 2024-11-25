<!--

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */-->

 <footer>
        <div class="rowfoot">
            <div class="colfoot">
                <p class="parafoot">Choose us for expert Feng Shui guidance tailored to your unique needs.
                With years of experience and a deep understanding of Period 9 energy,
                we provide personalized consultations that align your home and business with the most favorable energies. 
                <br><br>
                Our goals is to help you create balance,prosperity and well-being in all areas of your life.
                Trust us to navigate the transformative shifts of the new era with knowledge,care and precision. </p>
                <br>
               
            </div>
            <div class="colfoot">
                <h3>Contact Us<div class="underline"><span class="uline"></span></div>
                </h3>
                <p class="parafoot">Penthouse, 10th Floor,</p>
                <p class="parafoot">Wisma Penang Garden,</p>
                <p class="parafoot" style="white-space:nowrap;">42, Jalan Sultan Ahmad Shah,</p>
                <p class="parafoot">10050 Penang,Malaysia</p>
                <p class="email-id">Wailoon9799@gmail.com</p>
                <h4><a class="callus" href="tel:+017-6689381">(+6) 017-6689381</a></h4>
            </div>
            <div class="colfoot">
                <h3>Navigation<div class="underline"><span class="uline"></span></div>
                </h3>
                <ul class="footnav">
                    <li><a href="homepage.php">Home</a></li>
                      <li class="submenu">
                    <a href="#">Classic FengShui</a>
                    <ul class="sub-menu">
                        <li><a href="school3.php">School</a></li>
                        <li><a href="trinityluck.php">Trinity Luck</a></li>
                        <li><a href="elements.php">5 Elements of Feng Shui</a></li>
                       
                    </ul>
                </li>
                      <li class="submenu">
                    <a href="#">Future World In AI</a>
                    <ul class="sub-menu">
                        <li><a href="workplace.php">Future Workplace</a></li>
                        <li><a href="workforce.php">Future Workforce</a></li>
                        <li><a href="house.php">Importance Factor of House</a></li>
                    </ul>
                </li>
                    <li><a href="register.php">Login</a></li>
                </ul>
            </div>
            <div class="colfoot">
                <h3 style="font-size: 14px;" class="fblow">Find Us With Below!<br>
                    <div class="underline"><span class="uline"></span></div>
                </h3>
                <div class="icon-logo">
                    <a href="https://www.instagram.com/master_wailoon?igsh=eTRtczQwb2phNmNh" target="_blank">
                        <button id="insta" style="background-image:url('image/instalogo.png');background-size: cover; width: 45px;height: 43px; border:none;"></button></a>
                    <a href="https://www.facebook.com/ooiwailoon?mibextid=ZbWKwL" target="_blank">
                        <button id="facebook" style="background-image: url('image/facebooklogo.png');background-size: cover; width: 45px;height: 43px; border:none;"></button></a>
                    <a href="mailto:Wailoon9799@gmail.com?subject=Your%20Subject&body=Hello,%20I%20would%20like%20to%20talk%20to%20you." target="_blank">
                        <button id="email" style="background-image: url('image/maillogo.png');background-size: cover; width: 45px;
                                                               height: 43px;border:none;"></button></a>
                    <a href="https://wa.me/60176689381?text=Hello%2C%20I%20would%20like%20to%20talk%20to%20you" target="_blank">
                        <button id="phone" style="background-image: url('image/whatsapplogo.png');background-size: cover; width: 45px;
                                                                height: 43px; border:none;"></button></a>
                </div>
            </div>
        </div>
        <hr>
        <p class="parafoot" style="text-align: center; font-size: 16px;margin-left:20px;">© 2024 Master Ooi Wai Loon. All rights reserved.</p>
    </footer>
</div>
<!-- End Of Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


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

h3{
    font-size: 16px;
}

/*make gap for email*/
.email-id {
    color: #999DA0;
    width: fit-content;
    margin: 20px 0;
}

.callus{
    font-size: 14px;
}

/*footer links*/
.callus,
.parafoot,
ul li a {
    color: #999DA0;
    text-decoration: none;
}

.parafoot{
    margin: 0;

}

/*footer links when hovered*/
.callus:hover,
ul li a:hover {
    opacity: 0.8;
    color:white;
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

.icon-logo{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:10px;
}

.icon-logo a{
    display:inline-block;
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
        flex-basis: 100%
    }

    .colfoot:nth-child(2),
    .colfoot:nth-child(3) {
        flex-basis: 100%;
    }
}

@media (max-width: 1300px) {
    .fblow{
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
    right: 0; /* Align the submenu to the right side of the parent */
    background-color: #282d32;
    padding: 10px 0;
    list-style: none;
    box-shadow: 0 8px 16px rgba(0,0,0,0.3);
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

/*END OF FOOTER CSS*/

            </style>

