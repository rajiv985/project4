<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pahilo phaila</title>
    <link rel="stylesheet" href="hello.css">
    <style>
        /* Responsive navigation */
        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
            margin: 0;
        }

        nav ul li {
            display: inline-block;
            margin-left: 10px;
        }

        /* Responsive images */
        img {
            max-width: 100%;
            height: auto;
        }

        /* Responsive containers */
        .container {
            width: 100%;
            text-align: center;
        }

        /* Adjustments for smaller screens */
        @media screen and (max-width: 600px) {
            nav ul li {
                display: block;
                margin: 5px 0;
            }

            .one {
                text-align: center;


                
            }
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="homee.php">+977 (01) 4378950, 4373134 </a></li>
            <li><a href="contact us.html">contact us</a></li>
            <li><a href="about us.html">about us</a></li>
            <li><a href="delivery.html">delivery</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="signup.php">sign up</a></li>
            <li><a href="cart.html">cart</a></li>
        </ul>
    </nav>
    <div class="new">
        <nav>
            <ul>
                <li style="float: left;"><a href="home.html">pahilo phaila</a></li>
                <li><a href="new arrival.html">new arrival</a></li>
                <li><a href="men.html">Men</a></li>
                <li><a href="women.html">women</a></li>
                <li><a href="brands">brands</a></li>
                <li><a href="sales">sales</a></li>
            </ul>
        </nav>
    </div>
    <img src="RRR.jpg" style="max-width: 100%;">
      <!--  Features -->
      <div class="features">
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDescription">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDescription">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/gift.png" alt="">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDescription">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle">CONTACT US</span>
            <span class="featureDescription">Keep in touch via email and support system.</span>
        </div>
    </div>

    <!-- Products -->
    <div class="product" id="product">
        <img src="./img/air.png" alt="" class="productImage">
        <div class="productDetails">
            <h1 class="productTitle">AIR FORCE</h1>
            <h2 class="productPrice">$199</h2>
            <p class="productDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores laborum
                aperiam
                quasi, harum recusandae debitis!</p>

            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>
            <div class="sizes">
                <div class="size">42</div>
                <div class="size">43</div>
                <div class="size">44</div>
            </div>
            <button class="productButton">BUY NOW</button>
        </div>
        <!-- Payment -->
        <div class="payment">
            <h1 class="payTitle">Personal Information</h1>
            <label>Name & Surname</label>
            <input type="text" class="payInput" placeholder="Janette Bennett">
            <label>Phone</label>
            <input type="text" class="payInput" placeholder="+1 123 4567">
            <label>Address</label>
            <input type="text" class="payInput" placeholder="Delta St. 23 42-167">
            <h1 class="payTitle">Card Information</h1>
            <div class="cardIcons">
                <img src="./img/visa.png" width="35px" alt="visa" class="cardIcon">
                <img src="./img/master.png" width="35px" alt="mastercard" class="cardIcon">
            </div>
            <input type="password" class="payInput" placeholder="Card Number">
            <div class="cardInfo">
                <input type="text" class="payInput small" placeholder="mm">
                <input type="text" class="payInput small" placeholder="yyyy">
                <input type="text" class="payInput small" placeholder="cvv">
            </div>
            <button class="payButton">Checkout</button>
            <span class="close">X</span>
        </div>
    </div>

    <!-- Gallery -->

    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleyTitle">Be Yourself</h1>
            <img src="https://images.pexels.com/photos/9295809/pexels-photo-9295809.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImage">
        </div>
        <div class="galleryItem">
            <img src="https://images.pexels.com/photos/1040427/pexels-photo-1040427.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImage">
            <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Just Do it</h1>
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImage">
        </div>
    </div>

    <!-- New Season -->

    <div class="newSeason">
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/4753986/pexels-photo-4753986.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="nsImage">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSmall">WINTER NEW ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="nsImage">
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="footerMenuTitle">About Us</h1>
                <ul class="footerMenuList">
                    <li class="footerListItem">Company</li>
                    <li class="footerListItem">Contact</li>
                    <li class="footerListItem">Careers</li>
                    <li class="footerListItem">Affiliates</li>
                    <li class="footerListItem">Stores</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="footerMenuTitle">Useful Links</h1>
                <ul class="footerMenuList">
                    <li class="footerListItem">Support</li>
                    <li class="footerListItem">Refund</li>
                    <li class="footerListItem">FAQ</li>
                    <li class="footerListItem">Feedback</li>
                    <li class="footerListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="footerMenuTitle">Products</h1>
                <ul class="footerMenuList">
                    <li class="footerListItem">Air Force</li>
                    <li class="footerListItem">Air Jordan</li>
                    <li class="footerListItem">Blazer</li>
                    <li class="footerListItem">Crater</li>
                    <li class="footerListItem">Hippie</li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="footerMenuTitle">Subscribe to our newsletter</h1>
                <div class="footerMail">
                    <input type="text" placeholder="your@email.com" class="footerInput">
                    <button class="footerButton">Join</button>
                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="footerMenuTitle">Follow Us</h1>
                <div class="footerIcons">
                    <img src="./img/facebook.png" alt="" class="footerIcon">
                    <img src="./img/twitter.png" alt="" class="footerIcon">
                    <img src="./img/instagram.png" alt="" class="footerIcon">
                    <img src="./img/whatsapp.png" alt="" class="footerIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">Made by Bloodhawks. All rights reserved. 2024</span>
            </div>
        </div>
    </footer>
</body>

</html>