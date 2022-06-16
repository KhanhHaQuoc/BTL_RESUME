<?php 
    include('function.php'); //Biến $conn thực sự cần đưa vào để truyền vào HÀM TẠO
    include('./model/Post.php');

    if(isset($_POST['btnSave'])){
        if(!empty($_POST['txtTitle']) && !empty($_POST['txtDesc'])){
            $title = $_POST['txtTitle'];
            $desc  = $_POST['txtDesc'];
            // echo $title;
            $post = new Post($conn);
            if($post->addPost($title, $desc)){
                echo "<h3 class='text-center bg-success'>Bai viet duoc luu thanh cong</h3>";
            }
        }
    }

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="addPost.php" method="POST">
                <div class="card" style="width: 100%">
                    <div class="card-header">Add post</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="txtTitle">
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea name="txtDesc" id="desc" cols="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-center mt-3">
                            <button type="submit" name="btnSave" class="btn btn-primary w-25">Save</button>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    include('footer.php');
?>