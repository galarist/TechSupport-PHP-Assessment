<?php include("../view/header.php"); ?>

<div id="main">
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Password</th>
            <th id="no_border"><a href="../index.php">Home</a></th>
        </tr>
        <?php foreach($technicians as $tech) : ?>
        <tr>
            <td><?php echo $tech["firstName"]; ?></td>
            <td><?php echo $tech["lastName"]; ?></td>
            <td><?php echo $tech["email"]; ?></td>
            <td><?php echo $tech["phone"]; ?></td>
            <td><?php echo $tech["password"]; ?></td>
            <td id="no_border">
                <form action="." method="post">
                    <input type="hidden" name="action" value="delete_tech"/>
                    <input type="hidden" name="techID" value="<?php echo $tech["techID"]; ?>"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a id="add_data" href="add_tech.php">Add Technician</a>
</div>

<?php include("../view/footer.php"); ?>