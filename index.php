<?php
  require_once './vendor/autoload.php';
  $users = file_get_contents('https://kodaktor.ru/j/users');
  header('Content-type: text/html; charset=utf-8' );
  $result = json_decode($users, true);

  $loader = new \Twig\Loader\FilesystemLoader('./views');

  $twig = new \Twig\Environment($loader);
  echo $twig -> render('users.twig', $result);
