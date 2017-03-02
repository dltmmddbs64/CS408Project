<script>
function showConfirm()
{
    
}
</script>

<?php

require ("Model/FacultyStaffModel.php");

//Contains non-database related function for the FacultyStaff page.
class FacultyStaffController {
    
    function CreateOverviewTable()
    {
        $result = ""
                . "<table class='overViewTable'>"
                . "     <tr>"
                . "         <td></td>"
                . "         <td></td>"
                . "         <td><b>Position</b></td>"
                . "         <td><b>Name</b></td>"
                . "         <td><b>Title</b></td>"
                . "         <td><b>Office</b></td>"
                . "         <td><b>Phone</b></td>"
                . "         <td><b>Email</b></td>"
                . "         <td><b>Recommend Courses</b></td>"
                . "         <td><b>Review</b></td>"
                . "     </tr>";
                
        $personArray = $this->GetByPos('%');

        foreach ($personArray as $key => $value)
        {
            $result = $result . 
                    "<tr> "
                    . "     <td><a href='AddFacultyStaff.php?update=$value->name'>Update</a></td>"
                    . "     <td><a href=''>Delete</a></td>"
                    . "     <td>$value->pos</td>"
                    . "     <td>$value->name</td>"
                    . "     <td>$value->title</td>"
                    . "     <td>$value->office</td>"
                    . "     <td>$value->phone</td>"
                    . "     <td>$value->email</td>"
                    . "     <td>$value->courses</td>"
                    . "     <td>$value->review</td>"
                    . "</tr>";
        }
        
        $result = $result . "</table>";
        return $result;
    }
    
    function CreateFacultyStaffDropdownList() 
    {
        $facultystaffModel = new FacultyStaffModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                    Please select a position:
                    <select name = 'pos' >
                        <option value = '%' >All</option>
                        ".$this->CreateOptionValues($facultystaffModel->GetFacultyStaffPoss()).
                    "</select>
                    <input type = 'submit' value = 'Search' />
                  </form>";
                
        return $result;
    }
    
    function CreateOptionValues(array $valueArray)
    {
        $result = "";
        
        foreach ($valueArray as $value)
        {
            $result = $result . "<option value = '$value'>$value</option>";
        }
        
        return $result;
    }
    
    function CreateTable($poss)
    {
        $facultystaffModel = new FacultyStaffModel();
        $array = $facultystaffModel->GetFacultyStaffByPos($poss);
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
                    </table>>";       
        }
        return $result;
    }
    
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
        
        $person = new FacultyStaffEntity($pos, $name, $title, $office, $phone, $email, $courses, $review);
        $personModel = new FacultyStaffModel();
        $personModel->Insert($person);
    }
    
    function Update($name)
    {
        $pos = $_POST["ddlPos"];
        $name = $_POST["txtName"];
        $title = $_POST["txtTitle"];
        $office = $_POST["txtOffice"];
        $phone = $_POST["txtPhone"];
        $email = $_POST["txtEmail"];
        $courses = $_POST["txtCourses"];
        $review = $_POST["txtReview"];
        
        $person = new FacultyStaffEntity($pos, $name, $title, $office, $phone, $email, $courses, $review);
        $personModel = new FacultyStaffModel();
        $personModel->Update($name, $person);
    }
    
    function Delete($name)
    {
        
    }
    
    
    function GetByName($name)
    {
        $facultystaffModel = new FacultyStaffModel();
        return $facultystaffModel->GetFacultyStaffByName($name);
    }
    
    function GetByPos($pos)
    {
        $facultystaffModel = new FacultyStaffModel();
        return $facultystaffModel->GetFacultyStaffByPos($pos);
    }
    
    function GetPoss()
    {
        $facultystaffModel = new FacultyStaffModel();
        return $facultystaffModel->GetFacultyStaffPoss();
    }
    
}

?>