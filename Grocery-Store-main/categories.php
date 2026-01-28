<?php include 'db_config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groco - All Categories</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>
<body>

<header class="header">
    <a href="index.php" class="logo"><i class="fas fa-shopping-basket"></i>Groco</a>
    <nav class="navbar">
        <a href="index.php#home">home</a>
        <a href="categories.php" style="color:var(--orange)">categories</a>
    </nav>
    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="login-btn" class="fas fa-user"></div>
    </div>
</header>

<section class="category" id="category">
    <h1 class="heading">Our <span>Categories</span></h1>

    <div class="box-container">
        
        <div class="box">
            <img src="vegitables_basket.jpg" alt="Produce">
            <h3>Produce</h3>
            <p>Fruits & Vegetables</p>
            <a href="shop_category.php?cat=produce" class="btn">View Items</a>
        </div>

        <div class="box">
            <img src="Dairy_products.jpg" alt="Dairy">
            <h3>Dairy</h3>
            <p>Refrigerated Items</p>
            <a href="shop_category.php?cat=dairy" class="btn">View Items</a>
        </div>

        <div class="box">
            <img src="bakery.jpg" alt="Bakery">
            <h3>Bakery</h3>
            <p>Freshly Baked</p>
            <a href="shop_category.php?cat=bakery" class="btn">View Items</a>
        </div>

        <div class="box">
            <img src="pantry.jpg" alt="Pantry">
            <h3>Pantry Staples</h3>
            <p>Dry Goods</p>
            <a href="shop_category.php?cat=pantry" class="btn">View Items</a>
        </div>

        <div class="box">
            <img src="snacks.jpg" alt="Snacks">
            <h3>Snacks</h3>
            <p>Crisps & Bites</p>
            <a href="shop_category.php?cat=snacks" class="btn">View Items</a>
        </div>

        <div class="box">
            <img src="frozen.jpg" alt="Frozen">
            <h3>Frozen</h3>
            <p>Frozen Foods</p>
            <a href="shop_category.php?cat=frozen" class="btn">View Items</a>
        </div>

        <div class="box">
            <img src="beverages.jpg" alt="Beverages">
            <h3>Beverages</h3>
            <p>Drinks & Juices</p>
            <a href="shop_category.php?cat=beverages" class="btn">View Items</a>
        </div>

    </div>
</section>

<script src="script.js"></script>
</body>
</html>