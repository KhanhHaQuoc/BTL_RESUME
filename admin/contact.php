<?php
include "function.php";
$contacts = getContact();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body?>
    <div class="d-flex">
        <div class="d-flex sticky-top flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height:100vh;">
            <a href="./dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4">Admin</span>
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
                    <a href="./testimonial.php" class="nav-link text-white">
                    Testimonials
                    </a>
                </li>
                <li>
                    <a href="./contact.php" class="nav-link active">
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
                    <img src="../image/admin.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Admin</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="signout.php">Sign out</a></li>
                </ul>
            </div>
        </div>
        <div  class="container-fluid">
        <div class="flex-grow-1">
            <div class="p-5">
                <h5>
                    Contact Manage
                </h5>
                <a href="./addcontact.php" class="btn btn-secondary my-2" >Add a new contact</a>
                <table class="table">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">FullName</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $index=1;
                        foreach ($contacts as $contact) {
                        ?>
                        <tr>
                            <th scope="row"><?= $index ?></th>
                            <td><?=$contact['full_name']?></td>
                            <td><?=$contact['email']?></td>
                            <td><?=$contact['messages']?></td>
                            <td>
                                <a href="./editcontact.php?id=<?=$contact['id']?>"><i class="bi bi-pencil-square"></i></a>
                            </td>    
                            <td>    
                                <a href="./delcontact.php?id=<?=$contact['id']?>"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                            $index++;
                        }
                        ?>
                    </tbody>
                </table>
    </div>
</div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
