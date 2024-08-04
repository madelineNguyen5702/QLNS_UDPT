<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once '../config/config.php';
require_once '../libs/database.php';
require_once '../app/models/Admin.php';
require_once '../app/controllers/AdminController.php';

// Nếu người dùng đã đăng nhập, điều hướng đến dashboard
if (isset($_SESSION['username'])) {
    header('Location: /QLNS/app/views/admin/dashboard.php');
    exit();
}

$db = new Database();
$conn = $db->connect();
$adminModel = new Admin($conn);
$adminController = new AdminController($adminModel);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($adminController->login($username, $password)) {
        // Đăng nhập thành công, lưu thông tin người dùng vào session
        $_SESSION['username'] = $username;
        // Chuyển hướng đến dashboard
        header('Location: /QLNS/app/views/admin/dashboard.php');
        exit();
    } else {
        // Đăng nhập thất bại, hiển thị thông báo lỗi
        echo '<p style="color:red;">Tên đăng nhập hoặc mật khẩu không đúng</p>';
    }
}

include '../app/views/header.php';
?>

<main>
    <h1>Chào mừng đến với trang chính</h1>
</main>

<?php include '../app/views/footer.php'; ?>
