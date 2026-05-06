<!DOCTYPE html>
<html>
<head>
    <title>Anti-Hacker Lab</title>
</head>
<body>
    <h1>Security Lab</h1>

    <form action="/" method="post">
        <?= csrf_field() ?>
        <input type="text" name="user_input" placeholder="Type something..." value="<?= esc($user_input ?? '') ?>">
        <button type="submit">Submit</button>
    </form>

    <hr>

    <div>
        <h3>Output:</h3>
        <?php if (isset($user_input)): ?>
            <p>Result: <strong><?= esc($user_input) ?></strong></p>
        <?php else: ?>
            <p>Result: No input yet</p>
        <?php endif; ?>
    </div>
</body>
</html>