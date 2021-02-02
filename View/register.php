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