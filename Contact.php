<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dovile Social Media Influencer Business Website Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
<header class="sticky-top bg-white border-bottom">
    <div class="container-fluid py-3">
        <div class="header-top">
           <a class="mx-auto" href="./"><img class="logo" src="./image/DOVILE img.svg" alt=""></a>
        </div>
        <nav class="header-nav pt-3">
            <ul class="menu">
                <li class="menu-item"><a href="home.php" class="menu-link">HOME</a></li>
                <li class="menu-item"><a href="services.php" class="menu-link">SERVICES</a></li>
                <li class="menu-item"><a href="about.php" class="menu-link">ABOUT US</a></li>
                <li class="menu-item active"><a href="contact.php" class="menu-link">CONTACT</a></li>
                <li class="menu-item"><a href="blog.php" class="menu-link">BLOG</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container-fluid block-6 py-2">
         <div class="container">
             <div class="row align-items-center justify-content-between">
                 <div class="col-12 col-sm-5">
                   
                         <p class=" intro-text">Leave me a message</p>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Name</label>
                        </div>

                         <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Your email*</label>
                        </div>
                        
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Message*</label>
                        </div>

                    <button type="button" class="btn btn-dark btn-lg mt-5 mb-3">Submit</button></div>

                 <div class="col-12 col-sm-5">
                     <img class="img-fluid" src="./image/contact.webp" alt="">
                 </div>
             </div>
         </div>
     </div>

 <?php
include "./footer.php";
?>