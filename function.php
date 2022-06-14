<?php
function getMembersInfo(){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = 'SELECT * FROM members'; //Vì nó là câu lệnh SELECT
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);
    $data =[];
    while($row = mysqli_fetch_assoc($result)){
        //Lấy ra từng bản ghi từ TẬP KẾT QUẢ và lưu tạm vào $row
        array_push($data,$row);
    }

    // 3. Dong ket noi
    mysqli_close($conn);
    return $data;
}

function getTestimonial(){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = 'SELECT * FROM testimonials'; //Vì nó là câu lệnh SELECT
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);
    $data =[];
    while($row = mysqli_fetch_assoc($result)){
        //Lấy ra từng bản ghi từ TẬP KẾT QUẢ và lưu tạm vào $row
        array_push($data,$row);
    }

    // 3. Dong ket noi
    mysqli_close($conn);
    return $data;
}

function getHome(){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = 'SELECT * FROM home'; //Vì nó là câu lệnh SELECT
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);
    $data =[];
    while($row = mysqli_fetch_assoc($result)){
        //Lấy ra từng bản ghi từ TẬP KẾT QUẢ và lưu tạm vào $row
        array_push($data,$row);
    }

    // 3. Dong ket noi
    mysqli_close($conn);
    return $data;
}

function getPosts(){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = 'SELECT * FROM post'; //Vì nó là câu lệnh SELECT
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);
    $data =[];
    while($row = mysqli_fetch_assoc($result)){
        //Lấy ra từng bản ghi từ TẬP KẾT QUẢ và lưu tạm vào $row
        array_push($data,$row);
    }

    // 3. Dong ket noi
    mysqli_close($conn);
    return $data;
}

function getPostByID($id){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "SELECT * FROM post WHERE id = '$id'"; //Vì nó là câu lệnh SELECT
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($result);
        //Lấy ra từng bản ghi từ TẬP KẾT QUẢ và lưu tạm vào $row
    // 3. Dong ket noi
    mysqli_close($conn);
    return $rows; //Trả về 1 mảng
}

// Lập trình hướng thủ tục: hướng tới chức năng > viết dạng HÀM

    // Tôi cần 1 hàm để NHẬN dữ liệu từ FORM và lưu vào CSDL
    function addContact($full_name, $email,$message){
        // 1. Kết nối tới CSDL
        $conn = mysqli_connect("localhost","root","", "btl_cv");
        if(!$conn){
            die("Không thể kết nối tới DB Server");
        }

        // 2. Thực hiện TRUY VẤN
        $sql = "INSERT INTO contact (full_name,email,messages) VALUES ('$full_name', '$email','$message')";

        if(mysqli_query($conn, $sql)){
            //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
            return true;
        }else{
            return false;
        }

        // 3. Dong ket noi
        mysqli_close($conn);
    }
?>

