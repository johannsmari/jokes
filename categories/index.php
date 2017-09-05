<?php include_once  $_SERVER['DOCUMENT_ROOT'] . '/nemendur/johannsmari/jokes/worker.php';?>

<?php include_once  $_SERVER['DOCUMENT_ROOT'] . '/nemendur/johannsmari/jokes/worker/htmlSpecialChars';?>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Manage categories</title>
    </head>
    <body>
        <h1>Manage categories</h1>
        <p><a href="worker.php?add">Add new category</a></p>
        <ul>
            <?php foreach ($categories as $category); ?>
            <li>
                <form action="" method="post">
                <div>
                    <?php echo html ($category['name']); ?>
                    <input type="hidden" name="id" value="<?php echo $category['id'];?>">
                    <input type="submit" name="action" value="edit">
                    <input type="submit" name="action" value="delete">
                </div>
                </form>
            </li>
        </ul>
    </body>
</html>
