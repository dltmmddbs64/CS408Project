<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacultyStaffEntity
 *
 * @author MingKie
 */
class FacultyStaffEntity {
    public $pos;
    public $name;
    public $title;
    public $office;
    public $phone;
    public $email;
    public $courses;
    public $review;
    function __construct($pos, $name, $title, $office, $phone, $email, $courses, $review) {
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
