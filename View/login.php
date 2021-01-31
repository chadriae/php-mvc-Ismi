<?php require 'includes/header.php'?>

<div class="container">
    <p><a href="index.php">Back to homepage</a></p>
    <h1>Sign In </h1>
    <p><i class="fas fa-user"></i> Sign in to your account </p>
    <form action="">
        <input type="email" placeholder="Email Address" name="email" required="" value=""><br>
        <small>Enter a valid Email adress</small><br>
        <input type="password" placeholder="Password" name="password" minlength="6" required="" value=""><br>

        <button type="button"><input type="submit" class="btn btn-primary" value="Sign In"></button>
    </form>
    <p>Don't have an account? <a href="index.php?page=register">SIGN UP (to be done)</a></p>
</div>
<?php require 'includes/footer.php'?>