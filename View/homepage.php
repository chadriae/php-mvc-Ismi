<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<div class="container">

    <!--
<h1>Hello <?php echo $user->getName()?>,</h1>
-->
    <div class="test">
        <p><a href="index.php?page=dashboard">To dashboard page</a></p>
        <p><a href="index.php?page=info">To info page</a></p><p><a href="index.php?page=becoders">To becoders page</a></p>
        <h1>Beconnect</h1>
        <div id="app"></div>


        <button class="home" type="submit"><a href="index.php?page=register">Sign Up</a> </button>
        <button  class="home" type="submit"><a href="index.php?page=login">Login</a></button>
    </div>


</div>
<?php require 'includes/footer.php'?>