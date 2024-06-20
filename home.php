<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpg.com/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> -->

    <!-- custom css file link -->
    <link rel="stylesheet" href="styles.css">

    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            width: 100%;
            height: auto;
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
            <a href="weather.html">weather</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->



    <!-- home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide" style="background:url(/img/mayank4.jpg) no-repeat">
                        <div class="content">
                            <span>explore, discover, travel</span>
                            <h3>travel arround the world</h3>
                            <a href="package.php" class="btn">discover more</a>
                        </div>
                    </div>
                    <div class="swiper-slide slide" style="background:url(/img/mayank5.jpg) no-repeat">
                        <div class="content">
                            <span>explore, discover, travel</span>
                            <h3>descover the new places</h3>

                            <a href="package.php" class="btn">discover more</a>
                        </div>
                    </div>
                    <div class="swiper-slide slide" style="background:url(/img/mayank6.jpg) no-repeat">
                        <div class="content">
                            <span>explore, discover, travel</span>
                            <h3>descover the new places</h3>

                            <a href="package.php" class="btn">discover more</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
    </section>
    <!-- home section ends -->

    <section class="home-about">

        <div class="image">
            <img src="/img/about-us.png" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis,
                provident voluptate?Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis,
                provident voluptate</p>

            <a href="about.php" class="btn">read more</a>

        </div>
        </div>
    </section>

    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title"> our services </h1>
        <div class="box-container">

            <div class="box image-container">

                <img width="80px" height="60px" src="/img/Adventure-pana.png" alt="">

                <h3>adventure</h3>
            </div>
            <div class="box image-container">
                <img width="80px" height="60px" src="/img/Tour guide-pana.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box image-container">
                <img width="80px" height="60px" src="/img/Taking care of the Earth-bro.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box image-container">
                <img width="80px" height="60px" src="/img/Campfire-pana.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box image-container">
                <img width="80px" height="60px" src="/img/Off road-bro.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box image-container">
                <img width="80px" height="60px" src="/img/Camping-cuate.png" alt="">
                <h3>camping</h3>
            </div>
        </div>

    </section>
    <!-- service section end -->


    <!-- home packages section starts-->


    <section class="home-packages">
        <h1 class="heading-title"> our packages </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="/img/background-img/img12.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/img/background-img/img10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/img/background-img/img7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>




    <!-- <section class="home-packages">
        <h1 class="heading-title"> our packages </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    
                    <img src="/img/background-img/img12.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="/img/background-img/img10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">Book now</a>

                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="/img/background-img/img7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">Book now</a>

                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section> -->
    <!-- home package section ends -->
    <!-- home offer section start -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid
                nesciunt maiores quas! Magni cumque quaerat saepe!</p>
            <a href="book.php" class=></a>
        </div>
    </section>
    <!-- home offer section ends -->








    <!-- footer section starts -->
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script>
        const swiper = new Swiper('.swiper-container', {
            direction: 'horizontal',
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script src="script.js"></script>

</body>

</html>