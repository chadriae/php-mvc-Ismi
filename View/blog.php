<?php
require 'includes/header-logged-in.php';
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
$posts = $this->getPosts();
?>


<div class="container4">
    <h1 class="text-form">Posts</h1>
    <p><i class="fas fa-user" aria-hidden="true"></i> Welcome to the community!</p>

    <div>
        <h3>Hello, <?= $_SESSION['first-name'] ?>.<br> Say Something...</h3>
    </div>
    <form method="post">
        <textarea name="text" cols="30" rows="5" placeholder="Create a post" required="">
                </textarea>
        <input class="btn btn-primary" type="submit" value="SUBMIT" name="submit">
    </form>
    <?php foreach ($posts as $post) : ?>
        <p class="small"><?= $post['post'] ?> (written by <?= $post['first_name'] ?> on <?= $post['date_post'] ?>)</p>
    <?php endforeach; ?>
</div>





<?php require 'includes/footer.php' ?>