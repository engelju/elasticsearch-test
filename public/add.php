<?php
require_once '../app/init.php'
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Adding with ElasticSearch</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <form action="add.php" method="GET" autocomplete="off">
            <label>Title <input type="text" name="title"></label></br>
            <label>Body <textarea name="body" rows="8"></textarea></label></br>
            <label>Keywords <input type="text" name="keywords" placeholder="comma, seperated, values"></label></br>
            <input type="submit" value="Search">
        </form>
    </body>
</html>
