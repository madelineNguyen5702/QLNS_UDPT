<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<nav>
    <ul>
        <?php if (isset($_SESSION['username'])): ?>
            <li><a href="/QLNS/app/views/admin/dashboard.php">Home</a></li>
            <li><a href="/QLNS/public/logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="/QLNS/public/index.php">Home</a></li>
            <li><a href="/QLNS/public/login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>
