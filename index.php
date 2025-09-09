<?php
 
$bool = true && false;
$bool = true || false;
$bool = !false;
$bool = (true  && false || false) && !(true || false && true);
$bool = 10 > 5;
$bool = 10 < 5;
$bool = 10 < 10;
$bool = 10 == '10';
$bool = 10 !== '10';
$bool = 10 === '10';  // === controlls the types first
var_dump($bool);
