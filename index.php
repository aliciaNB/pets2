<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require vendor/autoload file
require_once('vendor/autoload.php');

//Create an instane of the Base class (instantiate Fat-Free)
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
//    $view = new Template();
//    echo $view-> render('views/home.html');
    echo "<h1>My Pets</h1>";
    echo '<a href="order">Order a Pet</a>';
});

$f3->route('GET /@animal', function($f3, $params) {

    $animal = $params['animal'];

    switch($animal) {
        case 'chicken':
            echo 'Cluck!';
            break;
        case 'dog':
            echo 'Woof!';
            break;
        case 'cat':
            echo 'Meow!';
            break;
        case 'elephant':
            echo 'Toot!';
            break;
        case 'fish':
            echo 'Glub';
            break;
        default:
            echo 'hello??';
    }

});

//Run Fat-free
$f3->run();