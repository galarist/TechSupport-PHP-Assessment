<?php include("../view/header.php"); ?>

<div id="main">
    <div id="form">
        <form action="." method="post">
            <input type="hidden" name="action" value="add_product"/>

            <table class="custom_table">
            <tr>
            <td class="custom_table"><label>Product Code</label></td>
            <td class="custom_table"><input type="text" name="productCode"/></td>
            </tr>

            <tr>
            <td class="custom_table"><label>Name</label></td>
            <td class="custom_table"><input type="text" name="name"/></td>
            </tr>

            <tr>
            <td class="custom_table"><label>Version</label></td>
            <td class="custom_table"><input type="text" name="version"/></td>
            </tr>

            <tr>
            <td class="custom_table"><label>Release Date</label></td>
            <td class="custom_table"><input type="text" name="releaseDate"/> <span>Use "yyyy-mm-dd" format</span></td>            
            </tr>

            <tr>
            <td class="custom_table"><input type="Submit" value="Add Product"/></td>
            <td class="custom_table"><a href=".">View Product List</a> <a href="../index.php">Home</a></td>
            </tr>            
            </table>

        </form>
    </div>
</div>

<?php include("../view/footer.php"); ?>