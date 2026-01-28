<header class="header">
      <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>Groco</a>

   <nav class="navbar">
    <a href="index.php#home">home</a>
    <a href="index.php#features">features</a>
   <a href="shop_category.php">products</a>
    <a href="categories.php">categories</a> 
    <a href="index.php#review">review</a>
    <a href="index.php#blogs">blogs</a>
  </nav>

      <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
        <div id="login-btn" class="fas fa-user"></div>
      </div>

      <form action="#" class="search-form">
        <input type="search" id="search-bar" placeholder="Search Here..." />
        <label for="search-bar" class="fas fa-search"></label>
      </form>
      <div class="shopping-cart">
        <div class="box">
          <img src="banana.jpg" alt="#" />
          <div class="box-content">
            <h3>banana</h3>
            <span class="price">$2.99/-</span>
            <span class="quantity">qty : 1</span>
          </div>
          <i class="fa-solid fa-trash"></i>
        </div>
        <div class="box">
          <img src="onion.jpg" alt="#" />

          <div class="box-content">
            <h3>Onion</h3>
            <span class="price">$1.99/-</span>
            <span class="quantity">qty : 1</span>
          </div>
          <i class="fa-solid fa-trash"></i>
        </div>
        <div class="box">
          <img src="tomato.jpg" alt="#" />
          <div class="box-content">
            <h3>Tomata</h3>
            <span class="price">$2.99/-</span>
            <span class="quantity">qty : 1</span>
          </div>
          <i class="fa-solid fa-trash"></i>
        </div>
        <div class="total">total : $7.97/-</div>
        <a href="#" class="btn">checkout</a>
      </div>

      <form action="#" class="login-form">
        <h3>Login Now</h3>
        <input type="email" placeholder="Enter Your Email" class="box" />
        <input type="password" placeholder="Enter Your Passowrd" class="box" />
        <p>Forget you password <a href="#">Click Here</a></p>
        <p>Don't Have An Account <a href="#">Create Now</a></p>
        <input type="submit" value="login now" class="btn" />
      </form>
    </header>