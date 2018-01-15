<?php
require_once 'vendor/autoload.php';
use App\classes\Product;

    $id = $_GET['id'];
    $queryResult = Product::getProductInfoById($id);
    $product = mysqli_fetch_assoc($queryResult);


    if (isset($_POST['id'])){

    }



?>




<hr/>
<a href="input_product.php">input</a>
<a href="view-product.php">view</a>
<hr/>


<form method="post" action="">

    <table>
        <tr>
            <th>Category Name</th>
            <td><input type="text" name="category_name" value="<?php echo $product['category_name'] ?>"></td>
        </tr>
        <tr>
            <th>Product Name</th>
            <td><input type="text" name="product_name" value="<?php echo $product['product_name'] ?>"> </td>
        </tr>
        <tr>
            <th>Product Description</th>
            <td><textarea rows="5" cols="20" name="product_description"><?php echo $product['product_description'] ?></textarea></td>
        </tr>
        <tr>
            <th>Product Status</th>
            <td>
                <input type="radio" name="status" value="1"> Published
                <input type="radio" name="status" value="0"> UnPublished
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="Update">
            </td>
        </tr>
    </table>
</form>