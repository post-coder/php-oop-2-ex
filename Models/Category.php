<?php

class Category {
    public $name;
    public $icon;
    
    /**
     * __construct
     *
     * @param  string $name
     * @param  string $icon
     */
    function __construct($name, $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }
}