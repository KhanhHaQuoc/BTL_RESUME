<?php 
    include('function.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
    }
    
    $post = getPostByID($id);

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
<!--Main content -->
<div class="container-fluid">
    <!-- Lap o day -->
    <div class="row my-2">
        <div class="col-md-8 mx-auto ">
            <div>
                <div class="text-center">
                    <img class="img-fluid" src="<?php echo $post['post_picture'];?>" alt="">
                </div>
                <h5 class="fs-1 mt-2 mb-3">
                    <?php echo $post['post_title'];?>
                </h5>
                <p class="fs-2 fst-italic"><?php echo $post['post_description'];?></p>
                <p class=" fst-italic"><?php echo $post['post_date'];?></p>
                <p><?php echo $post['post_body'];?></p>
            </div>
        </div>
    </div>
    <!-- Ket thuc o day-->
</div>

<?php 
    include('footer.php');
?>