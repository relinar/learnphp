<?php
$db = new PDO('sqlite:' . __DIR__ . '/db.sqlite');

$db->exec('CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL
)');

echo "Database ja tabel 'users' on loodud!\n";
