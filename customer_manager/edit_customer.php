<?php include("../view/header.php"); ?>

<div id="main">
    <div id="form">
        <form action="." method="post">
            <input type="hidden" name="action" value="update_customer"/>            
            <table class="custom_table">
            <input type="hidden" name="customerID" value="<?php echo $customerID; ?>"/>
            <tr>
                <td id="no_border" class="left"><a href="../index.php">Home</a>
            </tr>

            <tr> 
                <td class="custom_table"><label>First Name:</label>
                <td class="custom_table"><input type="text" name="first_name" value="<?php echo $first_name; ?>"/></td>
            </tr> 

            <tr> 
                <td class="custom_table"><label>Last Name:</label>
                <td class="custom_table"><input type="text" name="last_name" value="<?php echo $last_name; ?>"/></td>
            </tr> 

            <tr> 
                <td class="custom_table"><label>Address:</label>
                <td class="custom_table"><input type="text" name="address" value="<?php echo $address; ?>"/></td>
            </tr> 

            <tr> 
                <td class="custom_table"><label>City:</label>
                <td class="custom_table"><input type="text" name="city" value="<?php echo $city; ?>"/></td>
            </tr> 

            <tr> 
                <td class="custom_table"><label>State:</label>
                <td class="custom_table"><input type="text" name="state" value="<?php echo $state; ?>"/></td>
            </tr> 

            <tr> 
                <td class="custom_table"><label>Postal Code:</label>
                <td class="custom_table"><input type="text" name="postal_code" value="<?php echo $postal_code; ?>"/></td>
            </tr>

            <tr> 
                <td class="custom_table"><label>Country Code:</label></td>
                <td class="custom_table"><input type="text" name="country_code" value="<?php echo $country_code; ?>"/></td>
            </tr> 

            <tr> 
                <td class="custom_table"><label>Phone:</label>
                <td class="custom_table"><input type="text" name="phone" value="<?php echo $phone; ?>"/></td>
            </tr> 

            <tr> 
                <td class="custom_table"><label>Email:</label>
                <td class="custom_table"><input type="text" name="email" value="<?php echo $email; ?>"/></td>
            </tr> 

            <tr> 
                <td class="custom_table"><label>Password:</label>
                <td class="custom_table"><input type="text" name="password" value="<?php echo $password; ?>"/></td>
                <td class="custom_table"><input type="submit" value="Update Customer" /> <a href=".">Search Customers</a></td>
            </tr> 
            </table>
        </form>
    </div>
</div>

<?php include("../view/footer.php"); ?>