<?php
    require_once 'vendor/autoload.php';
    use App\classes\Product;

$queryResult = Product::viewProductInfo();


?>

<hr/>
<a href="input_product.php">input</a>
<a href="view-product.php">view</a>
<hr/>

<table border="1">
    <tr>
        <th>product ID</th>
        <th>Category</th>
        <th>Product</th>
        <th>Product Description</th>
        <th>Product Status</th>
        <th></th>
    </tr>
    <?php while ($product = mysqli_fetch_assoc($queryResult)){ ?>

    <tr>
        <td><?php echo $product['id'] ?></td>
        <td><?php echo $product['category_name'] ?></td>
        <td><?php echo $product['product_name'] ?></td>
        <td><?php echo $product['product_description'] ?></td>
        <td><?php echo $product['status'] ?></td>
        <td>
            <a href="edit-product.php?id=<?php echo $product['id'] ?>">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr>

    <?php } ?>
</table>