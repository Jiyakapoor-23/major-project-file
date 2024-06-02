<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "grocery_shop";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['name'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `admin_form` (`sr.no`, `email`, `password`) VALUES (NULL, '$email', '$password')";
    $result = mysqli_query($conn, $sql);
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store Website</title>
     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> groCo </a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#products">Products</a>
            <a href="#categories">Categories</a>
            <a href="#reviews">Reviews</a>
            <a href="#blogs">Blogs</a>

        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>
        <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="Images/img1.jpg" alt="">
                <div class="content">
                    <h3>Watermelon</h3>
                    <span class="price">$4.98/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="Images/img2.jpg" alt="">
                <div class="content">
                    <h3>Banana</h3>
                    <span class="price">$4.98/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="Images/img3.jpg" alt="">
                <div class="content">
                    <h3>Cucumber</h3>
                    <span class="price">$4.98/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="total">total : $19.69/-</div>
            <a href="#" class="btn">checkout</a>
        </div>

        <form action="/Major-Project-Website-main/index.php" class="login-form" method="POST">
            <h3>login now</h3>
            <input type="email" placeholder="your email" name="name" class="box">
            <input type="password" placeholder="your password" name="password" class="box">
            <p>forgot your password <a href="#">click here</a></p>
            <p>don't have an account <a href="#">create now</a></p>
            <input type="submit" placeholder="login now" class="btn">

        </form>
    </header>

<section class="home" id="home">

    <div class="content">
        <h3>Fresh and <span> Organic </span> Products Delivered </h3>
        <p>"Stock up on happiness with every order"</p>
            <a href="#" class="btn">Shop Now</a>
    </div>
</section>

<section class="features" id="features">
    <h1 class="heading"> Our <span>Features</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="Images/f1.jpg" alt="">
            <h3>Fresh and Organic</h3>
            <p>"Experience the essence of freshness and the purity of organically grown produce with our carefully 
                curated selection, delivered straight to your doorstep. At Groco, we pride ourselves on offering the 
                finest quality fruits, vegetables, and pantry essentials, ensuring that every bite is a celebration 
                of nature's goodness."</p>
        </div>

        <div class="box">
            <img src="Images/f2.webp" alt="">
            <h3>Free Delivery</h3>
            <p>"At Groco, we believe in making shopping convenient and cost-effective for our customers. 
                Enjoy the added benefit of free delivery on all orders, ensuring that your groceries reach 
                you without any extra charge. Experience hassle-free shopping from the comfort of your home,
                 with no minimum purchase required."</p>
        </div>

        <div class="box">
            <img src="Images/f3.webp" alt="">
            <h3>Easy Payments</h3>
            <p>"Say goodbye to payment hassles with our seamless checkout process at Groco. 
                From credit cards to digital wallets, we offer a variety of easy payment options 
                to suit your preferences. Shop with confidence knowing that your transactions are 
                secure and convenient, making grocery shopping a breeze."</p>
        </div>
    </div>
</section>

<section class="products" id="products">
    <h1 class="heading">Our <span>Products</span></h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="Images/p1.png" alt="">
                <h3>Fresh Orange</h3>
                <div class="price"> 800g-1kg 150/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Add to Cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="Images/p2.webp" alt="">
                <h3> Fresh Strawberry</h3>
                <div class="price"> 1Kg  100-300/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Add to Cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="Images/p3.jpg" alt="">
                <h3>Fresh Cucumber</h3>
                <div class="price"> 1Kg 49/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Add to Cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="Images/p4.jpg" alt="">
                <h3>Fresh Avocado</h3>
                <div class="price"> 1Kg 149/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Add to Cart</a>
            </div>
            </div>
        </div>



    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="Images/p5.jpg" alt="">
                <h3>Garlic</h3>
                <div class="price"> 1Kg 60-70/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Add to Cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="Images/p6.jpg" alt="">
                <h3>Fresh Carrot</h3>
                <div class="price"> 1Kg 50/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Add to Cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="Images/p7.webp" alt="">
                <h3>Fresh Potato</h3>
                <div class="price"> 1Kg 20/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Add to Cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="Images/p8.jpg" alt="">
                <h3>Fresh Cabbage</h3>
                <div class="price"> 1Kg 20/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Add to Cart</a>
            </div>

        </div>
    </div>
</section>

<section class="categories" id="categories">
    <h1 class="heading">product <span>categories</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="Images/c1.png" alt="">
            <h3>Vegetables</h3>
            <p>Upto 35% off</p>
            <a href="#" class="btn">Shop Now</a>
        </div>

        <div class="box">
            <img src="Images/c2.png" alt="">
            <h3>Fresh Fruits</h3>
            <p>Upto 25% off</p>
            <a href="#" class="btn">Shop Now</a>
        </div>

        <div class="box">
            <img src="Images/c3.png" alt="">
            <h3>Daily Products</h3>
            <p>Upto 32% off</p>
            <a href="#" class="btn">Shop Now</a>
        </div>

        <div class="box">
            <img src="Images/c4.png" alt="">
            <h3>Fresh Meat</h3>
            <p>Upto 20% off</p>
            <a href="#" class="btn">Shop Now</a>
        </div>
    </div>
</section>

<section class="reviews" id="reviews">

    <h1 class="heading">Customer's <span>Review</span></h1>

    <div class="swipper reviews-slider">

        <div class="swiper-wrapper ">

            <div class="swiper-slide box ">
                <img src="Images/r1.jpg" alt="">
                <p>"GroCo has made my life easier 
                    with its user-friendly website and prompt delivery.
                     Great selection and competitive prices!"</p>
                 <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                 </div>   
            </div>

            <div class="swiper-slide box sev">
                <img src="Images/r2.jpg" alt="">
                <p>"GroCo's extensive inventory and intuitive search make 
                    grocery shopping a breeze. Scheduled deliveries ensure 
                    I never run out of essentials."</p>
                 <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                 </div>   
            </div>

            <div class="swiper-slide box sev">
                <img src="Images/r3.jpg" alt="">
                <p>"Impressed by GroCo's seamless checkout process, on-time delivery, 
                    and commitment to quality. Fresh produce and well-packaged goods every time."</p>
                 <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                 </div>   
            </div>

            <div class="swiper-slide box sev">
                <img src="Images/r4.jpg" alt="">
                <p>"Thrilled to find GroCo's dietary filter option, 
                    making it easy to shop for my needs. Impressive 
                    variety and catering to diverse preferences."</p>
                 <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                 </div>   
            </div>

            <div class="swiper-slide box sev">
                <img src="Images/r5.jpg" alt="">
                <p>"GroCo's high-quality products and sustainable practices make them stand out.
                     Proud to support a company that shares my values."</p>
                 <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                 </div>   
            </div>
        </div>
    </div>
</section>

<section class="blogs" id="blogs">
    <h1 class="heading">Our <span>Blogs</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="Images/b1.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i>By User</a>
                    <a href="#"> <i class="fas fa-calender"></i>17 April,2024</a>
                </div>
                <h3>Fresh and Organic Vegetables and Fruits</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <img src="Images/b2.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i>By User</a>
                    <a href="#"> <i class="fas fa-calender"></i>17 April,2024</a>
                </div>
                <h3>Fresh and Organic Vegetables and Fruits</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <img src="Images/b3.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i>By User</a>
                    <a href="#"> <i class="fas fa-calender"></i>17 April,2024</a>
                </div>
                <h3>Fresh and Organic Vegetables and Fruits</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </div>
</section>

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Groco <i class="fas fa-shopping-basket"></i></h3>
            <p>Lorem ipsum dolor sit amet.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> khanas12@gmail.com</a>
            <a href="#" class="links"> <i class="fas fa-map-market-alt"></i> Delhi,India</a>
        </div>

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home</a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features</a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products</a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories</a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review</a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs</a>  
        </div>

        <!-- <div class="box">
            <h3>NewsLetter</h3>
           <p>Subscribe for Latest Updates</p>
           <input type="email" placeholder="Your Email" class="email">
           <input type="Submit" value="Subscribe" class="btn">
        </div> -->

    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

