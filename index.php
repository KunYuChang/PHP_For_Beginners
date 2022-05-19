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
        ORDER BY published_at";

$results = mysqli_query($conn, $sql);

//判斷查詢結果是否成功
if ($results === false){
    echo mysqli_error($conn);
} else {
    //  fetch all 取得全部資料
    $articles = mysqli_fetch_all($results);

    var_dump($articles);
}

echo "Connected successfully";