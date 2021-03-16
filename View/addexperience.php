<?php
if (!empty($_SESSION)) {
    require 'includes/header-logged-in.php';
} else {
    require 'includes/header.php';
} // print_r($_SESSION);

// ini_set('display_errors', "1");
// ini_set('display_startup_errors', "1");
// error_reporting(E_ALL);
?>
<section>
    <div class="container4">
        <h1 class="text-form">Add a job experience</h1>
        <p class="text-login"><i class="fas fa-code-branch" aria-hidden="true"></i> Add any developer/programming positions that
            you have had in the past</p>
        <br>
        <small class="small"> * = required field</small>
        <form method="POST">
            <div><input class="log" type="text" placeholder="* Job Title" name="title" required="" value=""></div>
            <div><input class="log" type="text" placeholder="* Company" name="company" required="" value=""></div>
            <div><input class="log" type="text" placeholder="* Location" name="location" required="" value=""></div>
            <div>
                <h4 class="small">* From date</h4><input class="log" type="date" name="from" value="" required="">
            </div>
            <div>
                <p class="small"><input class="log" type="checkbox" name="current" value="1"> Current job</p>
            </div>
            <div>
                <h4 class="small">To date</h4><input class="log" type="date" name="to" value="2020-02-02">
            </div>
            <div><textarea class="small" name="description" cols="30" rows="5" placeholder="Job Description"></textarea></div>
            <button class=" home  main-btn white small" name="submit"  type="submit">SUBMIT</button><a class="mg" href="index.php?page=succes">Go Back</a>
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