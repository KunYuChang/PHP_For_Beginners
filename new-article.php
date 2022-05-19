<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
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


