<?php

use M2i\Mvc\App;

require __DIR__.'/../vendor/autoload.php';

define('BASE_URL', '/php/14-php-oo/book/public');

$app = new App();
$app->setBasePath(BASE_URL);

$app->addRoutes([
    ['GET', '/', 'HomeController@index'],
    ['GET', '/book', 'BookController@list'],
    ['GET|POST', '/book/create', 'BookController@create'],
    ['GET', '/book/[:id]', 'BookController@show'], 
    ['GET|POST', '/book/[:id]/edit', 'BookController@edit'],
    ['GET|POST', '/book/[:id]/delete', 'BookController@delete'],
]);

$app->run();
