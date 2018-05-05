<?php require("partials/head.php"); ?>

    <h1>Submit your name</h1>
    <form method="post" action="/users">
        <input name="name">
        <button type="submit">Submit</button>
    </form>

    <?php foreach ($users as $user) : ?>
        <li><?= $user->name; ?></li>
    <?php endforeach; ?>

<?php require("partials/footer.php"); ?>