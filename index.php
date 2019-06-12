<!--
    Author: Cristovao Galambos
    Student Number: 4104841415
    Purpose: Home page of Assessment 5
    Known bugs: ...
    Date: 28/03/2018
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css" />
    <title><?php $title = "SportsPro Technical Support"; echo $title; ?></title>
</head>
<body>

    <div id="page">
        <div id="header">
            <h1>SportsPro Technical Support</h1>
            <p>Sports management software for the sports enthusiast</p>
            <!--<ul class="nav"><li><a href="index.php">Home</a></li></ul>-->
        </div>
<div id="main">
    <h2>Administrators</h2>
    <ul class="nav">
        <li><a href="product_manager">Manage Products</a></li>
        <li><a href="technician_manager">Manage Technicians</a></li>
        <li><a href="customer_manager">Manage Customers</a></li>
        <li><a href="under_construction.php">Create Incident</a></li>
        <li><a href="under_construction.php">Assign Incident</a></li>
        <li><a href="under_construction.php">Display Incidents</a></li>
    </ul>

    <h2>Technicians</h2>
    <ul class="nav">
        <li><a href="under_construction.php">Update Incident</a></li>
    </ul>

    <h2>Customers</h2>
    <ul class="nav">
        <li><a href="under_construction.php">Register Product</a></li>
    </ul>
</div>
<?php include 'view/footer.php'; ?>
    </div>
</body>
</html>

