<?php

use Jenssegers\Blade\Blade;
use Bramus\Router\Router;

require __DIR__ . '/../vendor/autoload.php';

function getSections() {
    $sections = [];

    foreach (glob(__DIR__ . '/../_documentation/*/*.md') as $file) {
        $exp = explode('/', $file);
        $pageName = str_replace('.md', '', array_pop($exp));
        $sectionName = array_pop($exp);

        $sections[ucfirst($sectionName)][$sectionName . '/' . $pageName] = ucfirst(str_replace('-', ' ', $pageName));
    }

    return $sections;
}

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
        'sections' => getSections(),
        'page' => $page,
    ]);
});

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
});

$router->run();