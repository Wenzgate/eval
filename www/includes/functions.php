<?php

require_once __DIR__ . '/../../vendor/autoload.php';

function getTwigInstance() {
  // le dossier ou on trouve les templates
  $loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
  // initialiser l'environnement Twig (avec debug)
  $twig = new Twig\Environment($loader, ['debug' => true]);

  return $twig;
}

function getNews(){
  $list = include 'data/news.php';
  return $list;
}

function getMovie($movieName) {
  $movieDataFile = 'data/' . $movieName . '.php';

  if (file_exists($movieDataFile)) {
      return include $movieDataFile;
  } else {
      require '404.php';
  }
}

