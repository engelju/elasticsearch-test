<?php
require_once '../app/init.php'
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Searching with ElasticSearch</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.1.0/milligram.min.css">
    </head>
    <body>
        <div class="container" style="padding-top:7.5rem;">
            <form action="index.php" method="GET" autocomplete="off">
                <fieldset>
                    <label>Search for something <input type="text" name="q"></label>
                    <input type="submit" value="Search" class="button-primary">
                </fieldset>
            </form>
        </div>
    </body>
</html>
