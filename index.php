<?php
$num = 15;
if($num = 10) {
    var_dump('Suurem');
} elseif ($num < 10) {

} else {

}

$day = date('w', strtotime('09.09.2025'));
var_dump($day);

switch($day) {
    case 1:
        var_dump('Esmaspäev');
        break;
    case 2:
        var_dump('Teisipäev');
        break;
    case 3:
        var_dump('Kolmapäev');
        break;
    case 4:
        var_dump('Neljapäev');
        break;
    case 5:
        var_dump('Õhtul');
        break;
    case 6:
        var_dump('Pidupäev');
        break;
    case 0:
        var_dump('Pühapäev');
        break;
    default:
        var_dump('imelik');
        break;

}