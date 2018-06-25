<?php

require __DIR__ . '/autoload.php';

$data = \App\Models\Article::findAll();

$view = new \App\View;

$view->news = $data;

$view->display(__DIR__ . '/App/templates/admin.php');