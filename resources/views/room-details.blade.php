<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/css/room_details.css">
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
            <li><a href="./about.html">About Us</a></li>
            <li><a href="./rooms.html">Rooms</a></li>
            <li><a href="./offers.html">Offers</a></li>
            <li><a href="./contact.html">Contacts</a></li>
        </ul>
        <a href="../">
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
        <section id="title-section" class="dark-background">
            <h3>THE ULTIMATE LUXURY</h3>
            <h1>Our Offers</h1>
            <div>
                <p>Home | <span>Offers</span> </p>
            </div>
        </section>
        <section id="room-details-section">
            <h4 class="mini-title-h">DOUBLE RED</h4>
            <h1>Luxury Double Bed</h1>
            <p class="yellow-price">$345<span>/Night</span></p>
            <img src="../img/offers/hotel-room-1.jpg" alt="">
        </section>
        <section id="availability-section">
            <h5>Check Availability</h5>
            <form action="">
                <label for="check-in-input">Check In</label>
                <input type="date" id="check-in-input">
                <label for="check-out-input">Check Out</label>
                <input type="date" id="check-out-input">
                <button class="light-rectangle-button">CHECK AVAILABILITY</button>
            </form>
        </section>
        <section id="text-section">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus laudantium sint qui inventore assumenda vero fuga praesentium labore doloremque, nobis adipisci officia ullam ea, exercitationem eum modi dolorem beatae suscipit! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet adipisci veniam totam sed corporis, ipsa sint nihil et temporibus accusantium ducimus non quia consequatur itaque quas ex quidem delectus aspernatur!</p>
        </section>
        <section id="amenities-section">
            <h2>Amenities</h2>
            <hr>
            <div class="column">
                <p>+ Air conditioner</p>
                <p>+ Breakfast</p>
                <p>+ Cleaning</p>
                <p>+ Grocery</p>
                <p>+ Shop near</p>
                <p>+ 24/7 Online Support</p>
                <p>+ Smart Security</p>
            </div>
            <div class="column">
                <p>+ High speed WiFi</p>
                <p>+ Kitchen</p>
                <p>+ Shower</p>
                <p>+ Single bed</p>
                <p>+ Towels</p>
                <p>+ Strong Locker</p>
                <p>+ Expert Team</p>
            </div>
        </section>
        <section id="rosalina-section">
            <img src="../img/room-details/Ellipse 3.png" alt="">
            <h3>Rosalina D. William</h3>
            <h4>FOUNDER, QUX CO.</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, beatae quas architecto dignissimos nemo placeat incidunt minus vel, animi magni vero saepe dolore esse voluptatibus ratione. Necessitatibus ratione perspiciatis magnam.</p>
        </section>
        <section id="cancellation-section">
            <h2>Cancellation</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, animi tempore. Non tempora maiores repellat, obcaecati modi, aspernatur at laborum quisquam sed labore iusto velit aliquid fugit? Autem, maxime alias?</p>
        </section>
        <section id="related-rooms-section">
            <h2>Related Rooms</h2>
            <hr>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-room-container">
                            <img src="../img/offers/hotel-room-1.jpg" alt="">
                            <div class="room-description">
                                <h2>Minimal Duplex Room</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                
                            </div>
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
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-room-container">
                            <img src="../img/offers/hotel-room-1.jpg" alt="">
                            <div class="room-description">
                                <h2>Minimal Duplex Room</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                
                            </div>
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
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

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