<?php
session_start();
if(!isset($_SESSION["first_name"])) {
    header('location:form.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Event Organizer Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="events" style="max-width: 10rem ;max-height: 8rem">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#service">service</a>
        <a href="#about">about</a>
        <a href="#gallery">gallery</a>
        <a href="#price">price</a>
        <a href="#contact">contact</a>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h2>Let The Celebration Begin</h2>
        <br>
        <h3>We are the best <span> event organizers </span></h3>
        <br>
        <a href="#" class="btn">contact us</a>
        <br>
    </div>

    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/slide-1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- home section ends -->

<!-- service section starts  -->

<section class="service" id="service">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>venue selection</h3>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>invitation card</h3>
        </div>

        <div class="box">
            <i class="fas fa-music"></i>
            <h3>entertainment</h3>
        </div>

        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
        </div>

        <div class="box">
            <i class="fas fa-photo-video"></i>
            <h3>photos and videos</h3>
        </div>

        <div class="box">
            <i class="fas fa-birthday-cake"></i>
            <h3>custom food</h3>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"><span>about</span> us </h1>

<div class="row">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>we will give a very special celebration for you</h3>
        <p>For luxury experiences and trend-setting events turn to Upevent .</p><p> We are known for our innovative,distinctive and memorable events .</p><p> Our team aims to deliver experiences that draw on your wildest  imagination and make your big dreams come to life</p>
        <a href="#" class="btn">contact us</a>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">our <span>gallery</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
        </div>

        <div class="box">
            <img src="images/g-2.jpg" alt="">
        </div>

        <div class="box">
            <img src="images/g-3.jpg" alt="">
        </div>

        <div class="box">
            <img src="images/g-4.jpg" alt="">
        </div>

        <div class="box">
            <img src="images/g-5.jpg" alt="">
        </div>

        <div class="box">
            <img src="images/g-6.jpg" alt="">
        </div>

        <div class="box">
            <img src="images/g-7.jpg" alt="">
        </div>

        <div class="box">
            <img src="images/g-8.jpg" alt="">
        </div>

        <div class="box">
            <img src="images/g-9.jpg" alt="">
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- price section starts  -->

<section class="price" id="price">

    <h1 class="heading"> our <span>price</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">for birthdays</h3>
            <h3 class="amount">250.99 DT</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            <a href="#" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">for weddings</h3>
            <h3 class="amount">450.99 DT</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            <a href="#" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">for concerts</h3>
            <h3 class="amount">650.99 DT</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            <a href="#" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">for others</h3>
            <h3 class="amount">850.99 DT</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            <a href="#" class="btn">check out</a>
        </div>

    </div>


</section>

<!-- price section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="<?= $_SESSION["first_name"]." ". $_SESSION["last_name"]?>" value="<?= $_SESSION["first_name"]." ". $_SESSION["last_name"]?>">
            <input type="email" placeholder="<?= $_SESSION["email"]?>" value="<?= $_SESSION["email"]?>">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Tunis </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Sfax </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Nebel </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Sousse </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Hammemet </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#service"> <i class="fas fa-arrow-right"></i> service </a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#gallery"> <i class="fas fa-arrow-right"></i> gallery </a>
            <a href="#price"> <i class="fas fa-arrow-right"></i> price </a>
            <a href="#contact"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i>  + 216  68 485 214</a>
            <a href="#"> <i class="fas fa-phone"></i>  + 216  89 214 697</a>
            <a href="#"> <i class="fas fa-envelope"></i> Khadijachtourou.tbs@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> ayadhaoui2020@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> marsa, Tunis , Tunisia </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

</section>

<!-- footer section ends -->









<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>