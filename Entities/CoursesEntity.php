<?php

class CoursesEntity {
    public $id; //Course number, ie: "130" or "140"
    public $pos; //What type of course, ie: "CS" or "EGR"
    public $name; //name of Course, ie: "Data Structures" or "AI"
    public $units; //Units in the course
    public $description; //Course Descritpion
    
    function __construct($id, $pos, $name, $units, $description) {
        $this->id = $id;
        $this->pos = $pos;
        $this->name = $name;
        $this->units = $units;
        $this->description = $description;
    }

}

