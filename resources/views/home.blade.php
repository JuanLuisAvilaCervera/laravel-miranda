<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/css/home.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Archivo:ital,wght@0,100..900;1,100..900&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Work+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Archivo:ital,wght@0,100..900;1,100..900&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Work+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Archivo:ital,wght@0,100..900;1,100..900&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Work+Sans:ital@0;1&display=swap" rel="stylesheet">
    
</head>
<body>
    <header>
        <div>
            <button id="burguer-menu" class="square-button"><img src="../img/header/burguer.png" alt=""></button>
        </div>
        <ul id="navlist">
            <li><a href="./pages/about.html">About Us</a></li>
            <li><a href="./pages/rooms.html">Rooms</a></li>
            <li><a href="./pages/offers.html">Offers</a></li>
            <li><a href="./pages/contact.html">Contacts</a></li>
        </ul>
        <a href="./">
        <div id="title-logo-container">
            <div id="logo-container">
                <img src="../img/header/H.png"/>
            </div>
            <div id="title-container">
                <img src="../img/header/hotel_miranda.png" alt="">
            </div>
        </div></a>
        <div id="header-button-container">
            <button class="square-button" id="profile-icon-button"><img src="../img/header/user_icon.png" alt=""></button>
            <button class="square-button" id="search-icon-button"><img src="../img/header/search_icon.png" alt=""></button>
        </div>
        
    </header>
    <main>
        <section class="dark-background title">
            <h3 id="ultimate-luxury-h" class="title__second-header">THE ULTIMATE LUXURY EXPERIENCE</h3>
            <h1 id="base-h" class="title__header">The Perfect Base For You</h1>
            <button class="light-rectangle-button title__button">TAKE A TOUR</button>
            <button class="dark-rectangle-button title__button"> LEARN MORE</button>
        </section>
        <section id="book-check-section">
            <form action="" id="book-check-form">
                <label for="arrival-input">Arrival Date</label>
                <input type="text" id="arrival-input" class="book-check-input"/>
                <label for="departure-input">LeDeparture Date</label>
                <input type="text" id="departure-input" class="book-check-input">
                <button id="book-check-submit" class="light-rectangle-button">CHECK AVAILABILITY</button>
            </form>
        </section>
        <section class="about">
            <div class="about__discover">
                <h4 class="mini-title-h about__discover__second-header">ABOUT US</h4>
                <h1 class="about__discover__header">Discover Our Underground.</h1>
                <p class="about__discover__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, reprehenderit voluptate deserunt eius accusamus quas. Blanditiis exercitationem ducimus quae sequi consectetur minima iste, fuga neque tempore! Explicabo doloribus fugiat non?</p>
                <button class="about__discover__button light-rectangle-button"><a class="about__discover__button__anchor" href="./pages/rooms.html">BOOK NOW</a></button>
            </div>
            <div class="about__team">
                <img src="./img/home/Rectangle 14.png" alt="" class="about__team__image"/>
                <div class="about__team__strong">
                    <img src="./img/home/svg-gobbler - 2022-03-01T200745.428 1.png" alt=""  class="about__team__icon"/>
                    <h3 class="about__team__strong__header">Strong Team</h3>
                    <p class="about__team__strong__paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, soluta. </p>
                </div>
                <img src="./img/home/Rectangle 14.png" alt="" class="about__team__image"/>
                <div class="about__team__luxury dark-background">
                    <img src="./img/home/svg-gobbler - 2022-03-01T201407.985 1.png" alt="" class="about__team__icon">
                    <h3 class="about__team__luxury__header">Luxury Room</h3>
                    <p class="about__team__luxury__paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, soluta.</p>
                </div>
            </div>

        </section>
        <section class="rooms">
            <h4 class="mini-title-h">ABOUT US</h4>
            <h1>Hand Picked Rooms</h1>
            <div class="swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                    <div class="room-container">
                        <img src="../img/offers/hotel-room-1.jpg" alt="">
                        <div class="room-description">
                            <ul class="room-icons">
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                            </ul>
                            <h2 class="room__name">Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    </div>

                    <div class="swiper-slide">
                    <div class="room-container">
                        <img src="../img/offers/hotel-room-1.jpg" alt="">
                        <div class="room-description">
                            <ul class="room-icons">
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                            </ul>
                            <h2 class="room__name">Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    </div>

                    <div class="swiper-slide">
                    <div class="room-container">
                        <img src="../img/offers/hotel-room-1.jpg" alt="">
                        <div class="room-description">
                            <ul class="room-icons">
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                            </ul>
                            <h2 class="room__name">Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    </div>

                    <div class="swiper-slide">
                    <div class="room-container">
                        <img src="../img/offers/hotel-room-1.jpg" alt="">
                        <div class="room-description">
                            <ul class="room-icons">
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                            </ul>
                            <h2 class="room__name">Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    </div>

                    <div class="swiper-slide">
                    <div class="room-container">
                        <img src="../img/offers/hotel-room-1.jpg" alt="">
                        <div class="room-description">
                            <ul class="room-icons">
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                            </ul>
                            <h2 class="room__name">Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    </div>

                    <div class="swiper-slide">
                    <div class="room-container">
                        <img src="../img/offers/hotel-room-1.jpg" alt="">
                        <div class="room-description">
                            <ul class="room-icons">
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                            </ul>
                            <h2 class="room__name">Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    </div>

                    <div class="swiper-slide">
                    <div class="room-container">
                        <img src="../img/offers/hotel-room-1.jpg" alt="">
                        <div class="room-description">
                            <ul class="room-icons">
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                            </ul>
                            <h2 class="room__name">Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    </div>

                    <div class="swiper-slide">
                    <div class="room-container">
                        <img src="../img/offers/hotel-room-1.jpg" alt="">
                        <div class="room-description">
                            <ul class="room-icons">
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                            </ul>
                            <h2 class="room__name">Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    </div>

                    <div class="swiper-slide">
                    <div class="room-container">
                        <img src="../img/offers/hotel-room-1.jpg" alt="">
                        <div class="room-description">
                            <ul class="room-icons">
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                            </ul>
                            <h2 class="room__name">Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    </div>

                    <div class="swiper-slide">
                    <div class="room-container">
                        <img src="../img/offers/hotel-room-1.jpg" alt="">
                        <div class="room-description">
                            <ul class="room-icons">
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                                <li>
                                    <img src="../img/rooms/bed-icon.png" alt="">
                                </li>
                            </ul>
                            <h2 class="room__name">Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    </div>

                    
                    
                </div>
                <div id="pagination-container">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>
        <section class="dark-background intro">
            <h4 class="mini-title-dark">INTRO VIDEO</h4>
            <h1 class="intro__header">Meet With Our Luxury Place.</h1>
            <p class="intro__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio assumenda, pariatur facere est cum vel. Magni suscipit doloribus aliquid neque ipsum dicta, numquam quibusdam ratione veniam impedit eum, aliquam illo.</p>
            <video class="intro__video" src=""></video>
            <button class="light-rectangle-button intro__button">BOOK NOW</button>
        </section>
        <section class="facilities">
            <h4 class="mini-title-h">FACILITIES</h4>
            <h1 class="facilities__header">Core Features</h1>
            <div class="facilities__slider">
                <img src="./img/home/icon 1.png" alt=""/>
                <h1 class="facilities__number">01</h1>
                <h2 class="facilities__title">Have High Rating</h2>
                <p class="facilities__paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, perspiciatis sit? </p>
            </div>
        </section>
        <section class="menu">
            <img class="menu__donut"src="./img/home/icon 4.png" alt=""/>
            <h4 class="mini-title-h">MENU</h4>
            <h1>Our Foods Menu</h1>
            <div class="menu__dishes">
                <div class="menu__dish">
                    <img class="menu__dish__img" src="./img/home/Rectangle 38.png" alt=""/>
                    <div class="menu__dish__container">
                        <h4 class="menu__dish__title">Eggs & Bacon</h4>
                        <p class="menu__dish__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    
                </div>
                <div class="menu__dish">
                    <img class="menu__dish__img" src="./img/home/Rectangle 38.png" alt=""/>
                    <div class="menu__dish__container">
                        <h4 class="menu__dish__title">Eggs & Bacon</h4>
                        <p class="menu__dish__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    
                </div>
                <div class="menu__dish">
                    <img class="menu__dish__img" src="./img/home/Rectangle 38.png" alt=""/>
                    <div class="menu__dish__container">
                        <h4 class="menu__dish__title">Eggs & Bacon</h4>
                        <p class="menu__dish__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    
                </div>
            </div>
            <div class="menu__buttons">
                <button class="menu__buttons__left square-button">left</button>
                <button class="menu__buttons__right square-button">right</button>
            </div>
        </section>
        <!-- SLIDER SIN SECCIÓN APARENTE-->
        <section  class="dark-background data">
            <div class="data__container">
                <img class="data__img" src="./img/home/icon 5.svg" alt=""/>
                <h2 class="data__title">84k</h2><p class="data__plus">+</p>
                <p class="data__desc">Projects are Completed</p>
            </div>
           <div class="data__container">
                <img class="data__img" src="./img/home/icon 5.svg" alt=""/>
                <h2 class="data__title">84k</h2><p class="data__plus">+</p>
                <p class="data__desc">Projects are Completed</p>
            </div>
            <div class="data__container">
                <img class="data__img" src="./img/home/icon 5.svg" alt=""/>
                <h2 class="data__title">84k</h2><p class="data__plus">+</p>
                <p class="data__desc">Projects are Completed</p>
            </div>
            <div class="data__container">
                <img class="data__img" src="./img/home/icon 5.svg" alt=""/>
                <h2 class="data__title">84k</h2><p class="data__plus">+</p>
                <p class="data__desc">Projects are Completed</p>
            </div>
        </section>
    </main>
    <footer>
        <div id="footer-title">
            <div class="light-square">
                <h1 id="footer-logo">H</h1>
            </div>
            <h3><span class="dark-span">HOTEL</span><br>MIRANDA</h3>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores voluptatibus ex consequatur itaque quidem! Quis suscipit ad eius assumenda, sunt qui facilis pariatur optio similique consequatur quidem ratione molestiae sint?</p>
        <div id="footer-container">
            <button><img src="../img/footer/fb-icon.png" alt=""></button>
            <button><img src="../img/footer/be-icon.png" alt=""></button>
            <button><img src="../img/footer/in-icon.png" alt=""></button>
            <button><img src="../img/footer/yt-icon.png" alt=""></button>
            <button><img src="../img/footer/tw-icon.png" alt=""></button>
        </div>
        <div id="services-container">
            <h4>Services.</h4>
            <div class="column">
                <p>+ Resturent & Bar</p>
                <p>+ Swimming Pool</p>
                <p>+ Wellness & Spa</p>
                <p>+ Restaurant</p>
                <p>+ Conference Room</p>
                <p>+ Coctail Party House</p>
            </div>
            <div class="column">
                <p>+ Gaming Zone</p>
                <p>+ Marrige Party</p>
                <p>+ Party Planning</p>
                <p>+ Tour Consultancy</p>
            </div>
        </div>
        <div id="contact-container">
            <h4>Contact Us.</h4>
            <div class="phone-container">
                <img src="../img/footer/phone-icon.png" alt=""/>
                <div>
                    <h4>Phone Number</h4>
                    <p>+987 876 765 76 577</p>
                </div>
            </div>
            <div class="phone-container">
                <img src="../img/footer/email-icon.png" alt=""/>
                <div>
                    <h4>Phone Number</h4>
                    <p>+987 876 765 76 577</p>
                </div>
            </div>
            <div class="phone-container">
                <img src="../img/footer/location-icon.png" alt=""/>
                <div>
                    <h4>Phone Number</h4>
                    <p>+987 876 765 76 577</p>
                </div>
            </div>
        </div>
        <div id="copyright-container">
            <p>Copyright By@Example - 2020</p>
            <p>Terms of use | Privacy Environmental Policy</p>
        </div>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js" type="module"></script>
    <script src="../js/toggle.js"></script>
</body>
</html>