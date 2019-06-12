<?php 
    function show_techs() {
        global $db;
        $query = 'SELECT * FROM technicians
                ORDER BY techID';
        $technicians = $db->query($query);
        return $technicians;
    }
?>

<?php 
    function add_tech
        ($firstName, $lastName, $email, $phone, $password) {
        global $db;
        $query = 'INSERT INTO technicians
                  (firstName, lastName, email, phone, password)
                  VALUES (:firstName, :lastName, :email, :phone, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }
?>

<?php 
    function delete_tech
        ($technician_id) {
        global $db;
        $query = 'DELETE FROM technicians
                  WHERE techID = :technician_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':technician_id', $technician_id);
        $statement->execute();
        $statement->closeCursor();
    }
?>