<?php

// function dd($value) {
//     echo "<pre>";
//     var_dump($value);
//     echo "</pre>";

//     die();
// }

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

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
else if ($uri === "/packages") {
    require 'pages/packages.php';
}
else if ($uri === "/thankyou") {
    require 'pages/thankyou.php';
}
else {
    require 'pages/404.php';
}

?>