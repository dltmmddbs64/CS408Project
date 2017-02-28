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
    public $cat;
    public $name;
    public $title;
    public $office;
    public $phone;
    public $email;
    
    function __construct($cat, $name, $title, $office, $phone, $email) {
        $this->cat = $cat;
        $this->name = $name;
        $this->title = $title;
        $this->office = $office;
        $this->phone = $phone;
        $this->email = $email;
    }

}
?>
