<?php
    include('function.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            if(delContactByID($id)){
                    header("location: contact.php");

            }else {
                echo "Xóa không được";
            }
    }
    ?>