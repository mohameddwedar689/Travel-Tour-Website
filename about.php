<?php
    session_start(); 
    if(isset($_SESSION['password']) && isset($_SESSION['email']))
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" type="text/css">
</head>
<body>
    <!-- Header Section Start -->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header Section End -->
    <!-- About Section Start-->
    <div class="heading" style="background: url(images/header-bg-1.png) no-repeat">
        <h1>About Us</h1>
    </div>
    <section class="about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, vero facilis minus porro qui quasi eligendi, incidunt ratione ipsa dolore enim! Vitae fuga voluptate laboriosam molestias minus. Ipsam, mollitia nostrum.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, fuga obcaecati. Sequi impedit hic minima, veritatis eius voluptates natus vitae.</p>
            <div class="icons-container">
                <div class="icon">
                    <i class="fas fa-map"></i>
                    <span>top distnations</span>
                </div>

                <div class="icon">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>

                <div class="icon">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide services</span>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End-->

    <!-- Reviews Section Start -->
    <section class="reviews">
        <h1 class="heading-title"> client reviews</h1>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, modi aut nam neque dignissimos, minus ab eaque dolor, distinctio mollitia alias ex odio quas adipisci quibusdam ut qui porro nemo.</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="images/pic-1.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis tempore error nam dolorum iste, voluptatibus ea, ab, sit obcaecati eaque commodi? Accusantium temporibus neque eius sit error dolor, placeat nobis.</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="images/pic-2.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, modi aut nam neque dignissimos, minus ab eaque dolor, distinctio mollitia alias ex odio quas adipisci quibusdam ut qui porro nemo.</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="images/pic-3.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, modi aut nam neque dignissimos, minus ab eaque dolor, distinctio mollitia alias ex odio quas adipisci quibusdam ut qui porro nemo.</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="images/pic-4.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, modi aut nam neque dignissimos, minus ab eaque dolor, distinctio mollitia alias ex odio quas adipisci quibusdam ut qui porro nemo.</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="images/pic-5.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, modi aut nam neque dignissimos, minus ab eaque dolor, distinctio mollitia alias ex odio quas adipisci quibusdam ut qui porro nemo.</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="images/pic-6.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews Section End -->
    <!-- Footer Section Start -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
                <a href="#"><i class="fas fa-envelope"></i>travel-tour@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Mansoura, Egypt</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->
    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script type="text/javascript" src="js/script.js?v=<?php echo time();?>"></script>
</body>
</html>
<?php
    }
    else
    {
        header("Location:login_form.php");
        exit();
    }
?>