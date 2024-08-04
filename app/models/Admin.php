<?php
class Admin {
    private $conn;
    private $table = 'admins';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login($username, $password) {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE username = :username AND password = :password';

        // Hiển thị câu lệnh truy vấn để kiểm tra
        echo "Query: $query<br>";

        $stmt = $this->conn->prepare($query);

        if ($stmt === false) {
            // Nếu không thể chuẩn bị câu lệnh, hiển thị lỗi
            echo "Error preparing statement: " . implode(", ", $this->conn->errorInfo()) . "<br>";
            return false;
        }

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return false;
    }
}
?>
