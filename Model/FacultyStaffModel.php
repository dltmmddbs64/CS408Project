<?php

require ("Entities/FacultyStaffEntity.php");

//Contains database related code for the FacultyStaff page.
class FacultyStaffModel {
    
    //Get all categories for profs, staff, and faculty from the database and return them in an array.
    function GetFacultyStaffCats()
    {
        require 'Credentials.php';
        
        //Open connection and Select database.
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysql_error());
        mysqli_select_db($link, $database);
        $result = mysqli_query($link, "SELECT DISTINCT cat FROM facultystaff") or die(mysql_error());
        $cats = array();
        
        //Get data from database.
        while($row = mysqli_fetch_array($result))
        {
            array_push($cats, $row[0]);
        }
        
        //Close connection and return result.
        mysqli_close($link);
        return $cats;
    }
    
    function GetFacultyStaffByCat($cat) 
    {
        require 'Credentials.php';
        
        //Open connection and Select database.
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysql_error);
        mysqli_select_db($link, $database);
        
        $query = "SELECT * FROM facultystaff WHERE cat LIKE '$cat'";
        $result = mysqli_query($link, $query) or die(mysql_error());
        $facultystaffArray = array();
        
        //Get data from database.
        while($row = mysqli_fetch_array($result))
        {
            $cat = $row[0];
            $name = $row[1];
            $title = $row[2];
            $office = $row[3];
            $phone = $row[4];
            $email = $row[5];
            
            $facultystaff = new FacultyStaffEntity($cat, $name, $title, $office, $phone, $email);
            array_push($facultystaffArray, $facultystaff);
        }
        
        //Close connection and return result
        mysqli_close($link);
        return $facultystaffArray;
        
        
    }
    
}
?>