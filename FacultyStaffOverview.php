<?php
require './Controller/FacultyStaffController.php';
$title = "Manage Faculty and Staff";
$controller = new FacultyStaffController();

$content = $controller->CreateOverviewTable();

include './Template.php';
?>
