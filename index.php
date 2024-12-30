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

</head>
<body>
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="#" class="logo"><span>BACK</span>Packers</a>

        <!-- NavBar -->

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#book">Book</a>
            <a href="#packages">Packages</a>
            <a href="#services">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="#review">Review</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>

            <form action="" class="search-bar-container">
                <input type="search" id="search-bar" placeholder="search...">
                <label for="search-bar" class="fas fa-search"></label>
            </form>
        </div>

    </header>
    <!-- NavBar end -->

    <div class="login-form-container">
        <i class="fa fa-window-close" id="form-close" aria-hidden="true"></i>
        <form action="login_process.php" method="post">
            <h3>login</h3>
            <input type="email" name="email" class="box" placeholder="Enter your email">
            <input type="password" name="password" class="box" placeholder="Enter your password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password?<a href="#"> click here </a></p>
            <p>don't have account?<a href="register.php"> register now </a></p>
        </form>
    </div>

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

    <!-- Booking Section -->

    <section class="book" id="book">
        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>


        <div class="row">
            <div class="image">
                <img src="images/book.jpg">
            </div>

            <form action="">
                <div class="inputBox">
                    <h3>Where To</h3>
                    <input type="text" placeholder="Destination">
                </div>

                <div class="inputBox">
                    <h3>How many</h3>
                    <input type="number" placeholder="Number of Persons">
                </div>


                <div class="inputBox">
                    <h3>Arrivals</h3>
                    <input type="date">
                </div>

                <div class="inputBox">
                    <h3>Leaving</h3>
                    <input type="date">
                </div>


                <input type="submit" class="btn" value="Book Now">
            </form>

        </div>

    </section>


    <!-- book section ends   -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">

        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <img src="images/p-1.jpg" alt="">
                <div class="content">
                    <h3>
                        <i class="fas fa-map-marker-alt"></i> Mumbai
                    </h3>
                    <p>Mumbai, the "City of Dreams," is a bustling metropolis known for iconic landmarks like the Gateway of India and Marine Drive. With vibrant markets, delicious street food, and Bollywood glamour, it’s a perfect blend of tradition and modernity.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn"> book now </a>
                </div>
            </div>



            <div class="box">
                <img src="images/p-2.jpg" alt="">
                <div class="content">
                    <h3>
                        <i class="fas fa-map-marker-alt"></i> Sydney
                    </h3>
                    <p>Sydney, Australia's vibrant harbor city, is famed for its iconic Opera House, Harbour Bridge, and stunning beaches like Bondi. With a lively culture, waterfront dining, and picturesque views, it’s a top destination for travelers.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$90.00<span>$120.00</span></div>
                    <a href="#" class="btn"> book now </a>
                </div>
            </div>
            <div class="box">
                <img src="images/p-3.jpg" alt="">
                <div class="content">
                    <h3>
                        <i class="fas fa-map-marker-alt"></i> Hawaii
                    </h3>
                    <p>Hawaii, a tropical paradise, is renowned for its pristine beaches, volcanic landscapes, and vibrant culture. With breathtaking sunsets, lush greenery, and aloha spirit, it’s a dream destination for nature and adventure lovers.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">$90.00<span>$120.00</span></div>
                    <a href="#" class="btn"> book now </a>
                </div>
            </div>
            <div class="box">
                <img src="images/p-4.jpg" alt="">
                <div class="content">
                    <h3>
                        <i class="fas fa-map-marker-alt"></i> Paris
                    </h3>
                    <p>Paris, the "City of Light," is famed for its iconic Eiffel Tower, charming streets, and world-class art at the Louvre. Known for romance, fashion, and exquisite cuisine, it’s a must-visit destination for travelers.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">$90.00<span>$120.00</span></div>
                    <a href="#" class="btn"> book now </a>
                </div>
            </div>
            <div class="box">
                <img src="images/p-5.jpg" alt="">
                <div class="content">
                    <h3>
                        <i class="fas fa-map-marker-alt"></i> Tokyo
                    </h3>
                    <p>Tokyo, Japan's bustling capital, is a dynamic mix of tradition and innovation. From historic temples like Senso-ji to modern marvels like Shibuya Crossing, it offers vibrant culture, cutting-edge technology, and world-class cuisine.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">$90.00<span>$120.00</span></div>
                    <a href="#" class="btn"> book now </a>
                </div>
            </div>
            <div class="box">
                <img src="images/p-6.jpg" alt="">
                <div class="content">
                    <h3>
                        <i class="fas fa-map-marker-alt"></i> Egypt
                    </h3>
                    <p>Egypt, the land of ancient wonders, is home to iconic landmarks like the Pyramids of Giza, the Sphinx, and the Nile River. Rich in history and culture, it offers stunning deserts, bustling bazaars, and timeless treasures.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">$90.00<span>$120.00</span></div>
                    <a href="#" class="btn"> book now </a>
                </div>
            </div>

        </div>

    </section>

    <!-- packages section ends  -->
    <!-- services section starts  -->
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
            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Comfortable stays at budget-friendly prices for a relaxing travel experience.</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>Delicious local and international cuisine, complemented by top-notch service for a memorable dining experience.</p>
            </div>

            <div class="box">
                <i class="fa fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>Expert guidance and essential tips to ensure a safe and secure travel experience throughout your journey.</p>
            </div>

            <div class="box">
                <i class="fa fa-globe-asia"></i>
                <h3>Around Guide</h3>
                <p>Personalized tours and local insights to help you explore the best sights and hidden gems of the area.</p>
            </div>
        </div>


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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>


            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>


            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>


            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>



            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>



            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>


            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>


            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="btn">See More..</a>
                </div>
            </div>



            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                        <p>"Unforgettable Experience!"
                            "An amazing trip with knowledgeable guides and seamless service. Highly recommend for stress-free travel!"</p>
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
                        <p>"Great Value and Service!"
                            "Reasonable prices, fantastic accommodations, and friendly guides made this trip memorable. Will book again!" </p>
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
                        <p>"Perfectly Organized!"
                            "Well-planned itineraries and attention to detail made our tour stress-free and enjoyable. Highly recommend!" </p>
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
                        <p>"Professional and Friendly!"
                            "Incredibly professional team with excellent local knowledge, making the trip personalized and enriching!"</p>
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

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="Your Name">

                    <input type="email" placeholder="Your Email">
                </div>


                <div class="inputBox">
                    <input type="text" placeholder="Subject">

                    <textarea name="Description" id="" cols="8" rows="5" placeholder="Description"></textarea>
                </div>


                <input type="submit" class="btn" value="Submit">
            </form>

        </div>

        <!-- footer section  -->

        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>about us</h3>
                    <p>At BACKPAPERS, we specialize in providing tailored travel experiences that cater to every type of traveler. From guided tours to comfortable accommodations, we ensure a seamless and enjoyable journey. Our dedicated team is committed to delivering exceptional service and local expertise, making your travels memorable and stress-free. </p>
                </div>
                <div class="box">
                    <h3>branch locations</h3>
                    <a href="#">india</a>
                    <a href="#">USA</a>
                    <a href="#">japan</a>
                    <a href="#">france</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#https://www.facebook.com/">facebook</a>
                    <a href="#https://www.instagram.com/">instagram</a>
                    <a href="#https://www.twitter.com/">twitter</a>
                    <a href="#https://www.linkedin.com/">linkedin</a>
                </div>

            </div>
            <h1 class="credit"> Made by <span> Abuzar</span> </h1>

        </section>


    </section>
    <!-- contact section ends  -->

    <!-- JS file -->
    <script src="script.js"></script>




</body>

</html>