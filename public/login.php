<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/QLNS/public/css/styles.css">
</head>
<body>
    <?php include '../app/views/header.php'; ?>

    <main>
        <div class="login-container">
            <form action="/QLNS/public/index.php" method="POST" role="form" class="login-form">
                <h1>LOGIN</h1>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Input Username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>

    <?php include '../app/views/footer.php'; ?>
</body>
</html>
