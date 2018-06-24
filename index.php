<?php

require __DIR__ . '/autoload.php';

$data = \App\Models\Article::findAll();

$view = new \App\View;

$view->assign('news', $data)->display(__DIR__ . '/App/templates/index.php');