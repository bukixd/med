<?php

$db = new mysqli("localhost", "root", "", "med");

$q = $db->prepare("SELECT * FROM staff");
if($q->execute()) {
    //jezeli dziala
    $result = $q->get_result();
    while($row = $result->fetch_assoc()) {
        //lot?
        $id = $row['id'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        echo "Lekarz $firstName $lastName<br>";
    }
} else {
    //jezeli nie ladzia
    die("nie ladzia");

}



?>