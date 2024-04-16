<?php
require_once "database.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the image filename from the database

    $sql_select_image = "SELECT image FROM add_product WHERE id = $id";
    $result_select_image = mysqli_query($conn, $sql_select_image);

    if ($result_select_image && mysqli_num_rows($result_select_image) > 0) {
        $row = mysqli_fetch_assoc($result_select_image);
        $image_filename = $row['image'];

        // Delete the product from the database

        $sql_delete_product = "DELETE FROM add_product WHERE id = $id";
        if (mysqli_query($conn, $sql_delete_product)) {

            // Delete the image file from the uploads folder
            $image_path = "uploads/" . $image_filename;
            if (file_exists($image_path)) {
                unlink($image_path); // Delete the image file
            } else {
                echo "Image file not found";
            }
            echo "Product and associated image deleted successfully";
        } else {
            echo "Error deleting product: " . mysqli_error($conn);
        }
    } else {
        echo "Image filename not found in database";
    }
} else {
    echo "Product ID not provided";
}

// Redirect back to the products list page
header("Location: Products.php");
exit();
?>
