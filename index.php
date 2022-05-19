<?php

include  'database.php';

$sql = "SELECT *
        FROM article
        ORDER BY published_at";

/** @var mysqli $conn */
$results = mysqli_query($conn, $sql);

//判斷查詢結果是否成功
if ($results === false){
    echo mysqli_error($conn);
} else {
    //  fetch all 取得全部資料
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

echo "Connected successfully";

?>

<?php require 'header.php'; ?>
        <?php if(empty($articles)) : ?>
            <p>No articles found.</p>
        <?php else : ?>
            <ul>
            <?php foreach ($articles as $article) : ?>
                <li>
                    <article>
                        <h2><a href="article.php?id=<?= $article['id']?>"><?= $article['title']; ?></a></h2>
                        <p><?= $article['content']; ?></p>
                    </article>
                </li>
            <?php endforeach;?>
        </ul>
        <?php endif;?>
<?php require 'footer.php'; ?>


