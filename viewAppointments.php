<h1>Umowione wizyta:</h1>
<?php
require_once("config.php");
//zakładamy, że dostaliśmy z requesta
$patientId = $_REQUEST['id'];

$q = $db->prepare("SELECT appointment.date, staff.firstName, staff.lastName  FROM patient.appointment
                    LEFT JOIN appointment ON patientappointment.appointment_id = appointment.id
                    LEFT JOIN staff ON appointment.staff_id = staff.id
                    WHERE patient_id = ?");
$q->bind_param("i", $patientId);
$q->execute();
$appointments = $q->get_result();
$appointmentList = array();

while($appointment = $appointments->fetch_assoc()) {
    array_push($appointmentList, $appointment);
    /*
    $staffFirstName = $appointment['firstName'];
    $staffLastName = $appointment['lastName'];
    $date = $appointment['date'];
    echo "dr. $staffFirstName $staffLastName $date<br>";
    */
}
$smarty->assign("appointmentList", $appointmentList);
$smarty->display("appointmentList.tpl");
?>