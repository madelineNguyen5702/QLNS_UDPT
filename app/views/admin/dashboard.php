<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: /QLNS/public/index.php'); // Chuyển hướng đúng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}
?>

<?php include __DIR__ . '/../header.php'; ?>

<main>
    <h1>Chào mừng tới với trang quản trị, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
</main>

<?php include __DIR__ . '/../footer.php'; ?>
