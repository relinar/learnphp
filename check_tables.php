<?php
$db = new PDO('sqlite:' . __DIR__ . '/db.sqlite');

$result = $db->query("SELECT name FROM sqlite_master WHERE type='table'");
$tables = $result->fetchAll(PDO::FETCH_ASSOC);

print_r($tables);
if (count($tables) > 0) {
    echo "Tabelid olemas:\n";
    foreach ($tables as $table) {
        echo "- " . $table['name'] . "\n";
    }
} else {
    echo " Tabeleid ei leitud.\n";
}