<?php

$db = new mysqli("localhost", "root", "", "med");
$wizytaId = $_REQUEST['id'];
$q = $db->prepare("SELECT * FROM wizyta WHERE id = ?");
$q->bind_param("i", $wizytaId);
if($q && $q->execute()) {
    $wizyta = $q->get_result()->fetch_assoc();
    $wizytaDate = $wizyta['date'];
    $wizytaTimestamp = strtotime($wizytaDate);

    echo "zapisuje w terminie".date("j.m H:i", $wizytaTimestamp);
}
if(isset($_REQUEST['firstName']) && isset($_REQUEST['lastName'])
            && $_REQUEST['phone']) {
                //zapisujemy
    $q->prepare("INSERT INTO patient VALUES (NULL, ?, ?, ?)");
    $q->bind_param("sss", $_REQUEST['firstName'], $_REQUEST['lastName'], $_REQUEST['id']);
    $q->execute();
    $patientId = $db->insert_id;
    $q->prepare("INSERT INTO patientwizyta VALUES (NULL, ?, ?,)");
    $q->bind_param("ii")

}

?>

<form action="wizyta.php">
Imie: <input type="text" name="fistName">
Nazwisko: <input type="text" name="lastName">
Telefon: <input type="text" name="phone">
<input type="hidden" value="<?php echo $wizytaId?>" name="id">
<input type="submit" value="Zapisz wizyte">
</form>