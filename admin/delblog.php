<?php
    include('function.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            if(delBlogByID($id)){
                    header("location: blog.php");

            }else {
                echo "Xóa không được";
            }
    }
    ?>