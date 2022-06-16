<?php
function getAccountInfor($username,$password){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "SELECT * FROM admin WHERE username = '$username' and  password ='$password'";   //Vì nó là câu lệnh SELECT
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($result);
        //Lấy ra từng bản ghi từ TẬP KẾT QUẢ và lưu tạm vào $row
    // 3. Dong ket noi
    mysqli_close($conn);
    return $rows; //Trả về 1 mảng
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

function getContact(){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = 'SELECT * FROM contact'; //Vì nó là câu lệnh SELECT
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

function getIntro(){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = 'SELECT * FROM intro'; //Vì nó là câu lệnh SELECT
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

function getMember(){
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

function addMember($fullname, $description, $email, $image, $phone, $birthday, $education){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "INSERT INTO members (fullname, description, email, image, phone, birthday, education) VALUES ('$fullname', '$description', '$email', '$image', '$phone', '$birthday', '$education')";
    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
}

function editMember($id, $fullname, $description, $email, $image, $phone, $birthday, $education){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "UPDATE members SET  fullname='$fullname', description='$description', email='$email', image='$image', phone='$phone', birthday='$birthday', education='$education' WHERE (id_member = '$id')";
    if(mysqli_query($conn, $sql)){
        //Trường hợp thực hiện lệnh khác SELECT > Kết quả trả về TRUE ko?
        return true;
    }else{
        return false;
    }

    // 3. Dong ket noi
    mysqli_close($conn);
}

function getMemberByID($id){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "SELECT * FROM members WHERE id_member = '$id'"; //Vì nó là câu lệnh SELECT
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($result);
        //Lấy ra từng bản ghi từ TẬP KẾT QUẢ và lưu tạm vào $row
    // 3. Dong ket noi
    mysqli_close($conn);
    return $rows; //Trả về 1 mảng

}
function delMemberByID($id){
    // 1. Kết nối tới CSDL
    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    // 2. Thực hiện TRUY VẤN
    $sql = "DELETE FROM members WHERE id_member = '$id'"; 
    //mysqli_query trả về 1 tập kết quả
    $result = mysqli_query($conn, $sql);

    if($result) {
        return true;
    }

    return false;
}

?>
