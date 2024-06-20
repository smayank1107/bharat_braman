<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpg.com/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="styles.css">

    <style>
        html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .container {
            position: relative;
            width: 100%;
            height: 30vh;
            /* 30% of the viewport height */
        }

        .image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 3em;
            font-family: Arial, sans-serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
    </style>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .about {
            display: flex;
            align-items: center;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: 40px auto;
            overflow: hidden;
        }

        .about .image {
            flex: 1;
            padding-right: 20px;
        }

        .about .image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about .content {
            flex: 2;
            padding-left: 20px;
        }

        .about .content h3 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }

        .about .content p {
            font-size: 1.1em;
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }

        .icons-container {
            display: flex;
            gap: 20px;
        }

        .icons {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .icons i {
            font-size: 1.5em;
            color: #007BFF;
        }

        .icons span {
            font-size: 1.1em;
            color: #555;
        }


        .reviews {
            background: var(--light-bg);
        }

        .reviews .slide {

            border: var(--border);
            background: var(-white);
            text-align: center;
        }

        .reviews {
            background-color: #f9f9f9;
            padding: 50px 0;
            text-align: center;
        }

        .reviews-slider {
            max-width: 800px;
            margin: 0 auto;
        }

        .w {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
        }

        .slide {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex: 0 0 300px;
            margin: 0 10px;
            /* padding: 20px; */
            scroll-snap-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .slide:hover {
            transform: scale(1.05);
        }

        .stars i {
            color: #ffd700;
        }

        p {

            color: #555;
            margin: 10px 0;
        }

        h3 {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }

        span {
            display: block;

            color: #999;
        }

        .review-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 15px;
        }

        @media (max-width: 600px) {
            .slide {
                flex: 0 0 90%;
            }
        }
    </style>
</head>

<body>

    <!-- headder section starts -->
    <section class="header">

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>

        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->



    <div class="container ">
        <img src="/img/mayank12.jpg" alt="About Us Image" class="image">
        <div class="overlay-text">ABOUT US</div>
    </div>

    <!-- about section starts -->

    <section class="about">
        <div class="image">
            <img src="/img/mayank11.jpg" alt="About Us Image" height="150px" width="250px">
        </div>
        <div class="content">
            <h3>Why Choose Us?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure numquam nulla iusto corporis dolor commodi libero, vitae obcaecati optio rerum ab culpa nesciunt, earum mollitia quasi ipsam non. Aliquid, iure.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid rerum, delectus voluptate aliquam quaerat iusto repellendus error nulla ab atque.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>Top Destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Affordable Prices</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Service</span>
                </div>
            </div>
        </div>
    </section>


    <!-- about section ends -->
    <!-- review section starts -->

    <section class="reviews">
        <div class="reviews-slider">
            <div class="w">
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                        adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab debitis laborum. Tempora, ullam.</p>
                    <h3>Ashoka</h3>
                    <span>Traveler</span>
                    <img class="review-image" src="/img/human2.png" alt="Ashoka">
                </div>
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                        adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab debitis laborum. Tempora, ullam.</p>
                    <h3>Jos Buttler</h3>
                    <span>Traveler</span>
                    <img class="review-image" src="/img/human1.png" alt="Jos Buttler">
                </div>
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                        adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab debitis laborum. Tempora, ullam.</p>
                    <h3>Akshita</h3>
                    <span>Photographer</span>
                    <img class="review-image" src="/img/human4.png" alt="Akshita">
                </div>
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                        adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab debitis laborum. Tempora, ullam.</p>
                    <h3>
                        <h3>Mayank</h3>
                    </h3>
                    <span>Traveler</span>
                    <img class="review-image" src="/img/human3.png" alt="Jos Buttler">
                </div>
            </div>
        </div>
    </section>


    <!-- review section ends -->


    <!-- footer section starts  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> 8955915957 </a>

                <a href="#"> <i class="fas fa-envelope"></i> smayank1107@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> sirohi, india - 307019 </a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> twitter </a>
            </div>
            <div class="credit">created by <span>mr. mayank kumar suthar</span>| rights are reserve|</div>
        </div>
    </section>


    <!-- footer section end -->


    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>
</body>

</html>