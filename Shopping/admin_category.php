<?php include 'header.php'; ?>

<?php
if ($_SESSION['role'] == 'user') {
    header('Location: index.php');
}
?>

<?php
$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="table-responsive">';
    echo '<table class="table table-bordered table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>#</th>';
    echo '<th>Category Name</th>';
    echo '<th>Category Image</th>';
    echo '<th>Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<th scope="row">' . $row['category_id'] . '</th>';
        echo '<td>' . $row['category_name'] . '</td>';
        echo '<td><img src="images/' . $row['category_image'] . '" style="max-height: 50px;" alt="Category Image"></td>';
        echo '<td>';
        echo '<a href="edit_category.php?id=' . $row['category_id'] . '" class="btn btn-info btn-sm">Edit</a>';
        echo '<a href="delete_category.php?id=' . $row['category_id'] . '" class="btn btn-danger btn-sm">Delete</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '<a href="add_category.php" class="btn btn-success btn-sm">Add Category</a>';
} else {
    echo "0 results";
}

$conn->close();
?>

<?php include 'footer.php'; ?>
