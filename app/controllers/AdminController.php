<?php
class AdminController {
    private $adminModel;

    public function __construct($adminModel) {
        $this->adminModel = $adminModel;
    }

    public function login($username, $password) {
        echo "Username: $username<br>";
        echo "Password: $password<br>";

        $user = $this->adminModel->login($username, $password);

        var_dump($user);

        if ($user) {
            session_start();
            $_SESSION['username'] = $user['username'];
            header('Location: /QLNS/app/views/admin/dashboard.php'); // Chuyển hướng đến trang dashboard
            exit();
        } else {
            echo "Tên đăng nhập hoặc mật khẩu không đúng.";
        }
    }
}
?>
