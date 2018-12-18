<?php

use Jenssegers\Blade\Blade;
use Bramus\Router\Router;

require __DIR__ . '/../vendor/autoload.php';

$router = new Router();
$blade = new Blade(__DIR__ . '/../views', __DIR__ . '/../cache');

$router->get('/', function() use ($blade) {
    echo $blade->make('index');
});

$router->get('/contribute', function() use ($blade) {
    echo $blade->make('index');
});

$router->get('/privacy', function() use ($blade) {
    echo $blade->make('index');
});

$router->get('/terms', function() use ($blade) {
    echo $blade->make('index');
});

$router->get('/doc/([\w\-]+)/([\w\-]+)', function($section, $page) use ($blade) {

    $path = __DIR__ . '/../_documentation/' . basename($section) . '/' . basename($page) . '.md';

    if (!file_exists($path)) {
        header('HTTP/1.1 404 Not Found');
        return;
    }

    $page = (new Parsedown())->text(file_get_contents($path));

    echo $blade->make('documentation', [
        'sections' => require __DIR__ . '/../views/_menu.php',
        'page' => $page,
    ]);
});

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
});

$router->run();