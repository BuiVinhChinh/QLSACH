<?php

session_start();


if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header("Location: login.html"); 
    exit();
}


$servername = "localhost";
$username = "avnadmin";
$password = "";
$dbname = "User";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Kết nối tới CSDL thất bại: " . $conn->connect_error);
}

// Lấy thông tin từ form
$username = $_POST['username'];
$password = $_POST['password'];

// Xử lý truy vấn kiểm tra thông tin đăng nhập
$sql = "SELECT * FROM users WHERE TenUser='$username' AND MatKhau='$password'";
$result = $conn->query($sql);

// Kiểm tra số dòng dữ liệu trả về từ truy vấn
if ($result->num_rows > 0) {
    // Thành công - thông tin đăng nhập hợp lệ
    $_SESSION["IsLogin"] = true; 
    header("Location: Sach.php"); 
} else {
    // Không thành công - thông tin đăng nhập không hợp lệ
    $_SESSION["IsLogin"] = false; 
    header("Location: login.html"); 
}

$conn->close();
?>
