<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "travel";

// Tạo kết nối đến database dùng mysqli_connect()
$conn = mysqli_connect($servername, $username, $password, $database)  or die("không thể kết nối tới database");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Thiết lập kết nối ủa chúng ta khi truy vấn là dạng UTF8 trong trường hợp dữ liệu là tiếng việt có dâu
mysqli_query($conn,"SET NAMES 'UTF8'")

?>

