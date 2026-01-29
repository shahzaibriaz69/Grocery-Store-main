<?php
include 'db_config.php';

// Query the categories table directly
$query = "SELECT * FROM categories ORDER BY id ASC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Groco - Categories</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>

<body>

    <?php include "header.php"; ?>

    <section class="category" id="category" style="margin-top: 10rem;">
        <h1 class="heading">Our <span>Categories</span></h1>

        <div class="box-container">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Check if image exists in DB, otherwise use placeholder
                    $image_name = !empty($row['images']) ? $row['images'] : 'category_default.png';
                    ?>
                    <div class="box">
                        <img src="images/<?php echo $image_name; ?>" alt="">

                        <h3><?php echo htmlspecialchars($row['name']); ?></h3>

                        <a href="shop_category.php?cat=<?php echo $row['id']; ?>" class="btn">
                            Explore Now
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </section>

    <?php include "footer.php"; ?>
</body>

</html>