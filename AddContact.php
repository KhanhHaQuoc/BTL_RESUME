<?php

    include('function.php'); //cho thằng này hiểu dược addPost là gì




        if(!empty($_POST['txtEmail']) && !empty($_POST['txtMessage'])){
            $full_name = $_POST['txtName'];
            $email = $_POST['txtEmail'];
            $message  = $_POST['txtMessage'];


            if(addContact($full_name,$email,$message )){
                header("location: Contact.php");
            }else{
                echo "<h3 class='bg-dark text-white'>Bạn gửi không thành công</h3>";
            }
            
        }else{
            echo "<h3 class='bg-dark text-white'>Bạn chưa nhập dữ liệu</h3>";
        }

?>