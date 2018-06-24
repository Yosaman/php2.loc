<?php

require_once 'autoload.php';

$article = new namespace\App\Models\Article();


$article->title = 'Это уже six?';
$article->content = 'Текст новости.';
//
//var_dump($article->title);
//echo '<br>addadsa<br>';
//
//$article->update();
$article->save();
//var_dump($article);