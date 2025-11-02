<?php

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader([__DIR__ . '/templates']);
$twig = new \Twig\Environment($loader);

require_once __DIR__ . '/data.php';

echo $twig->render('index.html.twig', getData());
