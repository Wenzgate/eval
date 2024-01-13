<?php

require_once 'includes/functions.php';

$twig = getTwigInstance();

// Get the news data using the getNews() function
$newsArray = getNews();

$template = $twig->load('home.twig');

echo $template->render(['newsArray' => $newsArray]);
