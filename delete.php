<?php

include_once("config/database.php");

if (isset($_GET['delete_product'])) {

    $delete_id = $_GET['delete_product'];
    $delete_product = "delete from product where product_id='$delete_id'";
    $run_delete = mysqli_query($con, $delete_product);

    if ($run_delete) {
        echo "<script>alert('One of your product has been Deleted')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}

?>