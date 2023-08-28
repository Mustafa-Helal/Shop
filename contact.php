<?php require_once'inc/conn.php'; ?>
<?php

if(!isset($_SESSION['user_id'])) {
    header("Location:login.php");
    exit();
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog page</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/index_style.css">
</head>

<body>

    <!-- Start header -->

    <section id="header">

        <a href="index.php">
            <img src="img/logo.png" alt="homeLogo">
        </a>
        <div>
            <ul id="navbar">
                <li class="link">
                    <a href="index.php">Home</a>
                </li>
                <li class="link">
                    <a href="shop.php">Shop</a>
                </li>
                <li class="link">
                    <a href="blog.php">Blog</a>
                </li>
                <li class="link">
                    <a href="about.php">About</a>
                </li>
                <li class="link">
                    <a class="active" href="contact.php">Contact</a>
                </li>
                <li class="link">
                    <a id="lg-cart" href="cart.php">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>

        </div>
        <div id="mobile">
            <a href="cart.html">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <a href="#" id="bar"> <i class="fas fa-outdent"></i> </a>
        </div>
    </section>

    <!-- End header -->
    <section id="page-header" class="about-header contact-header">
        <h2>#Lets-talk</h2>
        <p>Lorem ipsum dolor sit amet.</p>
    </section>
    <section id="contact-header" class="section-p1">
        <div class="content-container">

            <div class="contact-content">
                <p class="header">GET IN TOUCH</p>
                <h3>Visit one of our agency locations or contact us today</h3>

                <h6>Head office: </h6>
                <div class="address-data">
                    <p>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Head office 123 Main St New York, NY 10001</span>

                    </p>
                </div>
                <div class="address-data">
                    <p>
                        <i class="fas fa-phone-alt"></i>
                        <span>Contact@Example.com</span>
                    </p>
                </div>
                <div class="address-data">
                    <p>
                        <i class="fas fa-envelope"></i>
                        <span>Contact@Example.com</span>
                    </p>
                </div>
                <div class="address-data">
                    <p>
                        <i class="fas fa-clock"></i>
                        <span>Sat-Thus:</span>
                        <span>9 00 Am to 22 Pm</span>
                    </p>
                </div>

            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110370.52192847416!2d31.082146167755113!3d30.177742629152906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x801d300948b25925!2z2K3Yp9is2Kkg2K3ZhNmI2Kkg2YTYrtin2YXYp9iqINmIINmF2LPYqtmE2LLZhdin2Kog2KfZhNit2YTZiNmK2KfYqg!5e0!3m2!1sen!2seg!4v1655511400787!5m2!1sen!2seg"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>


    <section id="contact-form" class="section-m1 section-p1">
        <form action="">
            <p class="header">Leave a Message</p>
            <h3>We love to hear from you</h3>
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea placeholder="Your Message"></textarea>
            <button class="normal">send</button>

        </form>
        <div class="people">
            <div>
                <img src="img/people/1.png" alt="people">
                <h6>Jhon Doe</h6>
                <p>senior markting manger</p>
                <p>Phone : <span>+20461568748</span></p>
                <p>email : <span>subject@example.com</span></p>
            </div>
            <div>
                <img src="img/people/2.png" alt="people">
                <h6>Jhon Doe</h6>
                <p>senior markting manger</p>
                <p>Phone : <span>+20461568748</span></p>
                <p>email : <span>subject@example.com</span></p>
            </div>
            <div>
                <img src="img/people/3.png" alt="people">
                <h6>Jhon Doe</h6>
                <p>senior markting manger</p>
                <p>Phone : <span>+20461568748</span></p>
                <p>email : <span>subject@example.com</span></p>
            </div>
        </div>
    </section>




    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newletters</h4>
            <p>Get E-mail Updates about our latest shop and <span class="text-warning">Special Offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Enter Your E-mail...">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <a href="index.html"><img class="logo" src="img/logo.png" alt=""></a>
            <h4>Contact</h4>
            <p><strong>Address: </strong>526 manchster Road, street 32, manchster</p>
            <p><strong>Phone: </strong>0106244875</p>
            <p><strong>Hourse: </strong>10AM - 10Pm, Sat- thus</p>
            <div class="follow">
                <h4>Follow US :</h4>
                <div class="icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

        </div>
        <div class="col">
            <h4>About Us</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery information</a>
            <a href="#">Privacy policy</a>
            <a href="#">Terms & Condtions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign in</a>
            <a href="#">View Cart</a>
            <a href="#">My Whishlist</a>
            <a href="#">Track My order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store Or Google Play</p>
            <div class="oo">
                <img src="img/pay/app.jpg " alt=" ">
                <img src="img/pay/play.jpg " alt=" ">
            </div>
            <p>Secure payment For your happy Service</p>
            <img src="img/pay/pay.png " alt=" ">
        </div>

        <div class="copyright">
            <p> all The right reserved for OmarTurbo, 2022</p>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>



</html>