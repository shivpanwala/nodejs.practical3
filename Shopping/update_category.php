<?php
include 'connection.php';
session_start();

if (isset($_POST['submit'])) {
    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];

    // Check if an image was uploaded
    if ($_FILES['category_image']['name'] != '') {
        $category_image = $_FILES['category_image']['name'];
        $tmp_name = $_FILES['category_image']['tmp_name'];
        $path = "images/" . $category_image;
        move_uploaded_file($tmp_name, $path);

        // Prepare the SQL statement with an image update
        $stmt = $conn->prepare("UPDATE categories SET category_name = ?, category_image = ? WHERE category_id = ?");
        $stmt->bind_param("ssi", $category_name, $category_image, $category_id);
    } else {
        // Prepare the SQL statement without an image update
        $stmt = $conn->prepare("UPDATE categories SET category_name = ? WHERE category_id = ?");
        $stmt->bind_param("si", $category_name, $category_id);
    }

    if ($stmt->execute()) {
        // Redirect to the appropriate page after the update
        header('Location: admin_category.php');
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
    $conn->close();
}
?>
