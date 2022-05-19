<?php

include  'database.php';

// 驗證傳進來的GET是不是數字
if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $sql = "SELECT *
        FROM article
        WHERE id = " . $_GET['id'];

    $results = mysqli_query($conn, $sql);

    //判斷查詢結果是否成功
    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $article = mysqli_fetch_assoc($results);
    }
} else {
    $article = null;
}

?>

<?php require 'header.php'; ?>
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
<?php require 'footer.php'; ?>

