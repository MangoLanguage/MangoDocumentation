<?php

$sections = [
    'Intro' => [
        'intro/concept' => 'Concept',
        'intro/project' => 'Project',
        'intro/execution-flow' => 'Execution flow',
    ],
    'Language' => [
        'language/basic-syntax' => 'Basic syntax',
    ],
    'Core' => [
        'core/core-packages' => 'Core packages',
    ],
];

foreach (glob(__DIR__ . '/../documentation/*/*.md') as $file) {
    $exp = explode('/', $file);
    $pageName = str_replace('.md', '', array_pop($exp));
    $sectionName = array_pop($exp);

    $sections[ucfirst($sectionName)][$sectionName . '/' . $pageName] = ucfirst(str_replace('-', ' ', $pageName));
}

return $sections;