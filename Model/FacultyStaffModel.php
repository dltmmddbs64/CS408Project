<?php

require ("Entities/FacultyStaffEntity.php");

//Contains database related code for the FacultyStaff page.
class FacultyStaffModel {
    
    //Get all positions for profs, staff, and faculty from the database and return them in an array.
    function GetFacultyStaffPoss()
    {
        require 'Credentials.php';
        
        //Open connection and Select database.
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error($link));
        mysqli_select_db($link, $database);
        $result = mysqli_query($link, "SELECT DISTINCT pos FROM facultystaff") or die(mysqli_error($link));
        $poss = array();
        
        //Get data from database.
        while($row = mysqli_fetch_array($result))
        {
            array_push($poss, $row[0]);
        }
        
        //Close connection and return result.
        mysqli_close($link);
        return $poss;
        
    }
    
    //Get facultystaffEntity objects from the database and return them in an array.
    function GetFacultyStaffByPos($pos) 
    {
        require 'Credentials.php';
        
        //Open connection and Select database.
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error($link));
        mysqli_select_db($link, $database);
        
        $query = "SELECT * FROM facultystaff WHERE pos LIKE '$pos'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $facultystaffArray = array();
        
        //Get data from database.
        while($row = mysqli_fetch_array($result))
        {
            $pos = $row[0];
            $name = $row[1];
            $title = $row[2];
            $office = $row[3];
            $phone = $row[4];
            $email = $row[5];
            $courses = $row[6];
            $review = $row[7];
            
            $facultystaff = new FacultyStaffEntity($pos, $name, $title, $office, $phone, $email, $courses, $review);
            array_push($facultystaffArray, $facultystaff);
        }
        
        //Close connection and return result
        mysqli_close($link);
        return $facultystaffArray;  
    }
    
    function GetFacultyStaffByName($name) 
    {
        require 'Credentials.php';
        
        //Open connection and Select database.
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error($link));
        mysqli_select_db($link, $database);
        
        $query = "SELECT * FROM facultystaff WHERE name LIKE '$name'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        
        //Get data from database.
        while($row = mysqli_fetch_array($result))
        {
            $pos = $row[0];
            $name = $row[1];
            $title = $row[2];
            $office = $row[3];
            $phone = $row[4];
            $email = $row[5];
            $courses = $row[6];
            $review = $row[7];
            
            $facultystaff = new FacultyStaffEntity($pos, $name, $title, $office, $phone, $email, $courses, $review);

        }
        
        //Close connection and return result
        mysqli_close($link);
        return $facultystaff; 
    }
    
    function Insert(FacultyStaffEntity $person)
    {
        $query = sprintf("INSERT INTO facultystaff"
                . "(pos, name, title, office, phone, email, courses, reivew)"
                . "VALUES"
                . "'$s', '$s', '$s', '$s', '$s', '$s')",
                mysqli_real_escape_string($person->pos),
                mysqli_real_escape_string($person->name),
                mysqli_real_escape_string($person->title),
                mysqli_real_escape_string($person->office),
                mysqli_real_escape_string($person->phone),
                mysqli_real_escape_string($person->email),
                mysqli_real_escape_string($person->courses),
                mysqli_real_escape_string($person->review));
        $this->PerformQuery($query);
        
    }
    
    function Update($name, FacultyStaffEntity $person)
    {
        
        $query = sprintf("UPDATE facultystaff SET"
                . "pos = '%s', title = '%s', office = '%s', phone = '%s', email = '%s', courses = '%s', review = '%s'"
                . "WHERE name LIKE '$name'",
                mysqli_real_escape_string($person->pos),
                mysqli_real_escape_string($person->title),
                mysqli_real_escape_string($person->office),
                mysqli_real_escape_string($person->phone),
                mysqli_real_escape_string($person->email),
                mysqli_real_escape_string($person->courses),
                mysqli_real_escape_string($person->review));
                
        $this->PerformQuery($query);
    }
    
    function Delete($name)
    {
        $query ="DELETE FROM facultystaff WHERE name LIKE '$name'";
        $this->PerformQuery($query);
    }
    
    function PerformQuery($query)
    {
        require 'Credentials.php';
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error($link));
        mysqli_select_db($link, $database);
       
        mysqli_query($link, $query) or die(mysqli_error($link));
        mysqli_close($link);
    }
    
}
?>