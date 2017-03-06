<script>
//Display a confirmation box when trying to delete an object.
function showConfirm(id)
{
    //Build the confirmation box
    var c = confirm("Are you sure you wish to delete?");
    
    //If true, delete it and refresh.
    if(c)
        window.location = "FacultyStaffOverview.php?delete=" + id;
}
</script>

<?php

require ("Model/FacultyStaffModel.php");

//Contains non-database related function for the FacultyStaff page.
class FacultyStaffController 
{
    //Creates overview table that is displayed on FacultyStaffOverview page.
    //Shows a brief info.
    function CreateOverviewTable()
    {
        $result = ""
                . "<table class='overViewTable'>"
                . "     <tr>"
                . "         <td></td>"
                . "         <td></td>"
                . "         <td><b>ID</b></td>"
                . "         <td><b>Position</b></td>"
                . "         <td><b>Name</b></td>"
                . "         <td><b>Title</b></td>"
                . "         <td><b>Office</b></td>"
                . "         <td><b>Email</b></td>"
                . "     </tr>";
                
        $personArray = $this->GetByPos('%');

        foreach ($personArray as $key => $value)
        {
            $result = $result . 
                    "<tr> "
                    . "     <td><a href='AddFacultyStaff.php?update=$value->id'>Update</a></td>"
                    . "     <td><a href='#' onclick='showConfirm($value->id)'>Delete</a></td>"
                    . "     <td>$value->id</td>"
                    . "     <td>$value->pos</td>"
                    . "     <td>$value->name</td>"
                    . "     <td>$value->title</td>"
                    . "     <td>$value->office</td>"
                    . "     <td>$value->email</td>"  
             
                    . "</tr>";
        }
        
        $result = $result . "</table>";
        return $result;
    }
    
    //Dropdown list for positions: All, Permenant Faculty, Lecturers, and Staff.
    function CreateFacultyStaffDropdownList() 
    {
        $personModel = new FacultyStaffModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                    Please select a position:
                    <select name = 'pos' >
                        <option value = '%' >All</option>
                        ".$this->CreateOptionValues($personModel->GetFacultyStaffPoss()).
                    "</select>
                    <input type = 'submit' value = 'Search' />
                  </form>";
                
        return $result;
    }
    
    //Returns every element of an array.
    function CreateOptionValues(array $valueArray)
    {
        $result = "";
        
        foreach ($valueArray as $value)
        {
            $result = $result . "<option value = '$value'>$value</option>";
        }
        
        return $result;
    }
    
    //Creates table for FacultyStaff page.
    //Shows every info.
    function CreateTable($poss)
    {
        $personModel = new FacultyStaffModel();
        $array = $personModel->GetFacultyStaffByPos($poss);
        $result = "";
        
        //Generate a table for each facultystaffEntity in array.
        foreach ($array as $key => $person)
        {
            $result = $result .
                    "<table class = 'table'>
                    <tr>
                        <th width = '75px' >Name: </th>
                        <td>$person->name</td>
                    </tr>
                    <tr>
                        <th>Title: </th>
                        <td>$person->title</td>
                    </tr>
                    <tr>
                        <th>Office: </th>
                        <td>$person->office</td>
                    </tr>
                    <tr>
                        <th>Phone: </th>
                        <td>$person->phone</td>
                    </tr>
                    <tr>
                        <th>Email: </th>
                        <td>$person->email</td>
                    </tr>
                    <tr>
                        <th>Recommend Courses: </th>
                        <td>$person->courses</td>
                    </tr>
                    <tr>
                        <th>Review: </th>
                        <td>$person->review</td>
                    </tr>
                    </table>";       
        }
        return $result;
    }
    
    //Insert a new member to mySQL.
    function Insert()
    {
        $pos = $_POST["ddlPos"];
        $name = $_POST["txtName"];
        $title = $_POST["txtTitle"];
        $office = $_POST["txtOffice"];
        $phone = $_POST["txtPhone"];
        $email = $_POST["txtEmail"];
        $courses = $_POST["txtCourses"];
        $review = $_POST["txtReview"];
        
        $person = new FacultyStaffEntity(-1, $pos, $name, $title, $office, $phone, $email, $courses, $review);
        $personModel = new FacultyStaffModel();
        $personModel->Insert($person);
    }
    
    //Update an existing member of mySQL.
    function Update($id)
    {
        $pos = $_POST["ddlPos"];
        $name = $_POST["txtName"];
        $title = $_POST["txtTitle"];
        $office = $_POST["txtOffice"];
        $phone = $_POST["txtPhone"];
        $email = $_POST["txtEmail"];
        $courses = $_POST["txtCourses"];
        $review = $_POST["txtReview"];
        
        $person = new FacultyStaffEntity($id, $pos, $name, $title, $office, $phone, $email, $courses, $review);
        $personModel = new FacultyStaffModel();
        $personModel->Update($id, $person);
    }
    
    //Delete an existing member of mySQL.
    function Delete($id)
    {
        $personModel = new FacultyStaffModel();
        $personModel->Delete($id);
    }
    
    //Returns corresponding member with that ID number.
    function GetById($id)
    {
        $personModel = new FacultyStaffModel();
        return $personModel->GetFacultyStaffById($id);
    }
    
    //Returns every memeber with that position.
    function GetByPos($pos)
    {
        $personModel = new FacultyStaffModel();
        return $personModel->GetFacultyStaffByPos($pos);
    }
    
    //Returns every position.
    function GetPoss()
    {
        $personModel = new FacultyStaffModel();
        return $personModel->GetFacultyStaffPoss();
    }   
}
?>