<?php
require 'Controller/FacultyStaffController.php';

$controller = new FacultyStaffController();

if(isset($_POST['pos']))
{
    //Fille page with faculty and staff of the selected position
    $table = $controller->CreateTable($_POST['pos']);
}
else
{
    //Page is loaded for the first time, no position selected -> Fetch all positions.
    $table = $controller->CreateTable('%');
}

//Output page data
$title = 'Faculty & Staff';
$content = $controller->CreateFacultyStaffDropdownList(). $table;


include 'Template.php';
?>

