<?php
    include('function.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            if(delMemberByID($id)){
                    header("location:member.php");

            }else {
                echo "Xóa không được";
            }
    }
    ?>