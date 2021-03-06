<?php
include "./function.php";

$members = getMembersInfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIKHA Social Media Influencer Business</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
<header class="sticky-top bg-white border-bottom">
    <div class="container-fluid py-3">
        <div class="header-top">
           <a class="mx-auto text-decoration-none text-muted fs-1" href="./">MIKHA</a>
        </div>
        <nav class="header-nav pt-3">
            <ul class="menu">
                <li class="menu-item "><a href="home.php" class="menu-link">HOME</a></li>
                <li class="menu-item"><a href="services.php" class="menu-link">SERVICES</a></li>
                <li class="menu-item active"><a href="about.php" class="menu-link">ABOUT US</a></li>
                <li class="menu-item"><a href="contact.php" class="menu-link">CONTACT</a></li>
                <li class="menu-item"><a href="blog.php" class="menu-link">BLOG</a></li>
            </ul>
        </nav>
    </div>
</header>

 <div class="intro">
        <div class="container-fluid block-1 py-2">
                <div class="container-fluid">
                    <?php
                    foreach ($members as $member) {
                    ?>
                    <div class="row align-items-center justify-content-between mb-5">
                        <div class="col-12 col-sm-4">
                            <img class="img-fluid mb-3" src="<?= $member['image'] ?>" alt="">
                        </div> 
                        <div class="col-12 col-sm-6">
                        
                                <p class=" intro-text">H??? v?? T??n: <?= $member['fullname'] ?></p>
                                <p class="fw-light fs-5 mt-1">Ng??y sinh: <?= $member['birthday'] ?></p>
                                <p class="fw-light fs-5 mt-1">H???c v???n: <?= $member['education'] ?></p>
                                <p class="fw-light fs-5 mt-1">Email: <?= $member['email'] ?></p>
                                <p class="fw-light fs-5 mt-1">??i???n tho???i: <?= $member['phone'] ?></p>
                                <p class="fw-light fs-5 mt-1">Gi???i thi???u: <?= $member['description'] ?></p>

                            <a href="./Contact.php?id=<?= $member['id_member'] ?>" class="btn btn-dark btn-lg mt-5">Contact me</a></div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
     </div>
       

     <div class="container-fluid block-2 py-2">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-12 col-sm-3 text-center fs-1">Facebook</div>
                 <div class="col-12 col-sm-3 text-center fs-1">Twitter</div>
                 <div class="col-12 col-sm-3 text-center fs-1">YouTube</div>
                 <div class="col-12 col-sm-3 text-center fs-1">Instagram</div>
             </div>
         </div>
     </div>

     <div class="container-fluid block-1 py-2">
         <div class="container">
             <div class="row d-flex justify-content-center align-items-center">
                 <div class="col-7 ">
          
                         <p class="intro-text text-center">Changing the digital world</p>
                         <p class="fw-light fs-5 text-center">We believe it's paramount to create a committed and genuine community that has a positive influence on people???s lives beyond the online sphere. With more people online than ever before, the competition for attention is fierce, and you have to work hard to appeal to the masses. That's why it's our goal to help you understand the power of social media and create connections that go beyond the internet.</p>


                 </div>
             </div>
         </div>
     </div>
     <div class="container-fluid  py-2">
         <div class="container">
             <div class="row align-items-center justify-content-between">
                <div class="col-12 col-sm-5">
                     <img class="img-fluid" src="./image/ava2.avif" alt="">
                 </div> 
                 <div class="col-12 col-sm-5">
                   
                         <p class=" intro-text">Our blog</p>
                         <p class="fw-light fs-5 mt-5">We will let you in on some trade secrets and share my top tips on how to successfully promote your brand online.</p>

                    <a href="./Blog.php" class="btn btn-dark btn-lg mt-5">Read blog</a></div>
             </div>
         </div>
     </div>
        

 <?php
include "./footer.php";
?>