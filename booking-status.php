<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Status</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy dữ liệu từ biểu mẫu
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $destination = $_POST["destination"];
        $activity = $_POST["activity"];
        $startDate = $_POST["startDate"];
        $endDate = $_POST["endDate"];
        $currentDate = date("Y-m-d H:i:s"); //lấy system date để check thời gian khách hàng gửi thông tin

        include ('./backend/config.php');
        $sql = "INSERT INTO customers VALUES ('','$name', '$phone', '$destination', '$activity', '$startDate', '$endDate', '$currentDate')";

        if ($conn->query($sql) === TRUE) {
            session_start();
            $_SESSION['success_message'] = "Chúng tôi đã nhận được thông tin của bạn. Nhân viên sẽ sớm liên hệ lại với bạn. Chân thành cảm ơn";
            header("Location: index.php"); // Chuyển hướng trở lại trang index.php
            exit();
            
        } else {
            echo "Có lỗi xảy ra: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Yêu cầu không hợp lệ.";
    }
    ?>
</body>
</html>
