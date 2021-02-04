<?php
if (!empty($_SESSION)) {
    require 'includes/header-logged-in.php';
} else {
    require 'includes/header.php';
} ?>

<div class="container3">
    <div class="test1 test">
        <h1 class="text-form">SIGN UP </h1>
        <p class="text-login"><i class="fas fa-user"></i> Create your Beconnect Account here </p>
        <form method="POST">
            <input class="log logtext" type="text" placeholder="First Name" name="first-name" minlength="2" required="" value=""><br>
            <input class="log logtext" type="text" placeholder="Username" name="username" minlength="2" required="" value=""><br>
            <input class="log logtext" type="email" placeholder="Email Address" name="email" required="" value=""><br>
            <input class="log logtext" type="password" placeholder="Password" name="pwd" minlength="6" required="" value=""><br>
            <input class="log logtext" type="password" placeholder="Confirm Password" name="pwdrepeat" minlength="6" required="" value=""><br>
            <input class="home main-btn" name="submit" type="submit" value="REGISTER">
        </form>
        <br>
        <p>Already have an account? <a href="index.php?page=login">LOGIN</a></p><br>
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

    </div>
    <div class="test">
        <div class="image">
            <img class="photo1" src="./assets/img/register.png" alt="">
        </div>
    </div>
</div>


<?php require 'includes/footer.php' ?>