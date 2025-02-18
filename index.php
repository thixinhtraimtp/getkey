<?php
// Kiểm tra nếu có tham số key
if (isset($_GET['key'])) {
    $key = $_GET['key'];
    
    // Kiểm tra nếu request muốn trả về JSON
    if (isset($_GET['format']) && $_GET['format'] == 'json') {
        header('Content-Type: application/json');
        echo json_encode(['key' => $key]);
        exit;
    }
    
    // Nếu không, hiển thị trang web đẹp
    include 'template.php';
} else {
    // Trả về lỗi nếu không có key
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode(['error' => 'Key không hợp lệ']);
}
?>
