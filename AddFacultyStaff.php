
<?php

require './Controller/FacultyStaffController.php';
$controller = new FacultyStaffController();
$title = "Add a new Faculty or Staff";

if(isset($_GET["update"]))
{
    $person = $controller->GetByName($_GET["update"]);
    $content = "<form action='' method='post'>
    <fieldset>
        <legend> Add a new Faculty or Staff</legend>
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
else 
{
    $content = "<form action='' method='post'>
    <fieldset>
        <legend> Add a new Faculty or Staff</legend>
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

