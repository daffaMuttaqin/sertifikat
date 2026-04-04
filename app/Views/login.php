<!DOCTYPE html>
<html>

<head>
    <title>Login Admin</title>
</head>

<body>

    <h2>Login Admin</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <p><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form method="post" action="/login">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <button type="submit">Login</button>
    </form>

</body>

</html>