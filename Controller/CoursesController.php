<?php
require ("Model/CoursesModel.php");

class CoursesController {
    
    function CreateOverviewTable() {
        $result = ""
                . "<table class='overViewTable'>"
                . "     <tr>"
                . "         <td></td>"
                . "         <td></td>"
                . "         <td><b>ID</b></td>"
                . "         <td><b>Type</b></td>"
                . "         <td><b>Name</b></td>"
                . "         <td><b>Units</b></td>"
                . "         <td><b>Description</b></td>"
                . "     </tr>";
        $typeArray = $this->GetByPos('%');
        
        foreach ($typeArray as $key => $value) {
            $result = $result . 
                    "<tr> "
                    . "     <td>$value->id</td>"
                    . "     <td>$value->pos</td>"
                    . "     <td>$value->name</td>"
                    . "     <td>$value->units</td>"
                    . "     <td>$value->description</td>" 
             
                    . "</tr>";
            }
            $result = $result . "</table>";
            return $result;
        }
    //Drop down for courses: All, CS, Mat, EGR, Phys, Bio, etc.
    function CreateCoursesDropdownList() {
        $coursesModel = new CoursesModel();
        $result = "<form actrion '' method = 'post' width = '200px'>
                    Please select a course level
                    <select name = 'types' >
                        <option value = '%'>All</option>
                        ".$this->createOptionValues($coursesModel->GetCoursesTypes()).
                "</select>
                 <input type = 'submit' value = 'Search' />
                 </form>";
        return $result;     
    }
    function CreateOptionValues(array $valueArray) {
        $result = "";
        foreach($valueArray as $value) {
            $result = $result."<option value = '$value'>$value</option>";
        }
        return $result;
    }
    //Creates table for courses page.
    //Shows all info
    function CreateTable($pos) {
        $coursesModel = new CoursesModel();
        $array = $coursesModel->GetCoursesByPos($pos);
        $result = "";
        
        //Generate a table for each coursesEntity in array
        foreach ($array as $key => $course) {
            $result = $result .
                    "<table class = 'table'>
                    <tr>
                        <th width = '75px' >Course Number: </th>
                        <td>$course->id</td>
                    </tr>
                    <tr>
                        <th>Name: </th>
                        <td>$course->name</td>
                    </tr>
                    <tr>
                        <th>Type: </th>
                        <td>$course->pos</td>
                    </tr>
                    <tr>
                        <th>Units: </th>
                        <td>$course->units</td>
                    </tr>
                    <tr>
                        <th>Description: </th>
                        <td>$course->description</td>
                    </tr>
                    </table>>";
                    
        }
        return $result;
    }
    function GetByPos($pos) {
        $coursesModel = new CoursesModel();
        return $courseModel->GetCoursesByPos($pos);
    }
    function GetPoss() {
        $coursesModel = new CoursesModel();
        return $personModel->GetCoursesTypes();
    } 
}
?>