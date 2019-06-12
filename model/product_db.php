<?php
function show_products() {
    global $db; // I realised that, it is more easy to use global connection to the database, instead of connecting to the database again.
    $query = 'SELECT * FROM products
              ORDER BY productCode';
    $products = $db->query($query);
    return $products;
}
?>

<?php
function delete_product
    ($product_code) {
    global $db;
    $query = "DELETE FROM products
              WHERE productCode = '$product_code'";
    $db->exec($query);
}
?>

<?php
function add_product
    ($productCode, $name, $version, $releaseDate) {
    global $db;
    $query = "INSERT INTO products
              VALUES ('$productCode', '$name', '$version', '$releaseDate')";
    $db->query($query);
}
?>
