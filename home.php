<?php
include "./function.php";

$members = getMembersInfo();
$testimonials = getTestimonial();
$homes = getHome();
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
                <li class="menu-item active"><a href="home.php" class="menu-link">HOME</a></li>
                <li class="menu-item"><a href="services.php" class="menu-link">SERVICES</a></li>
                <li class="menu-item"><a href="about.php" class="menu-link">ABOUT US</a></li>
                <li class="menu-item"><a href="contact.php" class="menu-link">CONTACT</a></li>
                <li class="menu-item"><a href="blog.php" class="menu-link">BLOG</a></li>
            </ul>
        </nav>
    </div>
</header>
 <div class="intro">
     <div class="container-fluid block-1 py-2">
         <div class="container">
             <div class="row align-items-center justify-content-between">
                 <div class="col-12 col-sm-5">
                   
                         <p class=" intro-text">Hello, so good to see you!</p>
                         <p class=" fw-light fs-5 mt-5"> We help small and medium-sized businesses grow their audience and brand recognition through social media.</p>

                    <a href="./Contact.php" class="btn btn-dark btn-lg mt-5 mb-5">Contact us</a></div>

                 <div class="col-12 col-sm-5">
                     <img class="img-fluid" src="./image/ava.avif" alt="">
                 </div>
             </div>
         </div>
     </div>
     <div class="container-fluid block-2 py-2">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-12 col-sm-3 text-center fs-1">Featured</div>
                 <div class="col-12 col-sm-3 text-center fs-1">Lani Haw</div>
                 <div class="col-12 col-sm-3 text-center fs-1">Deon Five</div>
                 <div class="col-12 col-sm-3 text-center fs-1">KNOXEMUS</div>
             </div>
         </div>
     </div>
     <div class="container-fluid block-3 py-2">
         <div class="container">
             <div class="row d-flex justify-content-center align-items-center">
                 <div class="col-7 ">
          
                         <p class="intro-text text-center">We are Minh and Khánh</p>
                         <p class="fw-light fs-5 text-center">We are your new social media bestie. Our mission is to help small and medium-sized businesses grow their audience and brand recognition through social media. To do that, We believe it's paramount to create a committed and genuine community that has a positive influence on people’s lives beyond the online sphere. Our goal is to help you understand the power of social media and create connections that go beyond the internet.</p>


                 </div>
             </div>
         </div>
     </div>
     <div class="container-fluid block-4 py-2">
         <div class="container">
            <?php
            foreach ($members as $member) {
            ?>
             <div class="row align-items-center justify-content-between">
                <div class="col-12 col-sm-5">
                     <img class="img-fluid mb-3" src="<?= $member['image'] ?>" alt="">
                 </div> 
                 <div class="col-12 col-sm-5">
                   
                         <p class=" intro-text"><?= $member['fullname'] ?></p>
                         <p class="fw-light fs-5 mt-5"><?= $member['description'] ?></p>

                    <a href="./About.php" class="btn btn-dark btn-lg mt-5">About us</a></div>
             </div>
            <?php
            }
            ?>
         </div>
     </div>
        <div class="container-fluid block-5 py-2">
            <div class="container mt-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col col-sm-7 ">           
                         <p class="intro-text text-center mt-5">Are you ready to...</p>                
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center ">
                <?php
                foreach ($homes as $home) {
                ?>
                    <div class=" col-md-5 mt-5 mb-5">
                        <p class="heading-text"><?= $home['questions'] ?></p>
                        <p><?= $home['answers']?></p>
                    </div>
                    <?php
                }
                ?>
                </div>
            </div>    
        </div>
     <div class="container-fluid block-6 py-2">
         <div class="container">
             <div class="row align-items-center justify-content-between">
                 <div class="col-12 col-sm-5">
                   
                         <p class=" intro-text">Our Blog</p>
                         <p class="fw-light fs-5 mt-5"> We will let you in on some trade secrets and share my top tips on how to successfully promote your brand online.</p>

                    <a href="./Blog.php" class="btn btn-dark btn-lg mt-5">Read Blog</a></div>

                 <div class="col-12 col-sm-5">
                     <img class="img-fluid" src="./image/block6.avif" alt="">
                 </div>
             </div>
         </div>
     </div>
     <div class="container-fluid block-1 py-2">
     <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-inner container">
    <?php
        $index = 1;
        foreach ($testimonials as $testimonial) {
    ?>

    <div class="carousel-item <?= $index == 1 ? "active" : "" ?>" data-bs-interval="10000">
      <div class="row align-items-center">
          <div class="col-md-6 carousel-img">
          <img class="img-fluid" src="<?= $testimonial['picture'] ?>" class="d-block w-100" alt="...">
          </div>
          <div class="col-md-6">
              <h4>Testimonials</h4>
              <p ><?= $testimonial['quotes'] ?></p>
              <p class="fw-bold" ><?= $testimonial['full_name'] ?></p>
              <p class="fst-italic"><?= $testimonial['work'] ?></p>
          </div>
      </div>
    </div>
    <?php
        $index++;
        }
    ?>
    
    
  </div>
  <div class="carousel-indicators position-static" >
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
     </div>
</div>
    
    

    
 <?php
include "./footer.php";
?>