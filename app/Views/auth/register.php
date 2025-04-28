<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="<?= site_url('/register/process') ?>" method="post">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Register</button>
    </form>
    <p>Sudah punya akun? <p>Sudah punya akun? <a href="<?= site_url('/login') ?>">Login</a></p>    </p>
</body>
</html>
