<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        .container {
            width: 800px;
            margin: 0 auto;
        }

        .post {
            min-height: 60px;
            width: auto;
            border: 3px solid black;
            margin: 30px;
        }
    </style>

</head>
<body>

<div class="container">

    <h3>Добавить новость</h3>
    <form method="post" action="Scripts/save.php">
        <input name="title" placeholder="title" type="text">
        <input name="content" placeholder="content" type="text">
        <button>Add</button>
    </form>

    <h3>Удалить новость</h3>
    <form method="get" action="Scripts/save.php">
        <input name="id" placeholder="title" type="number">
        <button>Delete</button>
    </form>



    <h3>Новости:</h3>
    <?php
    foreach ($this->data['news'] as $post) {
        echo '<div class="post">';
        echo '<h4>#' . $post->id . '</h4>' ;
        echo '<form method="post" action="Scripts/save.php">';
        $post->editPost();
        echo '</form>';
        echo '</div>';

    }
    ?>
</div>
</body>
</html>