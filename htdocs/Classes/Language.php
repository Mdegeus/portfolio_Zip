<?php

class Language {
    public $id;
    public $title;
    public $color;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}