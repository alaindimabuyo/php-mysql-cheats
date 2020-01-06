<?php
    require('db.php');
    require('config.php');
    $query = 'SELECT * FROM phpmyblog';

    //GET RESULT
    $result = mysqli_query($conn, $query);

    //FETCH DATA
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
   
    //Free Result
    mysqli_free_result($result);

    //Close COnnection
    mysqli_close($conn);



    ?>
    <?php include('navbar.php')?>
    <?php include('header.php')?>
    <div class="container">
        <h1>Posts</h1>
        <?php foreach($posts as $post): ?>
            <div class="well">
                <h3><?php echo $post['title'] ?></h3>
                <?php echo $post['author']; ?>
                <?php echo $post['body']; ?>
                <a class="btn btn-default" href="post.php?id=<?php echo $post['id']?>">Read More</a>
            </div>
        <?php endforeach; ?>
        </div>
        <?php include('footer.php')?>
