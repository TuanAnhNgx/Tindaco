<?php
// Include file config.php
include('./backend/config.php');

// Xử lý gửi form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $contentHTML = $_POST['content'];
    $publishedDate = date('Y-m-d H:i:s');

    
    // Chuyển đổi HTML thành Markdown
    require './parsedown/Parsedown.php';
    $parsedown = new Parsedown();
    $contentMarkdown = $parsedown->text($contentHTML);
    // Thực hiện INSERT vào cơ sở dữ liệu
    $query = "INSERT INTO post (title, content_markdown, published_date) VALUES ('$title', '$contentMarkdown', '$publishedDate')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Bài viết đã được thêm thành công!";
    } else {
        echo "Có lỗi xảy ra khi thêm bài viết.";
    }
}
?>