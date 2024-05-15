<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: loginForm.php");
    exit();
}

// Fetch all products
require_once('../model/ProductModel.php');
$productModel = new ProductModel();
$products = $productModel->getAllProducts();
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Product Management</title>
    
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <h1>Product Management</h1>
    <div class="container">
    <h2>Add Product</h2>
    <form action="../controller/productManagementController.php" method="post">
        <input type="hidden" name="action" value="add">
        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="productName" required><br><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required><br><br>
        <input type="submit" value="Add Product">
    </form>
    <br>
 
    <?php if (!empty($products)): ?>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price($)</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo $product['product_name']; ?></td>
            <td><?php echo $product['description']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><a href="editProductForm.php?productId=<?php echo $product['product_id']; ?>">Edit</a></td>
            <td>
                <form action="../controller/productManagementController.php" method="post">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="productId" value="<?php echo $product['product_id']; ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
    <p>No products available.</p>
    </div>
    <?php endif; ?>
    <form action="../view/dashboard.php" method="get">
            <input type="submit" value="Home Page">
    </form>
</body>
</html>
