<?php
include 'db_config.php';

if (!isset($_GET['cat'])) {
    header("Location: categories.php");
    exit;
}

$category_id = intval($_GET['cat']);

$query = "SELECT * FROM products WHERE category_id = $category_id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Products</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "header.php"; ?>

<section class="products">
    <h1 class="heading">Category <span>Products</span></h1>

    <div class="box-container">

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="box">
                    <img 
                        src="images/<?php echo $row['image']; ?>" 
                        alt="<?php echo htmlspecialchars($row['name']); ?>"
                    >

                    <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                    <div class="price">$<?php echo $row['price']; ?></div>

                    <div class="stars">
                        <?php
                        $stars = (int) $row['stars'];
                        for ($i = 1; $i <= 5; $i++) {
                            echo $i <= $stars 
                                ? '<i class="fas fa-star"></i>' 
                                : '<i class="far fa-star"></i>';
                        }
                        ?>
                    </div>

                    <a href="#" class="btn">Add to Cart</a>
                </div>
        <?php
            }
        } else {
            echo "<p style='text-align:center;'>No products found.</p>";
        }
        ?>

    </div>
</section>

<?php include "footer.php"; ?>

</body>
</html>
