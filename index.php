<?php

// function dd($value) {
//     echo "<pre>";
//     var_dump($value);
//     echo "</pre>";

//     die();
// }

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/") {
    require 'pages/home.php';
    die();
}
else if ($uri === "/about") {
    require 'pages/about.php';
}
else if ($uri === "/contact") {
    require 'pages/contact.php';
}
else if ($uri === "/login") {
    require 'admin/login.php';
}
else {
    require 'pages/404.php';
}

?>