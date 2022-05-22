<?php

require 'classes/Database.php';
require 'includes/article.php';

$db = new Database();
$conn = $db->getConn();


// 驗證傳進來的GET是不是數字
if (isset($_GET['id'])) {
    $article = getArticle($conn, $_GET['id']);
} else {
    $article = null;
}

?>

<?php require 'includes/header.php'; ?>
    <?php if (!$article) : ?>
        <p>Article not found.</p>
    <?php else : ?>
        <ul>
            <li>
                <article>
                    <h2><?= htmlspecialchars($article['title']); ?></h2>
                    <p><?= htmlspecialchars($article['content']); ?></p>
                </article>

                <a href="edit-article.php?id=<?= $article['id']?>">Edit</a>
                <a href="delete-article.php?id=<?= $article['id']?>">Delete</a>
            </li>
        </ul>
    <?php endif; ?>
<?php require 'includes/footer.php'; ?>

