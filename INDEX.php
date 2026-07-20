<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store Website</title>
    <link rel="icon" type="image" href="image/logo.png">
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <section>

        <nav>

            <div class="logo">
                <img src="image/logo.png">
            </div>

            <ul>
                <li><a href="INDEX.php">Home</a></li>
                <li><a href="oasis_about.php">About</a></li>
                <li><a href="oasis_contact.php">Contact</a></li>
                <li><a href="mainpg.php">Categories</a></li>
                <li><a href="cart.php">Add to Cart</a></li>
                
            </ul>

            <div class="social_icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>
                <button type="button" class="sbtn" onclick=window.location.href="register_form.php">Sign-In</button>
                <button type="button" class="sbtn" onclick=window.location.href="login_form.php">Log-In</button>


            </div>

        </nav>

        <div class="main">

            <div class="main_tag">
                <h1>WELCOME TO<br><span>BOOK OASIS</span></h1>

                <p>
                Welcome to Book Oasis , your one-stop destination for all things literary! Whether you're a passionate reader, a student, 
                or someone looking for the perfect gift, we offer a diverse collection of books across genres—fiction, non-fiction, self-help, 
                academic, and more. Our carefully curated selection ensures there's something for everyone, from bestsellers to hidden gems. 
                Explore our cozy, welcoming environment both in-store and online, where stories come to life, and knowledge is always at
                 your fingertips. Let us help you find your next great read!
                </p>
                <a href="mainpg.php" class="main_btn">Get Started</a>

            </div>

            <div class="main_img">
                <img src="image/table.png">
            </div>

        </div>

    </section>




    <!--Services-->

    <div class="services">

        <div class="services_box">

            <div class="services_card">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Fast Delivery</h3>
                <p>
                Our 24/7 service ensures you can shop for your favorite books anytime, anywhere, with support always 
                available when you need it!
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-headset"></i>
                <h3>24 x 7 Services</h3>
                <p>
                Our 24/7 service ensures you can shop for your favorite books anytime, anywhere, with support always available when you need it!
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-tag"></i>
                <h3>Best Deal</h3>
                <p>
                You will discover the best deals on this platform on a wide range of books, offering unbeatable prices without compromising on quality!
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-lock"></i>
                <h3>Secure Payment</h3>
                <p>
                Shop with confidence using our secure payment options, ensuring your transactions are safe and protected every time.
                </p>
            </div>

        </div>

    </div>




    <!--About-->

    <div class="about">

        <div class="about_image">
            <img src="image/about.png">
        </div>
        <div class="about_tag">
            <h1>About Us</h1>
            <p>
            Welcome to BOOK OASIS, your go-to platform for discovering and enjoying a vast collection of books across various genres.
             Our mission is to make reading accessible to everyone by offering both free and premium books tailored to your preferences 
             and location.  At BOOK OASIS, we
             believe in the power of books to inspire, educate, and entertain, and we are committed to bringing that experience 
             to readers around the world.
            </p>
            <a href="oasis_about.php" class="about_btn">Learn More</a>
        </div>

    </div>





   


    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="tag">
                <img src="image/logo.png">
                <p>
                Your trusted online bookstore for all your reading needs. We offer a wide range of genres, fast delivery, secure payments, and 
                24/7 customer support to ensure a seamless shopping experience. Browse through our carefully curated collection and 
                discover your next favorite read with ease.
                </p>

            </div>

            <div class="tag">
                <h1>Quick Link</h1>
                <a href="INDEX.php">Home</a>
                <a href="oasis_about.php">About</a>
                <a href="oasis_contact.php">Contact</a>
                
                
            </div>

            <div class="tag">
                <h1>Contact Info</h1>
                <a href="#"><i class="fa-solid fa-phone"></i>+91 12345 67892</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+91 32444 69911</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>bookstore123@gmail.com</a>
                
            </div>

            <div class="tag">
                <h1>Follow Us</h1>
                <div class="social_link">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
                
            </div>

            <div class="tag">
                <h1>Newsletter</h1>
                <div class="search_bar">
                    <input type="text" placeholder="You email id here">
                    <button type="submit">Subscribe</button>
                </div>                
            </div>            
            
        </div>

        <p class="end">Design By<span><i class="fa-solid fa-face-grin"></i> HAAP</span></p>

    </footer>





    
</body>
</html>