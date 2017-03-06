<?php
require ("Entities/FacultyStaffEntity.php");

//Contains database related code for the FacultyStaff page.
class FacultyStaffModel 
{
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
    
    //Get facultystaffEntity objects by their position from the database and return them in an array.
    function GetFacultyStaffByPos($pos) 
    {
        require 'Credentials.php';
        
        //Open connection and Select database.
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error($link));
        mysqli_select_db($link, $database);
        
        //Define query.
        $query = "SELECT * FROM facultystaff WHERE pos LIKE '$pos'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $facultystaffArray = array();
        
        //Get data from database.
        while($row = mysqli_fetch_array($result))
        {
            $id = $row[0];
            $pos = $row[1];
            $name = $row[2];
            $title = $row[3];
            $office = $row[4];
            $phone = $row[5];
            $email = $row[6];
            $courses = $row[7];
            $review = $row[8];
            
            $facultystaff = new FacultyStaffEntity($id, $pos, $name, $title, $office, $phone, $email, $courses, $review);
            array_push($facultystaffArray, $facultystaff);
        }
        
        //Close connection and return result
        mysqli_close($link);
        return $facultystaffArray;  
    }
    
    //Get facultystaffEntity objects by their ID number.
    function GetFacultyStaffById($id) 
    {
        require 'Credentials.php';
        
        //Open connection and Select database.
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error($link));
        mysqli_select_db($link, $database);
        
        //Define query.
        $query = "SELECT * FROM facultystaff WHERE id = $id";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        
        //Get data from database.
        while($row = mysqli_fetch_array($result))
        {
            $pos = $row[1];
            $name = $row[2];
            $title = $row[3];
            $office = $row[4];
            $phone = $row[5];
            $email = $row[6];
            $courses = $row[7];
            $review = $row[8];
            
            //Create facultystaff.
            $facultystaff = new FacultyStaffEntity($id, $pos, $name, $title, $office, $phone, $email, $courses, $review);
        }
        
        //Close connection and return result
        mysqli_close($link);
        return $facultystaff; 
    }
    
    //Insert a new member to mySQL.
    function Insert(FacultyStaffEntity $person)
    {
        //Open connection and select databse.
        require 'Credentials.php';
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error($link));
        
        //Define query.
        $query = sprintf("INSERT INTO facultystaff
                (pos, name, title, office, phone, email, courses, review)
                VALUES
                ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
                mysqli_real_escape_string($link, $person->pos),
                mysqli_real_escape_string($link, $person->name),
                mysqli_real_escape_string($link, $person->title),
                mysqli_real_escape_string($link, $person->office),
                mysqli_real_escape_string($link, $person->phone),
                mysqli_real_escape_string($link, $person->email),
                mysqli_real_escape_string($link, $person->courses),
                mysqli_real_escape_string($link, $person->review));
        
        //Execute query and close connection.
        $this->PerformQuery($query, $link, $database); 
    }
    
    //Update the existing mySQL.
    function Update($id, FacultyStaffEntity $person)
    {
        //Open connection and select databse.
        require 'Credentials.php';
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error($link));
        
        //Define query.
        $query = sprintf("UPDATE facultystaff SET
                pos = '%s', name= '%s', title = '%s', office = '%s', phone = '%s', email = '%s', courses = '%s', review = '%s'
                WHERE id = $id",
                mysqli_real_escape_string($link, $person->pos),
                mysqli_real_escape_string($link, $person->name),
                mysqli_real_escape_string($link, $person->title),
                mysqli_real_escape_string($link, $person->office),
                mysqli_real_escape_string($link, $person->phone),
                mysqli_real_escape_string($link, $person->email),
                mysqli_real_escape_string($link, $person->courses),
                mysqli_real_escape_string($link, $person->review));
        
        //Execute query and close connection.
        $this->PerformQuery($query, $link, $database);
    }
    
    //Delete existing data from mySQL.
    function Delete($id)
    {
        //Open connection and select databse.
        require 'Credentials.php';
        $link = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_error($link));
        
        //Define query.
        $query ="DELETE FROM facultystaff WHERE id = $id";
        
        //Execute query and close connection.
        $this->PerformQuery($query, $link, $database);
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