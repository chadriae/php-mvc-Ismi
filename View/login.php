<?php require 'includes/header.php'?>

<div class="container3">
    <div class="test1 test">
            <h1 class="text-form">SIGN IN </h1>
            <p class="text-login"><i class="fas fa-user"></i> Sign in to your account </p>
        <form action="">
            <input  class="log logtext" type="email"  placeholder="Email Address" name="email" required="" value=""><br>
            <input  class="log logtext"type="password" class="login" placeholder="Password" name="password" required="" value=""><br>
            <button type="button"><input type="submit" class="btn btn-primary" value="LOG IN"></button>
        </form>
        <p>Don't have an account? <a href="index.php?page=register">SIGN UP (to be done)</a></p>
    </div>  
        <div class="test">
            <div class="image">
                <img class="photo" src="./assets/img/login.png"  alt="">
            </div>
        </div>
</div>
<?php require 'includes/footer.php'?>