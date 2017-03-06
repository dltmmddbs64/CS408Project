<?php
//FacultyStaff page, it displays every info about each Faculty and Staff.
//Ordered in their unique ID number.

require 'Controller/CoursesController.php';

$controller = new CoursesController();

if(isset($_POST['types']))
{
    //Fill page with courses of the selected type
    $table = $controller->CreateTable($_POST['types']);
}
else
{
    //Page is loaded for the first time, no position selected -> Fetch all positions.
    $table = $controller->CreateTable('%');
}

//Output page data
$title = 'Courses';
$content = $controller->CreateCoursesDropdownList(). $table;

include 'Template.php';
?>
