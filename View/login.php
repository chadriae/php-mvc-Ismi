<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
?>


<?= require 'includes/header.php' ?>

<div class="container3">
    <div class="wrapper">
        <div class="login">
            <p class="log-text"><i class="fas fa-user"></i> Sign in to your account </p>
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] ==  "invalidpassword") {
                    echo '<p class="errorMessage">Invalid password.<p>';
                }
                if ($_GET['error'] ==  "invalidusername") {
                    echo '<p class="errorMessage">Invalid username.<p>';
                }
            }
            ?>
            <form method="post">
                <input class="log" type="text" placeholder="Email Address or username" name="name" required="" value=""><br>
                <input class="log" type="password" class="login" placeholder="Password" name="pwd" required="" value=""><br>
                <input name="submit" type="submit" class="btn btn-primary" value="Log in">
            </form>
            <br>
            <p>Don't have an account? <a href="index.php?page=register">SIGN UP</a></p>
        </div>
        <div class="image">
            <img class="photo" src="./assets/img/login.png" alt="Girl in a jacket">
        </div>
    </div>
</div>



<?php require 'includes/footer.php' ?>