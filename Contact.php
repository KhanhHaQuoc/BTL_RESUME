

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
                            <form method="POST" action="AddContact.php" >
                                <h1 class=" intro-text mb-5">Leave us a message</h1>
                                <div class="form-floating mb-3 w-100">
                                    <input type="text" class="form-control" id="floatingInput" name="txtName" placeholder="Username">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating mb-3 w-100">
                                    <input type="email" class="form-control" id="floatingPassword" name="txtEmail" placeholder="Password">
                                    <label for="floatingPassword">Email</label>
                                </div>
                                <div class="form-floating mb-3 w-100">
                                    <textarea name="txtMessage" id="floatingPassword2" style="height: 100px" placeholder="Message" class="form-control"></textarea>
                                    <!-- <input type="text" class="form-control" id="floatingPassword2" name="txtMessage" placeholder="Password"> -->
                                    <label for="floatingPassword2">Message</label>
                                </div>
                                <button name="btnSubmit" class=" btn btn-lg btn-dark" type="submit">Submit</button>
                            </form>
                        </div>
                        <div class="col-12 col-sm-5">
                            <img class="img-fluid" src="./image/contact.webp" alt="">
                        </div>
                    </div>

                
            </div>
</div>

 <?php
include "./footer.php";
?>