<?php

$articles = [
    [
        'title' => 'First post',
        'content' => 'This is the first of many posts!'
    ],
    [
        'title' => 'Another',
        'content' => 'Yet another fascinating post...'
    ],
    [
        'title' => 'Read this!',
        'content' => 'You must read this now, it\' essential reading!'
    ]
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My blog</title>
</head>
<body>
    <main>
        <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <h2><?= $article['title']?></h2>
                    <p><?= $article['content']?></p>
                </li>
            <?php endforeach;?>
        </ul>
    </main>
</body>
</html>
