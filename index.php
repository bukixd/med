<?php

$db = new mysqli("localhost", "root", "", "med");

$q = $db->prepare("SELECT * FROM staff");
if($q && $q->execute()) {
    //jezeli dziala
    $result = $q->get_result();
    while($staff = $result->fetch_assoc()) {
        //lot?
        $staffId = $staff['id'];
        $firstName = $staff['firstName'];
        $lastName = $staff['lastName'];
        echo "Lekarz $firstName $lastName<br>";
        $q = $db->prepare("SELECT * FROM wizyta WHERE staff_id = ?");
        $q->bind_param("i", $staffId);
        if($q && $q->execute()) {
            $wizyty = $q->get_result();
            while($wizyta = $wizyty->fetch_assoc()) {
                $wizytaId = $wizyta['id'];
                $wizytaDate = $wizyta['date'];
                $wizytatimestamp = strtotime($wizytaDate);
                echo "<a href=\"wizyta.php?id=$wizytaId\" style=\"margin:10px; display:block\">";
                echo date("j.m H:i", $wizytatimestamp);
                echo "</button>";
            }
            echo "<br>";
        } else {
            die("Nie ladzia");
        }
    }
} else {
    //jezeli nie ladzia
    die("nie ladzia");

}



?>