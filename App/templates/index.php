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
        <h3>Новости:</h3>

        <?php
        foreach ($this->data['news'] as $post) {
            echo '<div class="post">';
            $post->printPost();
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>