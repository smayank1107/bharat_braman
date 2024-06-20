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
        .container1 {
            position: relative;
            width: 100%;
            height: 30vh;
            /* 30% of the viewport height */
        }

        .image2 {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlay-text3 {
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
        .packages {
            padding: 50px 0;
            background-color: #f7f7f7;
            text-align: center;
        }

        .heading-title {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
        }

        .box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            transition: max-height 0.5s ease-in-out;
        }

        .box {
            /* width: 50%; */
            margin: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
            box-sizing: border-box;
            display: none;
            /* Initially hide all boxes */
        }

        .box:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .image {
            position: relative;
        }

        .image img {
            width: 70%;
            border-bottom: 3px solid #f0f0f0;
            transition: border-color 0.3s;
        }

        .image img:hover {
            border-color: #ff6347;
        }

        .content {
            padding: 15px;
        }

        .content h3 {
            font-size: 1.5em;
            color: #333;
            margin: 10px 0;
        }

        .content p {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 15px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6347;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #ff4500;
        }

        .load-more {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .load-more:hover {
            background-color: #555;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .box {
                width: 45%;
            }
        }

        @media (max-width: 480px) {
            .box {
                width: 90%;
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



    <div class="container1 ">
        <img src="/img/background-img/img9.jpg" alt="About Us Image" class="image2">
        <div class="overlay-text3">Packege</div>
    </div>

    <!-- packages section starts-->


    <section class="packages">
        <h1 class="heading-title">Top Destinations</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="/img/mayank7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/img/mayank8.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/img/mayank9.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/img/mayank10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/img/mayank12.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/img/mayank4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/img/background-img/img4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/img/background-img/img7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <button class="load-more">Load More</button>
    </section>


    <!-- package end -->
    <!-- footer section starts  -->


    <!-- footer section end -->


    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loadMoreBtn = document.querySelector('.load-more');
            const boxContainer = document.querySelector('.box-container');
            const boxes = Array.from(boxContainer.querySelectorAll('.box'));
            let itemsToShow = 6; // Show 6 items initially (3 items per row, 2 rows)

            function showBoxes() {
                boxes.forEach((box, index) => {
                    if (index < itemsToShow) {
                        box.style.display = 'block';
                    } else {
                        box.style.display = 'none';
                    }
                });

                // Hide load more button if all boxes are shown
                if (itemsToShow >= boxes.length) {
                    loadMoreBtn.style.display = 'none';
                }
            }

            loadMoreBtn.addEventListener('click', function() {
                itemsToShow += 6; // Increase items to show by 6 (2 more rows)
                showBoxes();
            });

            // Initial display setup
            showBoxes();
        });
    </script>
</body>

</html>