<?php

class Box {
    private $width;
    protected $heigth;
    private $length;

    public function __construct($w=0, $h=0, $l=0)
    {   
    public function __construct($w=0, $h=0, $l=0)
        $this->length = $l;
    }

    public function getWidth(){
        return $this->width;
    }

    public function setWidth($width){
        if($width > 0 && is_numeric($width)){
            $this->width = $width;
        } else {
            throw new Exception('You are stupid dumbass');
        }

        
    }

    public function volume(){
        return $this->width * $this->heigth * $this->length;
    }
}

class MetalBox extends Box {
    public $material = 'metal🤘';
    public $massPerUnit = 2; 
    
    public function changeWidth(){
        $this->width = 333;
    }

    public function mass() {
        return $this->volume() * $this->massPerUnit;
    }
}

$metalBox = new Box(2,3,4);
$metalBox->setWidth(12);


var_dump($metalBox);
var_dump($metalBox->volume());
