<?php include 'db_config.php'; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grocery Store</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
    />
  </head>
  <body>
    <?php
    include "header.php"
    ?>

    <section class="home" id="home">
      <div class="content">
        <h3>Fresh and <span>Organic</span> products for you</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo error
          reprehenderit ratione nisi.
        </p>
        <a href="#" class="btn">Shop Now</a>
      </div>
    </section>

    <section class="feature" id="feature">
      <h1 class="heading">Our <span>Feature</span></h1>

      <div class="box-container">
        <div class="swiper-slide box">
          <img src="fresh-organic-vegetables,jpg.webp" alt="#" />
          <h3>Fresh and oragnic</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn">Read More</a>
        </div>
        <div class="swiper-slide box">
          <img src="Delivery.jpg" alt="#" />
          <h3>Free Delivery</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn">Read More</a>
        </div>
        <div class="swiper-slide box">
          <img src="online_payment.jpg" alt="#" />
          <h3>Easy Payment</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#" class="btn">Read More</a>
        </div>
      </div>
    </section>

    <section class="products" id="products">
      <h1 class="heading">Our <span>Products</span></h1>

      <div class="swiper product-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="fresh_orange.jpg" alt="#" />
            <h3>Fresh Orange</h3>
            <div class="price">$1.99/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
           <a href="product_details.php?id=1" class="btn">View Details</a>
          </div>

          <div class="swiper-slide box">
            <img src="fresh_onion.jpg" alt="#" />
            <h3>Fresh Onion</h3>
            <div class="price">$1.99/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
           <a href="product_details.php?id=1" class="btn">View Details</a>
          </div>

          <div class="swiper-slide box">
            <img src="fresh_meat.jpg" alt="#" />
            <h3>Fresh Meat</h3>
            <div class="price">$1.99/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
           <a href="product_details.php?id=1" class="btn">View Details</a>
          </div>
          <div class="swiper-slide box">
            <img src="cabbage_gobi.jpg" alt="#" />
            <h3>Fresh Cabbage</h3>
            <div class="price">$1.99/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="product_details.php?id=1" class="btn">View Details</a>
          </div>
        </div>
      </div>

      <div class="swiper product-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="fresh-Potato.jpg" alt="#" />
            <h3>Fresh Potato</h3>
            <div class="price">$1.99/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
        <a href="product_details.php?id=1" class="btn">View Details</a>
          </div>

          <div class="swiper-slide box">
            <img src="Fresh-Avocados.jpg" alt="#" />
            <h3>Fresh Avocados</h3>
            <div class="price">$1.99/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
         <a href="product_details.php?id=1" class="btn">View Details</a>
          </div>

          <div class="swiper-slide box">
            <img src="fresh-carrot.jpg" alt="#" />
            <h3>Fresh Carrot</h3>
            <div class="price">$1.99/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
           <a href="product_details.php?id=1" class="btn">View Details</a>
          </div>
          <div class="swiper-slide box">
            <img src="green-lemon.jpg" alt="#" />
            <h3>Green Lemon</h3>
            <div class="price">$1.99/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="product_details.php?id=1" class="btn">View Details</a>
          </div>
        </div>
      </div>
    </section>

    <section class="category" id="category">
      <h1 class="heading">Product <span>Categories</span></h1>
      <div class="box-container">
        <div class="box">
          <img src="vegitables_basket.jpg" alt="#" />
          <h3>Vegitables</h3>
          <p>Upto 45% off</p>
          <a href="#" class="btn">Shop Now</a>
        </div>
        <div class="box">
          <img src="fresh-fruits-basket.jpg" alt="#" />
          <h3>Fresh Fruits</h3>
          <p>Upto 45% off</p>
          <a href="#" class="btn">Shop Now</a>
        </div>
        <div class="box">
          <img src="Dairy_products.jpg" alt="#" />
          <h3>Dairy Products</h3>
          <p>Upto 45% off</p>
          <a href="#" class="btn">Shop Now</a>
        </div>
        <div class="box">
          <img src="fresh-meat.jpg" alt="#" />
          <h3>Fresh Meat</h3>
          <p>Upto 45% off</p>
          <a href="#" class="btn">Shop Now</a>
        </div>
      </div>
    </section>

    <section class="reviews" id="reviews">
      <h1 class="heading" id=" heading">Our <span>Reviews</span></h1>

      <div class="swiper review-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="Muhammad_Bilal (2).jpg" alt="" # />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam,
              aspernatur dolorum? Quisquam distinctio dolorem ipsa expedita
            </p>
            <h3>Muhammad Bilal</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="Wahab_Sharif.jpg" alt="#" />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam,
              aspernatur dolorum? Quisquam distinctio dolorem ipsa expedita
            </p>
            <h3>Wahab Sharif</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="Muhammad_Zeeshan.jpg" alt="#" />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam,
              aspernatur dolorum? Quisquam distinctio dolorem ipsa expedita
            </p>
            <h3>Muhammad Zeeshan</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="WhatsApp Image 2025-12-17 at 4.01.48 PM.jpeg" alt="#" />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam,
              aspernatur dolorum? Quisquam distinctio dolorem ipsa expedita
            </p>
            <h3>Shahzaib</h3>
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
          <img src="blogs1.jpg" alt="#" />
          <div class="content">
            <div class="icon">
              <a href="#"> <i class="fas fa-user"></i>By User</a>
              <a href="#"> <i class="fas fa-calendar"></i>17 dec 2025</a>
            </div>
            <h3>Fresh and Orangic Fruits and Vegitables</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
              labore possimus a tempore praesentium, fugit vitae ab. Et qui
              temporibus minus sit quasi, molestiae impedit quia odit possimus
              doloribus fugiat.
            </p>
            <a href="#" class="btn">Read More</a>
          </div>
        </div>
        <div class="box">
          <img src="blog2.jgp.jpg" alt="#" />
          <div class="content">
            <div class="icon">
              <a href="#"> <i class="fas fa-user"></i>By User</a>
              <a href="#"> <i class="fas fa-calendar"></i>17 dec 2025</a>
            </div>
            <h3>Fresh and Orangic Fruits and Vegitables</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
              labore possimus a tempore praesentium, fugit vitae ab. Et qui
              temporibus minus sit quasi, molestiae impedit quia odit possimus
              doloribus fugiat.
            </p>
            <a href="#" class="btn">Read More</a>
          </div>
        </div>
        <div class="box">
          <img src="blogs3.jpg" alt="#" />
          <div class="content">
            <div class="icon">
              <a href="#"> <i class="fas fa-user"></i>By User</a>
              <a href="#"> <i class="fas fa-calendar"></i>17 dec 2025</a>
            </div>
            <h3>Fresh and Orangic Fruits and Vegitables</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
              labore possimus a tempore praesentium, fugit vitae ab. Et qui
              temporibus minus sit quasi, molestiae impedit quia odit possimus
              doloribus fugiat.
            </p>
            <a href="#" class="btn">Read More</a>
          </div>
        </div>
      </div>
    </section>
<?php
include "footer.php"

?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
