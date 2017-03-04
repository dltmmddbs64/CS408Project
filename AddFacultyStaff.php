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
    $content = "<form action='' method='post'>
    <fieldset>
        <legend>Edit existing Faculty or Staff</legend>
        <label for='pos'>Position: </label>
        <select class='inputField' name='ddlPos'>
            <option value='%'>All</option>"
        .$controller->CreateOptionValues($controller->GetPoss()).
        "</select><br/>
        
        <label for='name'>Name: </label>
        <input type='text' class='inputField' name='txtName' value='$person->name' /><br/>
        
        <label for='title'>Title: </label>
        <input type='text' class='inputField' name='txtTitle' value='$person->title' /><br/>
        
        <label for='office'>Office: </label>
        <input type='text' class='inputField' name='txtOffice' value='$person->office' /><br/>
        
        <label for='phone'>Phone: </label>
        <input type='text' class='inputField' name='txtPhone' value='$person->phone' /><br/>
        
        <label for='email'>Email: </label>
        <input type='text' class='inputField' name='txtEmail' value='$person->email' /><br/>
        
        <label for='courses'>Recommend Courses: </label>
        <input type='text' class='inputField' name='txtCourses' value='$person->courses' /><br/>
        
        <label for='review'>Review: </label>
        <textarea cols='70' row='12' name='txtReview'>$person->review</textarea> <br/>

        <input type='submit' value='Submit'>
        
    </fieldset>
</form>";
}
//If the user selected 'Add' from Management page,
//the user can add a new member.
else 
{
    $content = "<form action='' method='post'>
    <fieldset>
        <legend>Add a new Faculty or Staff</legend>
        <label for='pos'>Position: </label>
        <select class='inputField' name='ddlPos'>
            <option value='%'>All</option>"
        .$controller->CreateOptionValues($controller->GetPoss()).
        "</select><br/>
        
        <label for='name'>Name: </label>
        <input type='text' class='inputField' name='txtName' /><br/>
        
        <label for='title'>Title: </label>
        <input type='text' class='inputField' name='txtTitle' /><br/>
        
        <label for='office'>Office: </label>
        <input type='text' class='inputField' name='txtOffice' /><br/>
        
        <label for='phone'>Phone: </label>
        <input type='text' class='inputField' name='txtPhone' /><br/>
        
        <label for='email'>Email: </label>
        <input type='text' class='inputField' name='txtEmail' /><br/>
        
        <label for='courses'>Recommend Courses: </label>
        <input type='text' class='inputField' name='txtCourses' /><br/>
        
        <label for='review'>Review: </label>
        <textarea cols='70' row='12' name='txtReview'></textarea><br/>

        <input type='submit' value='Submit'>
        
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

