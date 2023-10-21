<?php include 'header.php'; ?>
<style>
    .form-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"],
    input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #3498db;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #2684db;
    }
</style>
<div class="form-container">
    <form action="add_category.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="category_name">Category Name</label>
            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter category name">
        </div>
        <div class="form-group">
            <label for="category_image">Category Image</label>
            <input type="file" class="form-control-file" id="category_image" name="category_image">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
    </form>
</div>
<?php include 'footer.php'; ?>
