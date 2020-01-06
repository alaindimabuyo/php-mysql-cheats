<?php
    require('db.php');
    require('config.php');

    //GET ID

    $id = mysqli_real_escape_string($conn, $_GET['id']) ;
    $query = 'SELECT * FROM phpmyblog WHERE id = ' . $id;

    //GET RESULT
    $result = mysqli_query($conn, $query);

    //FETCH DATA
    $post = mysqli_fetch_assoc($result);
   
    //Free Result
    mysqli_free_result($result);

    //Close COnnection
    mysqli_close($conn);



    ?>
    <?php include('navbar.php')?>
    <?php include('header.php')?>
    <div class="container">
        
     
                <a href="<?php echo ROOT_URL ?>" class="btn btn-default">Back</a>
                <h1><?php echo $post['title'] ?></h1>
                <?php echo $post['author']; ?>
                <?php echo $post['body']; ?>
                
         
       
        </div>
        <?php include('footer.php')?>