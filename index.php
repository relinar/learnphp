<?php
 
 class Box{
    public $width;
    public $height;
    public $length;
    
public function __construct($w, $h, $l){
    $this->width = $w;
    $this->height = $h;
    $this->length = $l;
}
    public function volume(){
        return $this->width * $this->height * $this->length;
       }
 }

$box1 = new Box();
$box1->width = 10;
$box2 = $box1;
$box2->width = 20;
var_dump($box1->width);