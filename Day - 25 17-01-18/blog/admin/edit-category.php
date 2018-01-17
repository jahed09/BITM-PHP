<?php
        require_once '../vendor/autoload.php';
        use App\classes\Category;

        $id = $_GET['id'];
        $editCategory = new Category();
        $queryResult = $editCategory->editCategory($id);

        $category = mysqli_fetch_assoc($queryResult);


if(isset($_POST['btn'])){
    $updateCategory = new Category();
    $updateCategory->updateCategoryInfo($_POST);
}






?>




<?php include 'includes/header.php'; ?>

<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-body">

                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="category_name" class="form-control" value="<?php echo $category['category_name']; ?>">
                                <input type="hidden" name="id" class="form-control" value="<?php echo $category['id']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea name="category_description" class="form-control"><?php echo $category['category_description']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" name="publication_status" <?php echo($category['publication_status']=='1')?'checked':'' ?> value="1"> Published
                                <input type="radio" name="publication_status" <?php echo($category['publication_status']=='0')?'checked':'' ?> value="0"> Unpublished
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-primary btn-block">UpdatE Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'  ;?>
