<?php require 'includes/header.php'?>

<div class="container3" >
    <div class="test1 test">    
        <h1 class="text-form">SIGN UP </h1>
        <p class="text-login" ><i class="fas fa-user"></i> Create your Beconnect Account here </p>
    <form action="">
        <input class="log logtext" type="text" placeholder="Name" name="name" minlength="2" required="" value=""><br>
        <input class="log logtext" type="email" placeholder="Email Address" name="email" required="" value=""><br>
        <input class="log logtext" type="password" placeholder="Password" name="password" minlength="6" required="" value=""><br>
        <input class="log logtext" type="password" placeholder="Confirm Password" name="password" minlength="6" required="" value=""><br>
        <input class="btn btn-primary"  type="submit" value="Register">
    </form>
    <p >Already have an account? <a href="index.php?page=login">LOGIN (to be done)</a></p>
    </div>  
    <div class="test">
        <div class="image">
            <img class="photo1" src="./assets/img/register.png"  alt="">
        </div>
    </div>      
</div>


<?php require 'includes/footer.php'?>
<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require 'includes/header.php' ?>

<div class="container3">
    <div class="register">
        <p><i class="fas fa-user"></i> Create your Beconnect Account here </p>
        <form method="POST">
            <input type="text" placeholder="First name" name="first-name" minlength="2" required="" value=""><br>
            <input type="text" placeholder="Username" name="username" minlength="2" required="" value=""><br>
            <input type="email" placeholder="Email Address" name="email" required="" value=""><br>
            <input type="password" placeholder="Password" name="pwd" minlength="6" required="" value=""><br>
            <input type="password" placeholder="Repeat Password" name="pwdrepeat" minlength="6" required="" value=""><br>
            <input name="submit" type="submit" value="Sign up">
        </form>
        <p>Already have an account? <a href="index.php?page=login">LOGIN</a></p>
    </div>
</div>

<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] ==  "invalidusername") {
        echo '<p class="errorMessage">Choose a proper username. No special characters allowed.<p>';
    }
    if ($_GET['error'] ==  "invalidemail") {
        echo '<p class="errorMessage">Choose a proper e-mail address.<p>';
    }
    if ($_GET['error'] ==  "passwordsdontmatch") {
        echo '<p class="errorMessage">Passwords do not match.<p>';
    }
}
?>
<?php require 'includes/footer.php' ?>
