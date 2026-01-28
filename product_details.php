<?php 
include 'db_config.php'; 

// 1. Get the ID from the URL
$id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : '';

if($id == '') {
    header('location:all_products.php'); // Redirect if no ID provided
    exit();
}

// 2. Fetch only the clicked product
$query = "SELECT * FROM products WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$product = mysqli_fetch_assoc($result);

if(!$product) {
    echo "Product not found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $product['name']; ?> - Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>
<body>

<?php include "header.php"; ?>

<section class="products" style="margin-top: 15rem;">
    <div class="row" style="display: flex; flex-wrap: wrap; gap: 2rem; align-items: center; justify-content: center;">
        
        <div class="image" style="flex: 1 1 40rem;">
            <img src="images/<?php echo $product['image']; ?>" alt="" style="width: 100%; max-height: 40rem; object-fit: contain;">
        </div>

        <div class="content" style="flex: 1 1 40rem; padding: 2rem;">
            <h3 style="font-size: 4rem; color: var(--black);"><?php echo $product['name']; ?></h3>
            <p style="font-size: 1.7rem; color: var(--light-color); padding: 1rem 0; line-height: 2;">
                Category: <b><?php echo ucfirst($product['category_id']); ?></b><br>
                This is a high-quality organic product. (You can add a 'description' column to your DB to show more info here).
            </p>
            <div class="price" style="font-size: 3rem; color: var(--orange); font-weight: bold;">
                $<?php echo $product['price']; ?>/-
            </div>
            
            <form action="" method="POST" style="margin-top: 2rem;">
                <input type="number" value="1" min="1" style="font-size: 2rem; padding: 1rem; border: .1rem solid black; width: 10rem;">
                <input type="submit" value="Add to Cart" class="btn">
            </form>
        </div>

    </div>
</section>

<?php include "footer.php"; ?>

</body>
</html>