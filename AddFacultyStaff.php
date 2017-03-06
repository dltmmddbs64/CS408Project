<?php
//AddFacultyStaff page, it display a table that lets the
//user to enter info about a new member and adds it to
//the existing mySQL. Or if the user selected 'Update',
//then it shows a slightly different table.

require './Controller/FacultyStaffController.php';

$controller = new FacultyStaffController();

$title = "Add a new Faculty or Staff";

//If the user selected 'Update' from FacultyStaffOverview page,
//it shows existing info about the selected member and the user
//can edit them.
if(isset($_GET["update"]))
{
    $person = $controller->GetById($_GET["update"]);
    $content = "<form action='' method='post' class='navbar-form navbar-left'>
    <fieldset>
        <legend>Edit existing Faculty or Staff</legend>
        <label for='pos'></label>
        <select class='btn btn-default dropdown-toggle' name='ddlPos'>
            <option selected disabled>Select Position</option>"
        .$controller->CreateOptionValues($controller->GetPoss()).
        "</select><br/>

        <input type='text' name='txtName' placeholder='Name' class='form-control' value='$person->name'/>

        <input type='text' name='txtTitle' placeholder='Title' class='form-control' value='$person->title'/>

        <input type='text' name='txtOffice' placeholder='Office' class='form-control' value='$person->office'/>

        <input type='text' name='txtPhone' placeholder='Phone' class='form-control' value='$person->phone'/>

        <input type='text' name='txtEmail' placeholder='Email' class='form-control' value='$person->email'/>

        <input type='text' name='txtCourses' placeholder='Recommended Courses' class='form-control' value='$person->courses'/><br/>

        <textarea cols='70' row='12' name='txtReview' placeholder='Write your review here' class='form-control'>$person->review</textarea><br/>

        <input type='submit' class='btn btn-default' value='Submit'>


    </fieldset>
</form>";
}
//If the user selected 'Add' from Management page,
//the user can add a new member.
else
{
    $content = "<form action='' method='post' class='navbar-form navbar-left'>
    <fieldset>
        <legend>Add a new Faculty or Staff</legend>
        <label for='pos'></label>
        <select class='btn btn-default dropdown-toggle' name='ddlPos'>
            <option selected disabled>Select Position</option>"
        .$controller->CreateOptionValues($controller->GetPoss()).
        "</select><br/>

        <input type='text' name='txtName' placeholder='Name' class='form-control'/>

        <input type='text' name='txtTitle' placeholder='Title' class='form-control'/>

        <input type='text' name='txtOffice' placeholder='Office' class='form-control'/>

        <input type='text' name='txtPhone' placeholder='Phone' class='form-control'/>

        <input type='text' name='txtEmail' placeholder='Email' class='form-control'/>

        <input type='text' name='txtCourses' placeholder='Recommended Courses' class='form-control'/><br/>

        <textarea cols='70' row='12' name='txtReview' placeholder='Write your review here' class='form-control'></textarea><br/>

        <input type='submit' class='btn btn-default' value='Submit'>

    </fieldset>
</form>";
}

//Checks if the user selected 'Update' then
//update the existing one instead of creating
//a new object member.
if(isset($_GET["update"]))
{
    if(isset($_POST["txtName"]))
    {
        $controller->Update($_GET["update"]);
    }
}
else
{
    if(isset($_POST["txtName"]))
    {
        $controller->Insert();
    }
}

include 'Template.php';
?>

