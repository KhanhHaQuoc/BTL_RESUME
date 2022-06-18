<?php
  include "./function.php";
  $posts = getPosts();
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
                <li class="menu-item"><a href="about.php" class="menu-link">ABOUT US</a></li>
                <li class="menu-item"><a href="contact.php" class="menu-link">CONTACT</a></li>
                <li class="menu-item active"><a href="blog.php" class="menu-link">BLOG</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container">
<div class="blog-container">
  <div class="row">
    <?php
    foreach($posts as $post){
    ?>
    <div class="col-12 col-md-6">
      <div class="card mb-3">
          <a href="post.php?id=<?=$post['id']?>">
            <img src="<?=$post['picture']?>" class="card-img-top img-fluid" alt="...">
          </a>
          <div class="card-body">
            <h5 class="card-title">
                <a class="text-decoration-none text-secondary" href="post.php?id=<?=$post['id']?>"><?=$post['title']?></a>
            </h5>
            <p class="card-text"><?=$post['description']?></p>
            <p><?=$post['date']?></p>
          </div>
        </div>
    </div>
    <?php
    }
    ?>
  </div> 
</div>
</div>

<?php
include "./footer.php";
?>