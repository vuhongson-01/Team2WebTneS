<?php 
include_once("model/Shoes.php");
class Model{
    public $shape = array("Low Top", "High Top", "Mid Top", "Slip-on", "Mule");
    public $class = array("Basas", "Vintas", "Urbas", "Pattas", "Track 6");
    public $budget = array("> 600k", "500k - 599k", "400k - 499k", "300- 399k", "< 300k");
    public $size = array(35=>true, 36=>true, 37=>true, 38=>true, 39=>true, 40=>true, 41=>true, 42=>true, 43=>true, 44=>true, 45=>true, 46=>true);
    public $color = array("black", "white", "green", "yellow", "red", "orange", "beige", "brown");

    public $images = array("Pro_AV00032_", "pro_AV00101_", "pro_track6_A6T002_", "pro_track6_A6T003_", "pro_vintas_A61039_", "pro_AV00118_");

   

    public function setSize($hideSize = null){
        if ($hideSize != null){
            $availableSize = $this->size;
            foreach ($hideSize as $size){
                $availableSize[$size] = false;
            }
            return $availableSize;
        }
        return $this->size;
    }

    public function getShoes(){
         $arr = array(
                new Shoes("pi1", "Track 6 Triple Black", 990000, 39, "black", "Low Top", "Track 6", "pro_track6_A6T003_"),
                new Shoes("pi2", "Track 6 Triple White", 990000, $this->size, $this->color[1], $this->shape[0], $this->class[4], $this->images[2]),
                new Shoes("pi3", "Vintas Saigon 1980S", 560000, $this->size, $this->color[0], $this->shape[0], $this->class[1], $this->images[0]),
                new Shoes("pi4", "Vintas Mister", 650000, $this->size, $this->color[7], $this->shape[1], $this->class[1], $this->images[1]),
                new Shoes("pi5", "Vintas Flanel", 720000, $this->size, $this->color[6], $this->shape[1], $this->class[1], $this->images[5]),
                new Shoes("pi6", "Urbas Suede", 580000, $this->size, $this->color[3], $this->shape[3], $this->class[2], $this->images[4])                
            );
        return $arr;
    }
}
?>