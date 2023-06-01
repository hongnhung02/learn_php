<?php
/*Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%)
Điểm trung bình >= 9.0 in ra là hạng "Xuất sắc".
Điểm trung bình >= 7.0 và < 9.0 in ra là hạng "Giỏi"
Điểm trung bình >= 5.0 và < 7.0 in ra là hạng "Khá"
Điểm trung bình < 5.0 in ra là hạng "Trung bình - Yếu"*/
function calculateGrade($diemGiuaKy, $diemCuoiKy) {
    $diemTrungBinh = ($diemGiuaKy * 0.3) + ($diemCuoiKy * 0.7);
    
    if ($diemTrungBinh >= 9.0) {
        $hang = "Xuất sắc";
    } elseif ($diemTrungBinh >= 7.0 && $diemTrungBinh < 9.0) {
        $hang = "Giỏi";
    } elseif ($diemTrungBinh >= 5.0 && $diemTrungBinh < 7.0) {
        $hang = "Khá";
    } else {
        $hang = "Trung bình - Yếu";
    }
    return $hang;
}
// Gọi hàm và kiểm tra hạng học lực
$diemGiuaKy = 1;
$diemCuoiKy = 0.75;
$ketQua = calculateGrade($diemGiuaKy, $diemCuoiKy);
echo "Hạng học lực: " . $ketQua;
?>
