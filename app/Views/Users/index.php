<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>

    <h1>User Accounts</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customer Accounts</a> |
        <a href="/users">User Accounts</a>
    </nav>

    <hr>

    <?php foreach ($users as $user): ?>

        <div>
            <h3><?= esc($user['username']) ?></h3>
            <p>Full Name: <?= esc($user['full_name']) ?></p>
            <p>Role: <?= esc($user['role']) ?></p>
        </div>

        <hr>

    <?php endforeach; ?>

</body>
</html>