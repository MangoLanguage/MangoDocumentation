<?php

$sections = [
    'Intro' => [
        'intro/concept' => 'Concept',
        'intro/project' => 'Project',
        'intro/execution-flow' => 'Execution flow',
    ],
    'Language' => [],
    'Core' => [],
];

foreach (glob(__DIR__ . '/../_documentation/*/*.md') as $file) {
    $exp = explode('/', $file);
    $pageName = str_replace('.md', '', array_pop($exp));
    $sectionName = array_pop($exp);

    $sections[ucfirst($sectionName)][$sectionName . '/' . $pageName] = ucfirst(str_replace('-', ' ', $pageName));
}

return $sections;