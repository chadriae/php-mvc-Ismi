<?php
if (!empty($_SESSION)) {
    require 'includes/header-logged-in.php';
} else {
    require 'includes/header.php';
} // print_r($_SESSION);
?>
<section>
    <div class="container4">
        <h1 class="text-form">Add education</h1>
        <p class="text-login"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Add any school, bootcamp, etc that you have
            attended or are attending</p><br>
        <small class="small">* = required field</small>
        <form method="post">
            <div>
                <input class="log" type="text" placeholder="* School or Bootcamp" name="school" required="" value="">
            </div>
            <div><input class="log" type="text" placeholder="* Degree or Certificate" name="degree" required="" value=""></div>
            <div><input class="log" type="text" placeholder="* Field Of Study" name="fieldofstudy" required="" value=""></div>
            <div>
                <h4 class="small">From Date</h4><input class="log" type="date" name="from" value="" required="">
            </div>
            <div>
                <p class="small"><input class="log" type="checkbox" name="current" value="1"> Current school or bootcamp</p>
            </div>
            <div>
                <h4 class="small">To Date</h4><input class="log" type="date" name="to" value="2020-02-02">
            </div>
            <div><textarea class="small" name="description" cols="30" rows="5" placeholder="Program Description"></textarea></div><input class="home  main-btn small white" name="submit" type="submit" value="SUBMIT"><a class="mg" href="index.php?page=succes">Go Back</a>
        </form>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] ==  "none") {
                echo '<p class="successMessage">Experience successfully added.<p>';
            }
        }
        ?>
    </div>
</section>






<?php require 'includes/footer.php' ?>