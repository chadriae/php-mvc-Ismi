<?php
// ini_set('display_errors', "1");
// ini_set('display_startup_errors', "1");
// error_reporting(E_ALL);
if (!empty($_SESSION)) {
    require 'includes/header-logged-in.php';
} else {
    require 'includes/header.php';
}
if (isset($_POST['submit'])) {
    $this->userName = $_POST['name'];
    $this->pwd = $_POST['pwd'];
    $this->loginUser($this->userName, $this->pwd);
}
// print_r($_SESSION);
?>
<div class="container3">
    <div class="test1 test">
        <div class="login">
            <h1 class="text-form">SIGN IN </h1>
            <p class="text-login"><i class="fas fa-user"></i> Sign in to your account </p>
            <form method="post">
                <input class="log logtext" type="text" placeholder="Email Address or username" name="name" required="" value=""><br>
                <input class="log logtext" type="password" class="login" placeholder="Password" name="pwd" required="" value=""><br>
                <input name="submit" type="submit" class=" home main-btn white small" value="LOGIN">
            </form>
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
            <br>
            <p>Don't have an account? <a href="index.php?page=register">SIGN UP</a></p>
        </div>
    </div>
    <div class="test">
        <div class="image">
            <img class="photo animate__animated animate__bounce" src="./assets/img/login.png" alt="">
        </div>
    </div>
</div>
<?php require 'includes/footer.php' ?>