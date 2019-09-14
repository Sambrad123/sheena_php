<?php
include_once("config/database.php");


if (isset($_GET['edit_product'])) {

    $edit_product_id = $_GET['edit_product'];
    $get_product = "select * from product where product_id='$edit_product_id'";
    $run_edit = mysqli_query($con, $get_product);
    $row_edit = mysqli_fetch_array($run_edit);
    $product_id = $row_edit['product_id'];
    $product_name = $row_edit['product_name'];
    $product_price = $row_edit['product_price'];
    $product_quantity = $row_edit['product_quantity'];
    $product_description = $row_edit['product_description'];
    

}

 ?>

 

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <title> Insert Products </title>
    </head>
    <body>
    <form method="post" class="form-horizontal" enctype="multipart/form-data">
        <!-- form-horizontal Begin -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Product Name</label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="product_name" type="text" class="form-control" required
                                       value="<?php echo $product_name; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Product Price </label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="product_price" type="text" class="form-control" required
                                       value="<?php echo $product_price; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Product Quantity </label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                            <input name="product_quantity" type="number" class="form-control" required
                                       value="<?php echo $product_quantity; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Product Description </label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <textarea name="product_description" cols="19" rows="6" class="form-control">
                              <?php echo $product_description; ?>
                          </textarea>
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="update" value="Update Product" type="submit"
                                       class="btn btn-primary form-control">
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->
                    </form><!-- form-horizontal Finish -->
                </div><!-- panel-body Finish -->
            </div><!-- canel panel-default Finish -->
        </div><!-- col-lg-12 Finish -->
    </div><!-- row Finish -->

<script src="assets/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>
    </body>
    </html>


    <?php

    if (isset($_POST['update'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_quantity = $_POST['product_quantity'];
        $product_price = $_POST['product_price'];
        $product_description = $_POST['product_description'];

        $update_product = "update product set product_name='$product_name',product_quantity='$product_quantity',product_price='$product_price',product_description='$product_description' where product_id='$product_id'";

        $run_product = mysqli_query($con, $update_product);

        if ($run_product) {

            echo "<script>alert('Your product has been updated Successfully')</script>";

            echo "<script>window.open('index.php','_self')</script>";

        }

    }

    ?>


