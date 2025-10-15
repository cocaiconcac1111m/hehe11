<?php
$servername = "localhost"; // Tên máy chủ MySQL (thường là localhost)
$username = "rufim53yqnhj_clone"; // Tên người dùng MySQL
$password = "rufim53yqnhj_clone"; // Mật khẩu MySQL
$dbname = "rufim53yqnhj_clone"; // Tên cơ sở dữ liệu MySQL
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
}
?>
