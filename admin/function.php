<?php
function getAccountInfor($username,$password){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "SELECT * FROM members WHERE user_name = '$username' and  password ='$password'";   //Vì nó là câu lệnh SELECT
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($result);
        //Lấy ra từng bản ghi từ TẬP KẾT QUẢ và lưu tạm vào $row
    // 3. Dong ket noi
    mysqli_close($conn);
    return $rows; //Trả về 1 mảng
}