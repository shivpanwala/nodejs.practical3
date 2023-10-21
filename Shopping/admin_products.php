<?php include 'header.php'; ?>

<?php
if ($_SESSION['role'] == 'user') {
    header('Location: index.php');
}
?>

<?php
$sql = "SELECT products.product_id, products.product_name, products.product_image, products.price, categories.category_name
        FROM products
        LEFT JOIN categories ON products.category_id = categories.category_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="table-responsive">';
    echo '<table class="table table-bordered table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>#</th>';
    echo '<th>Product Name</th>';
    echo '<th>Product Image</th>';
    echo '<th>Price</th>';
    echo '<th>Category</th>';
    echo '<th>Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<th scope="row">' . $row['product_id'] . '</th>';
        echo '<td>' . $row['product_name'] . '</td>';
        echo '<td><img src="images/' . $row['product_image'] . '" style="max-height: 50px;" alt="Product Image"></td>';
        echo '<td>' . $row['price'] . '</td>';
        echo '<td>' . $row['category_name'] . '</td>';
        echo '<td>';
        echo '<a href="edit_product.php?id=' . $row['product_id'] . '" class="btn btn-info btn-sm">Edit</a>';
        echo '<a href="delete_product.php?id=' . $row['product_id'] . '" class="btn btn-danger btn-sm">Delete</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '<a href="add_product.php" class="btn btn-success btn-sm">Add Product</a>';
} else {
    echo "0 results";
}

$conn->close();
?>

<?php include 'footer.php'; ?>
