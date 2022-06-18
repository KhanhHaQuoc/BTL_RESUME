<?php 
    session_start();
    include('function.php'); //cho thằng này hiểu dược addPost là gì

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id= $_GET['id'];
    }

    $testi = getTestiByID($id);


    if(isset($_POST['btnSave'])){
        if(!empty($_POST['full_name']) && !empty($_POST['work']) && !empty($_POST['quotes']) && !empty($_POST['picture'])){
            $full_name = $_POST['full_name'];
            $work = $_POST['work'];
            $quotes = $_POST['quotes'];
            $picture = "./image/" . $_POST['picture'];
          
            
            if(editTesti($id, $full_name, $work, $quotes, $picture)){
                header("location: testimonial.php");
            }else{
                echo "<h3 class='bg-dark text-white'>Không thành công</h3>";
            }
            
        }else{
            echo "<h3 class='bg-dark text-white'>Bạn chưa nhập dữ liệu</h3>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a Testimonial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body?>
    <div class="d-flex">
        <div class="d-flex sticky-top flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height:100vh;">
            <a href="./dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4"><?php echo $_SESSION['admin']['username']?></span>
            </a>
            <ul class="nav nav-pills flex-column mb-auto py-4">
                <li class="nav-item">
                    <a href="./member.php" class="nav-link text-white" aria-current="page">
                    Members
                    </a>
                </li>
                <li>
                    <a href="./blog.php" class="nav-link text-white">
                    Blog
                    </a>
                </li>
                <li>
                    <a href="./testimonial.php" class="nav-link active">
                    Testimonials
                    </a>
                </li>
                <li>
                    <a href="./contact.php" class="nav-link text-white">
                    Contact
                    </a>
                </li>
                <li>
                    <a href="./intro.php" class="nav-link text-white">
                    Intro
                    </a>
                </li>
            </ul>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $_SESSION['admin']['ava']?>" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong><?php echo $_SESSION['admin']['name']?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="signout.php">Sign out</a></li>
                </ul>
            </div>
        </div>
        
        <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="edittesti.php?id=<?=$testi['id']?>" method="POST">
                <div class="card" style="width: 100%">
                    <div class="card-header">Add Testi</div>
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="full_name">Full Name</label>
                            <input type="text" class="form-control" name="full_name" id="full_name" value="<?=$testi['full_name']?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="work">work</label>
                            <input type="text" class="form-control" name="work" id="work" value="<?=$testi['work']?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="quotes">Quotes</label>
                            <input type="text" class="form-control" name="quotes" id="quotes" value="<?=$testi['quotes']?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="picture">picture</label>
                            <input type="file" class="form-control" name="picture" id="picture" value="<?=$testi['picture']?>">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" name="btnSave" class="btn btn-primary w-25">Save</button>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>