<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelSite</title>
        
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Swiper JS for review section -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- css link -->
    <link rel="stylesheet" href="styles.css">

    <!--for interactive map  -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
<body>
<?php include 'header.php'; ?>
    <!-- Home Section -->
    <section class="home" id="home">
        <div class="content">
            <h3>Wander. Explore. Discover.</h3>
            <p>Find Your Happiness, The Journey You Are Waiting</p>
            <a href="#" class="btn">Discover More..</a>
        </div>
        <div class="controls">
            <span class="vid-btn active" data-src="images/video-1.mp4"></span>
            <span class="vid-btn" data-src="images/video-2.mp4"></span>
            <span class="vid-btn" data-src="images/video-3.mp4"></span>
            <span class="vid-btn" data-src="images/video-4.mp4"></span>
            <span class="vid-btn" data-src="images/video-5.mp4"></span>
            <span class="vid-btn" data-src="images/video-6.mp4"></span>
        </div>


        <div class="video-container">
            <video src="images/video-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>
    </section>
    <section id="new">
        <div id="special-offer">
            <h2>Special Offer!</h2>
            <p>50% off on summer packages – Offer ends in <span id="countdown">3d 12h 30m</span>!</p>
        </div>
    </section>

 <!-- Booking Section -->

<section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        
        <div class="box-container">
            <div class="box" onclick="navigateTo('hotels.html')">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Find and book hotels based on location, budget, and amenities with real-time availability..</p>
            </div>

            <div class="box" onclick="navigateTo('food.php')">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>Discover local cuisines, fine dining, and street food with tailored recommendations.</p>
            </div>
            
            
            <div class="box" onclick="navigateTo('safety-guide.php')">
            <i class="fa fa-bullhorn"></i></i>
                <h3>Safety Guide</h3>
                <p> Stay informed with travel safety tips, emergency contacts, and real-time alerts.</p>
            </div>
    
            <div class="box" onclick="navigateTo('emergency.php')">
            <i class="fa fa-bullhorn"></i></i>
                <h3>Emergency Assistance Services</h3>
                <p>Get 24/7 support for medical help, lost items, and travel disruptions.</p>
            </div>
        </div>
        
<script>
    function navigateTo(page) {
        window.location.href = page;
    }
</script>
</section>


    <!-- services section ends  -->

    <!-- Gallery section starts  -->
    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>"Exploring the Unseen" – Capture breathtaking landscapes and hidden gems from offbeat destinations.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>"Chasing Waterfalls" – Refreshing moments at waterfalls, lakes, and secret swimming spots.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>"Cultural Encounters" – Highlight interactions with locals, traditional festivals, and street markets.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>"The Journey, Not the Destination" – Snap candid travel moments, scenic routes, and unforgettable memories.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>"Timeless Wonders – The Leaning Tower of Pisa standing tall with history and charm, a must-visit for every traveler."</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>"Adventure Begins Here" – Show thrilling moments from hiking trails, mountain treks, and road trips.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>
        </div>

    </section>

    <!-- gallery section ends  -->




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

        <div class="swiper review-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic1.png" alt="">
                        <h3>Monika Deo</h3>
                        <p>Affordable and convenient, the package handled all logistics, allowing me to enjoy a hassle-free vacation.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic2.jpg" alt="">
                        <h3>Ajit Agrawal</h3>
                        <p>Great value for money with well-organized itineraries and friendly guides, making it a stress-free experience.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic3.png" alt="">
                        <h3>Isha Singh</h3>
                        <p>Seamless travel with everything taken care of, from flights to accommodations, offering convenience and relaxation.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic4.jpg" alt="">
                        <h3>Vikram Joshi</h3>
                        <p>A memorable trip with beautiful destinations and efficient planning, perfect for both adventure and relaxation. </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>
    <!-- review section ends  -->

    <!-- contact section starts  -->
    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>



        <div class="row">
            <div class="image">
                <img src="images/contact.jpg">
            </div>

            <form action="https://formsubmit.co/raunaky414@gmail.com" method="POST">
    <div class="inputBox">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
    </div>
    <div class="inputBox">
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" cols="8" rows="5" placeholder="Description" required></textarea>
    </div>
    <input type="submit" class="btn" value="Submit">
</form>


        </div>
        <!-- footer section  -->
        <section class="footer">
    <div class="box-container">
        
        <div class="box">
            <h3>about us</h3>
            <p>We specialize in offering affordable and well-organized tours, providing seamless travel experiences for all types of travelers. Our packages combine convenience, comfort, and adventure, making your journey unforgettable.</p>
        </div>

        <div class="box">
            <h3>contact us</h3>
            <a href="mailto:info@backpackers.com">Email Us</a>
            <a href="tel:+1234567890">Call Us</a>
        </div>
        
        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/">facebook</a>
            <a href="https://www.instagram.com/">instagram</a>
            <a href="https://www.twitter.com/">twitter</a>
            <a href="https://www.linkedin.com/">linkedin</a>
        </div>
        
    </div>
    <h1 class="credit">© 2025 <span>BACK</span>PACKERS. All rights reserved.</h1>
</section>

</section>
<!-- contact section ends  -->
<!-- JS file -->
<script src="script.js"></script>
</body>

</html>