<?php
    include('function.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            if(delTestiByID($id)){
                    header("location: testimonial.php");

            }else {
                echo "Xóa không được";
            }
    }
    ?>