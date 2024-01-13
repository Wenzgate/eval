<?php 


require_once 'includes/functions.php';

$twig = getTwigInstance();
$movieName = isset($_GET['m']) ? $_GET['m'] : 'bunny';

// Get the news data using the getNews() function
$movieArray = getMovie($movieName);

$template = $twig->load('movie.twig');

echo $template->render(['movieData' => $movieArray]);
