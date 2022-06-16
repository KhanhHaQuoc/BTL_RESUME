<?php
include "./function.php";
if(!empty($_POST['username']) && !empty($_POST['password'])){
    $account = getAccountInfor($_POST['username'],$_POST['password']);
    if(empty($account)){
        header("location: index.php");
    }
    else{
        header("location: member.php");
    }
}
else(
    header("location: index.php")
)
?>