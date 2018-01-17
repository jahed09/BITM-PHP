<?php
    require_once '../vendor/autoload.php';
    use App\classes\Category;

    $message = '';
    if(isset($_POST['btn'])){
        $addCategory = new Category();
        $message = $addCategory->addCategory($_POST);
    }



?>










<?php include 'includes/header.php'; ?>

<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-success"><?php echo $message; ?></h1>

                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="category_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea name="category_description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" name="publication_status" value="1"> Published
                                <input type="radio" name="publication_status" value="0"> Unpublished
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-primary btn-block">SavE Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'  ;?>
