<?php

require '../vendor/autoload.php';

$products = ['Videos', 'Musics', 'Games', 'Cards', 'Miscellaneous'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/view');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', ['products' => $products]
);