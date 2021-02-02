<?php require 'includes/header.php'?>

<div class="container3">
    <p><a href="index.php">Back to homepage</a></p>
    <h1>Sign In </h1>
    <p><i class="fas fa-user"></i> Sign in to your account </p>
    <form action="">
        <input type="email" placeholder="Email Address" name="email" required="" value=""><br>
        <small>Enter a valid Email adress</small><br>
        <input type="password" placeholder="Password" name="password" minlength="6" required="" value=""><br>

<div class="wrapper">

<div class="login">
    <p class="log-text"><i class="fas fa-user"></i> Sign in to your account </p>
    <form action="">
        <input  class="log" type="email"  placeholder="Email Address" name="email" required="" value=""><br>
        <input  class="log" type="password" class="login" placeholder="Password" name="password" required="" value=""><br>
        <button type="button"><input type="submit" class="btn btn-primary" value="Log in"></button>
    </form>
    <p>Don't have an account? <a href="index.php?page=register">SIGN UP (to be done)</a></p>
</div>
<div class="image">
    <img class="photo" src="./assets/img/login.png"  alt="Girl in a jacket">
</div>
</div>

<?php require 'includes/footer.php'?>