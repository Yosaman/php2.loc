<?php

require_once '../autoload.php';

$article = new \App\Models\Article();

if (!empty($_POST)) {
    if (isset($_POST['id'])) {
        $article->id = $_POST['id'];
    }
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();
} else {
    $article->id = $_GET['id'];
    $article->delete();
}

header('Location: http://php2.loc/admin.php');