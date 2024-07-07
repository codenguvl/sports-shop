<?php
session_start();

require './db.php';

if (isset($_POST['user_id']) && isset($_POST['points_to_use'])) {
    $user_id = $_POST['user_id'];
    $points_to_use = intval($_POST['points_to_use']);

    $query = "SELECT diem_tich_luy FROM khach_hang WHERE id = ?";
    if ($stmt = $db->prepare($query)) {
        $stmt->bind_param("i", $user_id);

        $stmt->execute();

        $stmt->bind_result($diem_tich_luy);
        $stmt->fetch();

        if (isset($diem_tich_luy)) {
            if ($diem_tich_luy > 0) {
                if ($points_to_use <= $diem_tich_luy) {
                    $points_value = $points_to_use * 1000;
                    echo json_encode(['success' => true, 'points_used' => $points_to_use, 'value' => $points_value]);
                } else {
                    echo json_encode(['success' => false, 'message' => 'Bạn không có đủ điểm tích lũy.']);
                }
            } else {
                echo json_encode(['success' => false, 'message' => 'Bạn không có điểm tích lũy.']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Không tìm thấy người dùng.']);
        }

        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Lỗi trong việc chuẩn bị truy vấn.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Yêu cầu không hợp lệ.']);
}
?>