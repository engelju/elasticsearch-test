<?php
require_once '../app/init.php';
if (!empty($_POST)) {

    if (isset($_POST['title'], $_POST['body'], $_POST['keywords'])) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $keywords = explode(',', $_POST['keywords']);

        $indexed = $client->index([
            'index' => 'articles',
            'type' => 'article',
            'body' => [
                'title' => $title,
                'body' => $body,
                'keywords' => $keywords
            ]
        ]);

        if ($indexed) {
            print_r($indexed);
        }
    }
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Adding with ElasticSearch</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.1.0/milligram.min.css">
    </head>
    <body>
        <div class="container" style="padding-top:7.5rem;">
            <h2>Add a new item to the index</h2>
            <form action="add.php" method="POST" autocomplete="off">
                <fieldset>
                    <label>Title <input type="text" name="title"></label>
                    <label>Body <textarea class="form-control" name="body" rows="8"></textarea></label>
                    <label>Keywords <input type="text" name="keywords" placeholder="comma, seperated, values"></label>
                    <input type="submit" value="Add" class="button-primary">
                </fieldset>
            </form>
        </div>
    </body>
</html>
