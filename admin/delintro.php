<?php
    include('function.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            if(delIntroByID($id)){
                    header("location: intro.php");

            }else {
                echo "Xóa không được";
            }
    }
    ?>