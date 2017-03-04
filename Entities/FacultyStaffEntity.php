<?php
//To represent each Faculty and Staff object.
//Each field corresponds to the mySQL database.
class FacultyStaffEntity 
{
    public $id; //Permenant ID number
    public $pos; //Position
    public $name; //Name
    public $title; //Title
    public $office; //Office number
    public $phone; //Phone number
    public $email; //Email address
    public $courses; //Recommend courses
    public $review; //Review about them (feedbacks)
    
    //Create an object of FacultyStaff
    function __construct($id, $pos, $name, $title, $office, $phone, $email, $courses, $review) {
        
        $this->id = $id;
        $this->pos = $pos;
        $this->name = $name;
        $this->title = $title;
        $this->office = $office;
        $this->phone = $phone;
        $this->email = $email;
        $this->courses = $courses;
        $this->review = $review;  
        
    }
}
?>
