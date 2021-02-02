<?php require 'includes/header.php' ?>


<div class="wrapper">

    <div class="login">
        <p class="log-text"><i class="fas fa-user"></i> Sign in to your account </p>
        <form method="post" action="index.php?page=succes.login">
            <input class="log" type="text" placeholder="Email Address or username" name="name" required="" value=""><br>
            <input class="log" type="password" class="login" placeholder="Password" name="password" required="" value=""><br>
            <button type="button"><input name="submit" type="submit" class="btn btn-primary" value="Log in"></button>
        </form>
        <p>Don't have an account? <a href="index.php?page=register">SIGN UP (to be done)</a></p>
    </div>
    <div class="image">
        <img class="photo" src="./assets/img/login.png" alt="Girl in a jacket">
    </div>
</div>

<?php require 'includes/footer.php' ?>