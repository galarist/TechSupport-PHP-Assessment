<?php
require('../model/database.php');
require('../model/product_db.php');

if  (isSet($_POST['action'])) {
    $action = $_POST['action'];
} 
else if 
    (isSet($_GET['action'])) {
    $action = $_GET['action'];
} 
else {
    $action = 'show_products';
}

if  ($action == 'under_construction') {
    include('../under_construction.php');
}
else if 
    ($action == 'show_products') {
    $products = show_products();
    include('show_products.php');
}
else if 
    ($action == 'delete_product') {
    $product_code = $_POST['product_code'];
    delete_product($product_code);
    header("Location: .");
}
else if 
    ($action == 'add_product') {
    $productCode = $_POST['productCode'];
    $name = $_POST['name'];
    $version = $_POST['version'];
    $releaseDate = $_POST['releaseDate'];
    
    if  (empty($productCode) || empty($name) || empty($version) || empty($releaseDate)) {
        $error = 'Please make sure all fields are entered correctly.';
        include('../errors/error.php');
    }
    else {                
        add_product ($productCode, 
                     $name, 
                     $version, 
                     $releaseDate);
                     header("Location: .");
    }
}
?>