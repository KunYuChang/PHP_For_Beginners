<?php

$db_host = 'localhost';
$db_name = 'cms';
$db_user = 'cms_www';
$db_pass = 'cms_pass';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

$sql = "SELECT *
        FROM article
        WHERE id = 3";

$results = mysqli_query($conn, $sql);

//判斷查詢結果是否成功
if ($results === false) {
    echo mysqli_error($conn);
} else {
    $article = mysqli_fetch_assoc($results);
}

echo "Connected successfully";

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
<header>
    <h1>My blog</h1>
</header>
<main>
    <?php if (empty($article)) : ?>
        <p>Article not found.</p>
    <?php else : ?>
        <ul>
            <li>
                <article>
                    <h2><?= $article['title']; ?></h2>
                    <p><?= $article['content']; ?></p>
                </article>
            </li>
        </ul>
    <?php endif; ?>
</main>
</body>
</html>


