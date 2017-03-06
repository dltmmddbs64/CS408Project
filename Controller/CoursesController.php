<?php
require ("Model/CoursesModel.php");

class CoursesController {

    function CreateOverviewTable() {
        $result = "<div class='row'>"
                . "<table class='table table-bordered'>"
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
            $result = $result . "</table></div>";
            return $result;
        }
    //Drop down for courses: All, CS, Mat, EGR, Phys, Bio, etc.
    function CreateCoursesDropdownList() {
        $coursesModel = new CoursesModel();
        $result = "<div class='row'><div class='col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-4'><form actrion '' method = 'post' class='navbar-form navbar-left'>
                    <select name = 'types' class='btn btn-default dropdown-toggle'>
                        <option value = '%' selected disabled>Select Level</option>
                        ".$this->createOptionValues($coursesModel->GetCoursesTypes()).
                "</select>
                 <input type = 'submit' value = 'Search' class='btn btn-default'/>
                 </form></div></div>";
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
                    "<table class = 'table table-bordered'>
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
                    </table>";

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