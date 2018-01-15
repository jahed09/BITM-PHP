<?php
    require_once 'app/classes/Product.php';
    use App\classes\Product;

    if (isset($_POST['btn'])){
        $message = Product::getProductInfo($_POST);
        echo '<pre>';
        print_r($message);

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
            <td><input type="text" name="category_name"> </td>
        </tr>
        <tr>
            <th>Product Name</th>
            <td><input type="text" name="product_name"> </td>
        </tr>
        <tr>
            <th>Product Description</th>
            <td><textarea rows="5" cols="20" name="product_description"></textarea></td>
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
                <input type="submit" name="btn" value="SubmiT">
            </td>
        </tr>
    </table>
</form>