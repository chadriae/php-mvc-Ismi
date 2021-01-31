<?php require 'includes/header.php'?>


<div class="container">
    <p><a href="index.php">Back to homepage</a></p>
    <h1>Sign up </h1>
    <p><i class="fas fa-user"></i> Create your Beconnect Account here </p>
    <form action="">
        <input type="text" placeholder="Name" name="name" minlength="2" required="" value=""><br>
        <input type="email" placeholder="Email Address" name="email" required="" value=""><br>
        <small>Please use a valid e-mail adress</small><br>
        <input type="password" placeholder="Password" name="password" minlength="6" required="" value=""><br>
        <input type="password" placeholder="Confirm Password" name="password" minlength="6" required="" value=""><br>
        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="index.php?page=login">LOGIN (to be done)</a></p>


</div>
<?php require 'includes/footer.php'?>