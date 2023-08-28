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
                    <a class="active" href="about.php">About</a>
                </li>
                <li class="link">
                    <a href="contact.php">Contact</a>
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
    <section id="page-header" class="about-header">
        <h2>#Know US</h2>
        <p>Lorem ipsum dolor sit amet.</p>
    </section>
    <section id="About-header" class="section-p1">
        <div class="content-container">

            <img src="img/about/a6.jpg" alt="about-img">
            <div class="about-content">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, placeat illo quod asperiores, nemo blanditiis quasi labore ullam tempora unde dicta excepturi repudiandae voluptates obcaecati laborum aperiam error, sint esse?</p>
                <abbr title="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam repellendus id asperiores ab enim eius.</abbr>
                <br><br>
                <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque blanditiis vitae quibusdam harum ipsum. Atque!</marquee>
            </div>
        </div>
    </section>

    <section id="about-video" class="section-p1">
        <h2>Download our <a href="#" style="color: blueviolet;">App</a></h2>
        <div class="video">
            <video src="img/about/1.mp4" muted autoplay loop></video>
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