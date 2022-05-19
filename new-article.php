<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    // 資料庫連線
    require 'includes/database.php';

    $sql = "INSERT INTO article (title, content, published_at)
            VALUES ('". mysqli_escape_string($conn,$_POST['title']) . "','"
                      . mysqli_escape_string($conn,$_POST['content']) . "','"
                      . mysqli_escape_string($conn,$_POST['published_at']) . "')";

//    var_dump($sql); exit;

    /** @var mysqli $conn */
    $results = mysqli_query($conn, $sql);

    //判斷查詢結果是否成功
    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $id = mysqli_insert_id($conn);
        echo "Inserted record with ID: $id";
    }
}
?>

<?php require 'includes/header.php';?>

<h2>New article</h2>

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

<?php require 'includes/footer.php';?>


