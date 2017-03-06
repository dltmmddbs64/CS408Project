<?php

require ("Entities/CoursesEntity.php");
class CoursesModel {
    //Get all course numbers from the database and return them in an array.
    function GetCoursesTypes() {
        require 'Credentials.php';
        //Open connection and Select database.
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error($link));
        mysqli_select_db($link, $database);
        $result = mysqli_query($link, "SELECT DISTINCT pos FROM coursestable") or die(mysqli_error($link));
        $poss = array();
        
        //Get data from database.
        while($row = mysqli_fetch_array($result)) {
            array_push($poss, $row[0]);
        }
        
        //Close connection and return result.
        mysqli_close($link);
        return $poss;
    }
    //Get Course objects by their relative number from the database and return them in an array.
    function GetCoursesByPos($pos) {
        require 'Credentials.php';
        //Open connection and Select database.
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error($link));
        mysqli_select_db($link, $database);
        //Define query.
        $query = "SELECT * FROM coursestable WHERE pos LIKE '$pos'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $courseArray = array();
        
        while($row = mysqli_fetch_array($result)) {
            $id = $row[0];
            $pos = $row[1];
            $name = $row[2];
            $units = $row[3];
            $description = $row[4];
            
            $courses = new CoursesEntity($id, $pos, $name, $units, $description);
            array_push($courseArray, $courses);
        }
        mysqli_close($link);
        return $courseArray;
    }
    //Execute query and close connection.
    function PerformQuery($query, $link, $database)
    {
        mysqli_select_db($link, $database); 
        mysqli_query($link, $query) or die(mysqli_error($link));
        mysqli_close($link);
    }    
}
?>