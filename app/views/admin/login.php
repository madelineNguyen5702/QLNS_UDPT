<?php
session_start();
include '../header.php';
?>

<main>
    <form action="/QLNS/public/index.php" method="POST" role="form">
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
</main>

<?php include '../footer.php'; ?>
