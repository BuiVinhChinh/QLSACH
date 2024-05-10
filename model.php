<?php

class SachModel {
    private $conn;

    public function __construct() {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Sach";

        $this->conn = new mysqli($servername, $username, $password, $dbname);


        if ($this->conn->connect_error) {
            die("Kết nối tới CSDL thất bại: " . $this->conn->connect_error);
        }
    }

    public function layDanhSachSach($limit) {
        // Truy vấn CSDL để lấy dữ liệu Sách
        $sql = "SELECT * FROM Sach LIMIT $limit"; 
        $result = $this->conn->query($sql);

        $sachData = array();
        if ($result->num_rows > 0) {
      
            while($row = $result->fetch_assoc()) {
                $sachData[] = $row;
            }
        }

        return $sachData;
    }
}
