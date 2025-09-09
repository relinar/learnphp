<?php
 
function hello() {
    var_dump ("Hello, World!");
}
 
hello();
hello();
hello();
hello();
 
function helloName($name) {
    var_dump ('Hello' . $name);
}
 
helloName('Relina');
helloName('Georg');
helloName();

function helloNameAndAge($name='Unknown', $age) {
    var_dump ("Hello  $name and you are $age years old");
}

helloNameAndAge('Relina', 17);
helloNameAndAge('Georg', 20);

function stuff(...$args) {
    var_dump (...$args);
}

stuff(1,2,3,4);
stuff(1,2,3,4,5,6,7);

function sum($a, $b){
    return $a + $b;
    var_dump("This will never be executed");
}

$answer = sum(1,5);
var_dump($answer);

function biggerOrSmaller($a){
    if ($a > 10) {
        return "bigger";
    } else {
        return "smaller";
    }
}

var_dump(biggerOrSmaller(5));
var_dump(biggerOrSmaller(15));

function recursive($i) {
    if ($i < 10) {
        var_dump($i);
        recursive($i + 1);
    }
}   
