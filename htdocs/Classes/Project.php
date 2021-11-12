<?php

class Project {
    public $id;
    public $name;
    public $picture;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}