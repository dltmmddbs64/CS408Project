<?php
//FacultyStaffOverview page, it displays a brief info about them
//and lets the user to update their info or delete them.

require './Controller/FacultyStaffController.php';

$title = "Manage Faculty and Staff";

$controller = new FacultyStaffController();

//Prep to delete object
if(isset($_GET["delete"]))
{
    $controller->Delete($_GET["delete"]);
}

$content = $controller->CreateOverviewTable();

include 'Template.php';
?>
