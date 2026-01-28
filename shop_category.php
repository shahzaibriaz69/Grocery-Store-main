<?php
// shop_category.php
include 'db_config.php';

// Get category from URL (can be an ID, slug, "all" or empty)
$cat = isset($_GET['cat']) ? trim($_GET['cat']) : '';

$title = "All Products";
$result = false;

// Case 1: no category or explicit 'all' -> show all products
if ($cat === '' || strtolower($cat) === 'all') {
    $sql = "SELECT p.*, c.name AS category_name
            FROM products p
            LEFT JOIN categories c ON p.category_id = c.id
            ORDER BY p.name ASC";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
}

// Case 2: numeric -> treat as category id
elseif (ctype_digit($cat)) {
    $cat_id = (int) $cat;

    // fetch category name for title
    $cat_stmt = mysqli_prepare($conn, "SELECT name FROM categories WHERE id = ?");
    mysqli_stmt_bind_param($cat_stmt, 'i', $cat_id);
    mysqli_stmt_execute($cat_stmt);
    $cat_res = mysqli_stmt_get_result($cat_stmt);

    if ($cat_row = mysqli_fetch_assoc($cat_res)) {
        $title = htmlspecialchars($cat_row['name']);
    } else {
        // fallback title if id not found
        $title = "Category #{$cat_id}";
    }

    // prepared statement to get products for that category
    $sql = "SELECT p.*, c.name AS category_name
            FROM products p
            LEFT JOIN categories c ON p.category_id = c.id
            WHERE p.category_id = ?
            ORDER BY p.name ASC";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $cat_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
}

// Case 3: treat as slug (if your categories table uses slug field). If no slug column, this will simply show "No items found."
else {
    $slug = $cat;
    $cat_stmt = mysqli_prepare($conn, "SELECT id, name FROM categories WHERE slug = ?");
    mysqli_stmt_bind_param($cat_stmt, 's', $slug);
    mysqli_stmt_execute($cat_stmt);
    $cat_res = mysqli_stmt_get_result($cat_stmt);

    if ($cat_row = mysqli_fetch_assoc($cat_res)) {
        $cat_id = (int) $cat_row['id'];
        $title = htmlspecialchars($cat_row['name']);

        $sql = "SELECT p.*, c.name AS category_name
                FROM products p
                LEFT JOIN categories c ON p.category_id = c.id
                WHERE p.category_id = ?
                ORDER BY p.name ASC";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'i', $cat_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    } else {
        // If slug doesn't match, set result to an empty result (no items)
        $result = false;
        $title = htmlspecialchars(ucfirst($slug));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Groco - <?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>

<body>

    <?php include "header.php"; ?>

    <section class="products" style="margin-top: 12rem;">
        <h1 class="heading"> Our <span><?php echo $title; ?></span> </h1>

        <div class="box-container"
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(26rem, 1fr)); gap:1.5rem;">

            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // safe output
                    $prod_name = htmlspecialchars($row['name']);
                    $prod_price = htmlspecialchars($row['price']);
                    $prod_img = htmlspecialchars($row['image']);
                    $prod_id = (int) $row['id'];
                    $prod_cat_id = isset($row['category_id']) ? (int) $row['category_id'] : 0;
                    ?>
                    <div class="box"
                        style="background:#fff; border-radius: .5rem; text-align:center; padding:3rem 2rem; outline:.1rem solid rgba(0,0,0,.1); outline-offset: -1rem; box-shadow: var(--box-shadow);">
                        <img src="images/<?php echo $prod_img; ?>" alt="<?php echo $prod_name; ?>"
                            style="height: 20rem; width: 100%; object-fit: contain;"
                            onerror="this.src='images/placeholder.jpg';">
                        <h3 style="font-size: 2.2rem; color:var(--black); padding: 1rem 0;"><?php echo $prod_name; ?></h3>
                        <div class="price" style="font-size: 2rem; color:var(--light-color);">$<?php echo $prod_price; ?>/-
                        </div>
                        <a href="product_details.php?id=<?php echo $prod_id; ?>" class="btn">view details</a>
                    </div>
                    <?php
                }
            } else {
                echo "<p style='font-size:2rem; text-align:center; width:100%;'>No items found.</p>";
            }
            ?>
        </div>
    </section>

    <?php include "footer.php"; ?>

    <script src="script.js"></script>
</body>

</html>