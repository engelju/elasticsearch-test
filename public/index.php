<?php
require_once '../app/init.php'
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Searching with ElasticSearch</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <form action="index.php" method="GET" autocomplete="off">
            <label>Search for something <input type="text" name="q"></label>
            <input type="submit" value="Search">
        </form>
    </body>
</html>
