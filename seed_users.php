<?php
require __DIR__ . '/vendor/autoload.php';

use App\Models\User;

$user = new User();
$user->email = 'test@example.com';
$user->password = password_hash('password123', PASSWORD_DEFAULT);
$user->save();

echo "✅ Esimene kasutaja on lisatud!\n";
