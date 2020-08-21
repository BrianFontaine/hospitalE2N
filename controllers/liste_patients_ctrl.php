<?php 
require_once dirname(__FILE__).'/../model/Patients.php';

$patient = new Patients();

$listPatients = $patient->readAll();
// var_dump($listPatients);

require_once dirname(__FILE__).'/../views/patients_liste.php';
?>
