<?php require("partials/head.php"); ?>

    <h1>Submit your name</h1>
    <form method="post" action="/names">
        <input name="name">
        <button type="submit">Submit</button>
    </form>

    <?php foreach ($users as $user) : ?>
        <li><?= $user->name; ?></li>
    <?php endforeach; ?>

    <h1>Task for the day</h1>

    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else : ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>

<?php require("partials/footer.php"); ?>