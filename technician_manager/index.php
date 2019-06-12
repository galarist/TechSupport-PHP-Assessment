<?php 
require('../model/database.php');
require('../model/technician_db.php');

if  (isSet($_POST['action'])) {
    $action = $_POST['action'];
}
else if 
    (isSet($_GET['action'])) {
    $action = $_GET['action'];
}
else {
    $action = 'show_techs';
}

if  ($action == 'under_construction') {
    include('../under_construction.php');
}
else if 
    ($action == 'show_techs') {
    $technicians = show_techs();
    include('show_techs.php');
}
else if 
    ($action == 'delete_tech') {
    $techID = $_POST['techID'];
    delete_tech($techID);
    header("Location: .");
}
else if 
    ($action == 'add_tech') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    if  (empty($firstName) || empty($lastName) || empty($email) || empty($phone) || empty($password)) {
        $error = "Please check that all fields are filled in correctly.";
        include('../errors/error.php');
    }
    else {
        add_tech ($firstName, 
                  $lastName, 
                  $email, 
                  $phone, 
                  $password);
                  header("Location: .");
    }
}
?>