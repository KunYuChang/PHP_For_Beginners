<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
<form method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <button>Send</button>
</form>
</body>
</html>