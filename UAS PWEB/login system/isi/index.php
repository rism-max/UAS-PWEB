<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:../login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B'jalan</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>B'</span>jalan</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#tempat-wisata">tempat wisata</a>
        <a href="#contact">pesan tiket</a>
        <a href="#review">review</a>
        <a href="#footer">tentang</a>
        <a href="../login_form.php">Log Out</a>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="video-container">
        <video src="images/v1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- tempat wisata section starts  -->

<section class="tempat-wisata" id="tempat-wisata">

    <h1 class="heading">
        <span>t</span>
        <span>e</span>
        <span>m</span>
        <span>p</span>
        <span>a</span>
        <span>t</span>
        <span class="space"></span>
        <span>w</span>
        <span>i</span>
        <span>s</span>
        <span>a</span>
        <span>t</span>
        <span>a</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/i1.jpeg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> danau raja </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="kunjungi.html" class="btn">kunjungi</a>
            </div>
        </div>

        <div class="box">
            <img src="images/i2.jpeg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> simpang patin </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="kunjungi.html" class="btn">kunjungi</a>
            </div>
        </div>

        <div class="box">
            <img src="images/i3.jpeg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> tembulun </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="kunjungi.html" class="btn">kunjungi</a>
            </div>
        </div>

        <div class="box">
            <img src="images/i4.jpeg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> istana sultan </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">kunjungi</a>
            </div>
        </div>

        <div class="box">
            <img src="images/i5.jpeg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> wisata alam lirik </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="kunjungi.html" class="btn">kunjungi</a>
            </div>
        </div>

        <div class="box">
            <img src="images/i6.jpeg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> merau </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="kunjungi.html" class="btn">kunjungi</a>
            </div>
        </div>

    </div>

</section>

<!-- tempat wisata section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>p</span>
        <span>e</span>
        <span>s</span>
        <span>a</span>
        <span>n</span>
        <span class="space"></span>
        <span>t</span>
        <span>i</span>
        <span>k</span>
        <span>e</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="" style="width:400px;">
            <a href="beli/beli.php" style="text-align:center; display:block; font-size:20px;">PESAN TIKET</a>
        </form>

    </div>

  
    
</section>

<!-- contact section ends -->
<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- brand section  -->
<section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- footer section  -->

<section class="footer" id="footer"> 

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#tempat-wisata">tempat wisata</a>
            <a href="#contact">Pesan Tiket</a>
            <a href="#review">review</a>
            
        </div>
        <div class="box">
            <h3>follow us</h3>
            <li><i class="fa-brands fa-whatsapp"></i>  +62 878-3626-9983</li>
            <li><i class="fa-brands fa-instagram"></i>  @risma_aprilia</li>
            <li><i class="fa-brands fa-discord"></i>  rismaaprilia</li>
            <li><i class="fa-brands fa-github"></i>  risma-max</li>
            <li><i class="fa-solid fa-phone"></i>  +62 878-3626-9983</li>
            <li><i class="fa-solid fa-envelope"></i>  risma_rgt@gmail.com</li>
        </div>

    </div>

    <h1 class="credit"> &copy; Copyright <span> Risma Aprilia </span> 2022</h1>

</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>