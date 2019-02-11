<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Documentitytytyty</title>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
<!--<style>-->
<!--    body {-->
<!--        background: #999;-->
<!--    }-->
<!--</style>-->
</head>
<body>

<?php require ('partials/nav.php'); ?>
<h1>
Willkommen zu Verein Katze.
</h1>

<p>Alter - 21+</p>

<ul>
    <?php foreach ($tasks as $task) : ?>

        <li>
            <?php if ($task->completed) : ?>

            <strike><?= $task->description; ?> </strike>
            <?php else: ?>
            <?= $task->description; ?>
            <?php endif; ?>

        </li>
    <?php endforeach; ?>
</ul>


</body>
</html>