<?php

// 資料庫連線
require 'includes/database.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['title'] == '') {
        $errors[] = 'Title is required';
    }

    if ($_POST['content'] == '') {
        $errors[] = 'Content is required';
    }

    if (empty($errors)) {
        $conn = getDB();

        $sql = "INSERT INTO article (title, content, published_at)
            VALUES (?,?,?)";

        /** @var mysqli $conn */
        $stmt = mysqli_prepare($conn, $sql);

        //判斷查詢結果是否成功
        if ($stmt === false) {
            echo mysqli_error($conn);
        } else {

            mysqli_stmt_bind_param($stmt, "sss", $_POST['title'], $_POST['content'], $_POST['published_at']);

            if (mysqli_stmt_execute($stmt)) {
                $id = mysqli_insert_id($conn);
                echo "Inserted record with ID: $id";
            } else {
                echo mysqli_st_error($stmt);
            }
        }
    }
}
?>

<?php require 'includes/header.php'; ?>

<h2>New article</h2>

<?php if (!empty($errors)) : ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form action="" method="post">
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Article title">
    </div>

    <div>
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="40" rows="4" placeholder="Article content"></textarea>
    </div>

    <div>
        <label for="published_at">Publication date and time</label>
        <input type="text" name="published_at" id="published_at">
    </div>

    <button>Add</button>
</form>

<?php require 'includes/footer.php'; ?>


