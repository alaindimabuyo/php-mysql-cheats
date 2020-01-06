<?php
    require('db.php');
    require('config.php');

    //Check if theres data 
    if(isset($_POST['submit'])){
        $title = mysqli_real_escape_string($conn, $_POST['title']); 
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        $query = "INSERT INTO phpmyblog(title, author, body) VALUES ('$title', '$author', '$body')";

        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');

        }else{
            echo 'ERROR' . mysqli_error($conn);
        }

    }

      ?>
    <?php include('navbar.php')?>
    <?php include('header.php')?>
    <div class="container">
        <h1>Add Post</h1>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"></form>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </div>
        <?php include('footer.php')?>
