<?php

include 'model.php';

// Lấy dữ liệu từ Model
$sachModel = new SachModel();
$sachData = $sachModel->layDanhSachSach(5); // Lấy 5 bản ghi đầu tiên

// Include View
include 'Sach.php';
?>
