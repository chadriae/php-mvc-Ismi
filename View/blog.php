<?php
if (!empty($_SESSION)) {
    require 'includes/header-logged-in.php';
} else {
    require 'includes/header.php';
} // print_r($_SESSION);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
$posts = $this->getPosts();
?>


<div class="container4">
    <h1 class="text-form">Posts</h1>
    <p class="text-login" ><i class="fas fa-user " aria-hidden="true"></i> Welcome to the community!</p>

    <div>
        <h3 class="text-login">Hello, <?= $_SESSION['first-name'] ?>.<br> Say Something...</h3>
    </div>
    <form method="post">
        <textarea name="text" cols="30" rows="5" placeholder="Create a post" required="">
                </textarea>
        <input class="home  main-btn" type="submit" value="SUBMIT" name="submit">
    </form>

    
    <?php foreach ($posts as $post) : ?>
        <div class="container9 mg">
        <p class="small smaller mg pdlft "><?= $post['post'] ?> <br> <br></p> <p class="stof">  written by <?= $post['first_name'] ?> on <?= $post['date_post'] ?> </p>
        </div>
    <?php endforeach; ?>
    
</div>





<?php require 'includes/footer.php' ?>