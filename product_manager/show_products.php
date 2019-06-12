<?php include("../view/header.php"); ?>

<div id="main">
    <table>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Version</th>
            <th>Release Date</th>
            <th id="no_border"><a href="../index.php">Home</a></th>
        </tr>
        <?php foreach ($products as $product) : ?>
        <tr>
            <td><?php echo $product["productCode"]; ?></td>
            <td><?php echo $product["name"]; ?></td>
            <td><?php echo $product["version"]; ?></td>
            <td><?php echo $product["releaseDate"]; ?></td>
            <td id="no_border">
                <form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_product"/>
                    <input type="hidden" name="product_code"
                           value="<?php echo $product["productCode"]; ?>"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a id="add_data" href="add_product.php">Add Product</a>
</div>

<?php include("../view/footer.php"); ?>

