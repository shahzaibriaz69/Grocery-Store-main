<?php 
include 'db_config.php'; 

// Fetch ALL products from the table
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Groco - All Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>
<body>

<header class="header">
    <a href="index.php" class="logo"><i class="fas fa-shopping-basket"></i>Groco</a>
    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="categories.php">categories</a>
        <a href="all_products.php" style="color:var(--orange)">products</a>
    </nav>
</header>

<section class="products" style="margin-top: 12rem;">
    <h1 class="heading"> All <span>Products</span> </h1>

    <div class="box-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(26rem, 1fr)); gap:1.5rem;">
        
        <?php
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="box" style="background:#fff; border-radius: .5rem; text-align:center; padding:3rem 2rem; outline:.1rem solid rgba(0,0,0,.1); outline-offset: -1rem; box-shadow: var(--box-shadow);">
                    <img src="images/<?php echo $row['image']; ?>" alt="" style="height: 20rem; width: 100%; object-fit: contain;">
                    <h3 style="font-size: 2.2rem; color:var(--black); padding: 1rem 0;"><?php echo $row['name']; ?></h3>
                    <div class="price" style="font-size: 2rem; color:var(--light-color);">$<?php echo $row['price']; ?>/-</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <?php
            }
        } else {
            echo "<p style='font-size:2rem; text-align:center; width:100%;'>No products found in database.</p>";
        }
        ?>

    </div>
</section>

<script src="script.js"></script>
</body>
</html>