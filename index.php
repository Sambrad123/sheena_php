<?php
include_once("config/database.php");
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/customs/color-fonts.css">
</head>
<style type="text/css">
    td {
        color: white;
    }
    td>a {
        color: white;
    }
</style>
<body>
<div class="container">

<div class="row" style="color:white;background-color:#2E86C1">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                Product
            </h3>
            <form method="post">
                <button name="insert" class="btn-danger">insert new product here</button>
            </form>
        </div>
        <div class="panel-body" style="color:white">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="white"> Product ID</th>
                        <th class="white"> Product Name</th>
                        <th class="white"> Product Price</th>
                        <th class="white"> Product Quantity</th>
                        <th class="white"> Product Description</th>
                        <th> </th>
                        <th> </th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php
                        if(isset($_POST["insert"])) {
                            echo "<script>window.open('insert.php','_self')</script>";
                        }
                    ?>
                    <?php


                    $i = 0;
                    $get_products = "select * from product";
                    $run_products = mysqli_query($con, $get_products);

                    while ($row_products = mysqli_fetch_array($run_products)) {

                    $product_id            =   $row_products['product_id'];
                    $product_name          =   $row_products['product_name'];
                    $product_descriptions  =   $row_products['product_description'];
                    $product_price         =   $row_products['product_price'];
                    $product_quantity      =   $row_products['product_quantity'];
                    $i++;

                    ?>
                        <tr>
                            <td> <?php  echo $product_id ; ?>            </td>
                            <td> <?php  echo $product_name; ?>           </td>
                            <td> <?php  echo $product_price; ?>          </td>
                            <td> <?php  echo $product_quantity; ?>       </td>
                            <td> <?php  echo $product_descriptions; ?>   </td>
                            <td> 
                            <i class="fa fa-trash red"></i>
                            <a href="delete.php?delete_product=<?php echo $product_id; ?>">
                             Delete
                            </a> 

                            </td>
                            <td> 
                            <i class="fa fa-pencil blue"></i>
                            <a href="edit.php?edit_product=<?php echo $product_id; ?>">Edit</a>
                            </td>
                        </tr>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>

