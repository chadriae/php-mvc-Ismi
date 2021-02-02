<?php require 'includes/header.php' ?>


<div class="container3">
    <p><a href="index.php">Back to homepage</a></p>
    <h1>Sign up </h1>
    <div class="register">
        <p><i class="fas fa-user"></i> Create your Beconnect Account here </p>
        <form method="POST" action="index.php?page=succes.register">
            <input type="text" placeholder="First name" name="first-name" minlength="2" required="" value=""><br>
            <input type="text" placeholder="Username" name="username" minlength="2" required="" value=""><br>
            <input type="email" placeholder="Email Address" name="email" required="" value=""><br>
            <small>Please use a valid e-mail adress</small><br>
            <input type="password" placeholder="Password" name="pwd" minlength="6" required="" value=""><br>
            <input type="password" placeholder="Repeat Password" name="pwdrepeat" minlength="6" required="" value=""><br>
            <input name="submit" type="submit" value="Sign up">
        </form>
        <p>Already have an account? <a href="index.php?page=login">LOGIN</a></p>
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