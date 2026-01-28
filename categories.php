<!-- categories.php -->

<?php
include 'db_config.php';

$query = "
    SELECT p.*, c.name AS category_name 
    FROM products p
    LEFT JOIN categories c ON p.category_id = c.id
";


$result = mysqli_query($conn, $query);
?>

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

    <?php include "header.php"; ?>

    <section class="category" id="category">
        <h1 class="heading">Our <span>Categories</span></h1>

        <div class="box-container">

            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="box">
                        <img src="images/<?php echo $row['image']; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>"
                            onerror="this.src='images/placeholder.jpg';">

                        <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                        <p><?php echo htmlspecialchars($row['category_name']); ?></p>
                        <p>$ <?php echo htmlspecialchars($row['price']); ?></p>

                        <a href="shop_category.php?cat=<?php echo $row['category_id']; ?>" class="btn">
                            View Items
                        </a>

                    </div>
                    <?php
                }
            } else {
                echo "<p style='text-align:center;'>No categories found.</p>";
            }
            ?>

        </div>
    </section>

    <?php include "footer.php"; ?>

    <script src="script.js"></script>
</body>

</html>