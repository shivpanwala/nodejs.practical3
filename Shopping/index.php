<?php include 'header.php'; ?>

<style>
    .category-card {
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }

    .category-card img {
        max-width: 100%;
        height: auto;
    }

    .category-card .card-body {
        text-align: center;
    }

    .category-card .card-text {
        font-size: 1.5rem;
        margin: 10px 0;
    }

    .category-card .btn {
        font-size: 1.2rem;
    }
</style>

<?php
// Establish a database connection (assuming you have done this elsewhere)
include 'connection.php';

// Query to fetch categories from the database
$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Extract category information
        $categoryName = $row['category_name'];
        $categoryImage = 'images/' . $row['category_image'];
        $categoryId = $row['category_id'];

        // HTML template for displaying a category with updated CSS
        echo <<<HTML
        <div class='col-md-4'>
            <div class='card category-card'>
                <img class='card-img-top' src='$categoryImage' alt='Card image cap'>
                <div class='card-body'>
                    <p class='card-text'>$categoryName</p>
                    <div class='d-flex justify-content-center'>
                        <div class='btn-group'>
                            <a href='products.php?id=$categoryId'><button type='button' class='btn btn-sm btn-primary'>View</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
HTML;
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>

<?php include 'footer.php'; ?>
