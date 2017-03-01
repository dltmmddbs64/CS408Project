<?php

require './Controller/FacultyStaffController.php';
$controller = new FacultyStaffController();
$title = "Add a new Faculty or Staff";

$content = "<form action='' method='post'>
    <fieldset>
        <legend> Add a new Faculty or Staff</legend>
        <label for='pos'>Position: </label>
        <select class='inputField' name='ddlPos'>
            <option value='%'>All</option>
        </select><br/>
        
        <label for='name'>Name: </label>
        <input type='text' class='inputField' name='txtName' /><br/>
        
        <label for='title'>Title: </label>
        <input type='text' class='inputField' name='txtTitle' /><br/>
        
        <label for='office'>office: </label>
        <input type='text' class='inputField' name='txtOffice' /><br/>
        
        <label for='phone'>Phone: </label>
        <input type='text' class='inputField' name='txtPhone' /><br/>
        
        <label for='email'>Email: </label>
        <input type='text' class='inputField' name='txtEmail' /><br/>
        
        <label for='courses'>Recommended Courses: </label>
        <input type='text' class='inputField' name='txtCourses' /><br/>
        
        <label for='review'>Review: </label>
        <input type='text' class='inputField' name='txtReview' /><br/>

        <input type='submit' value='Submit'>
        
    </fieldset>
</form>";

include './Template.php';
?>
