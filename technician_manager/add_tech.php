<?php include("../view/header.php"); ?>

<div id="main">
    <div id="form">
        <form action="." method="post">
            <input type="hidden" name="action" value="add_tech" />
            <table class="custom_table">
            <tr> 
                <td class="custom_table"><label>First Name</label></td>
                <td class="custom_table"><input type="text" name="firstName"/></td>
            </tr>
            <tr> 
                <td class="custom_table"><label>Last Name</label></td>
                <td class="custom_table"><input type="text" name="lastName"/></td>
            </tr>
            <tr> 
                <td class="custom_table"><label>Email</label></td>
                <td class="custom_table"><input type="text" name="email"/></td>
            </tr>
            <tr> 
                <td class="custom_table"><label>Phone Number</label></td>
                <td class="custom_table"><input type="text" name="phone"/></td>
            </tr>
            <tr> 
                <td class="custom_table"><label>Password</label></td>
                <td class="custom_table"><input type="text" name="password"/></td>
            </tr>
            <tr>
                <td class="custom_table"><input type="submit" value="Submit"/></td>
                <td class="custom_table"><a href=".">View Technician List</a> <a href="../index.php">Home</a></td>
            </tr> 
            </table>
        </form>
    </div>
</div>

<?php include("../view/footer.php"); ?>