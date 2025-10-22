<?php

use App\Models\User;

function view($viewName, $variables = []) {
    extract($variables);
    include __DIR__ . "/views/$viewName.php";
}

function redirect($path) {
    header("Location: $path");
    exit; // stop execution after redirect
}

function auth() {
    if (isset($_SESSION['userID'])) {
        return User::find($_SESSION['userID']);
    }
    return false;
}
