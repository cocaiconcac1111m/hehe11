<?php
$servername = "localhost"; // Tên máy chủ MySQL (thường là localhost)
$username = "ltrieuphucdev_tx"; // Tên người dùng MySQL
$password = "ltrieuphucdev_tx"; // Mật khẩu MySQL
$dbname = "ltrieuphucdev_tx"; // Tên cơ sở dữ liệu MySQL
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
}
?>
