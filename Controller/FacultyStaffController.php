<?php

require ("Model/FacultyStaffModel.php");

//Contains non-database related function for the FacultyStaff page.
class FacultyStaffController {
    
    function CreateFacultyStaffDropdownList() 
    {
        $facultystaffModel = new FacultyStaffModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                    Please select a position:
                    <select name = 'cats' >
                        <option value = '%' >All</option>
                        ".$this->CreateOptionValues($facultystaffModel->GetFacultyStaffCats()).
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
    
    function CreateTable($cats)
    {
        $facultystaffModel = new FacultyStaffModel();
        $array = $facultystaffModel->GetFacultyStaffByCat($cats);
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
                    </table>>";       
        }
        return $result;
    }
    
}

?>