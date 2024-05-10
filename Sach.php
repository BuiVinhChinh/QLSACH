<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Sách</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Danh sách Sách</h2>
    <table>
        <thead>
            <tr>
                <th>Mã Sách</th>
                <th>Tên Sách</th>
                <th>Số Lượng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Hiển thị dữ liệu từ Controller
            foreach ($sachData as $sach) {
                echo "<tr>";
                echo "<td>".$sach["MaSach"]."</td>";
                echo "<td>".$sach["TenSach"]."</td>";
                echo "<td>".$sach["SoLuong"]."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
