<?php
    class Shoes {
        public $id;
        public $name;
        public $cost;
        public $size;
        public $color;
        public $shape;
        public $class;
        public $image;

        function __construct($id, $name, $cost, $size, $color, $shape, $class, $image){
            $this->id = $id;
            $this->name = $name;  
            $this->cost = $cost;
            $this->size = $size;
            $this->color = $color;        
            $this->shape = $shape;  
            $this->class = $class;  
            $this->image = $image;
        }
    }
?>