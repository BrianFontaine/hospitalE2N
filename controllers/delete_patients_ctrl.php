<?php
require_once dirname(__FILE__) . '/../model/Appointment.php';
require_once dirname(__FILE__).'/../model/Patients.php';

if (empty($_GET['id']) && empty($_POST['id'])) {
    header('location : list_patients_ctrl.php');
    exit();
}
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $patients = new Patients($id);
    $patientsInfos = $patients->readSingle();
    $fullName = $patientsInfos->lastname.' '.$patientsInfos->firstname;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = (int) $_POST['id'];
    $fullName = $_POST['fullName'];
    $patients = new Patients($id);
    if ($patients->delete()) {
        $deletePatientsSuccess = true;
        header('refresh:5;list_patients_ctrl.php');
    }
}
require_once dirname(__FILE__).'/../views/delete_patients.php';
?>