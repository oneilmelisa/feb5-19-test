<!DOCTYPE html>
<html>
<body>
<nav>
    <ul>
        <li>
            <a href="/about.php">About</a>
        </li>
    </ul>
</nav>

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