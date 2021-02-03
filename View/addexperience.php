<?php require 'includes/header.php';
// print_r($_SESSION);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
?>


<section>
    <div class="container4">
        <h1 class="text-form">Add An Experience</h1>
        <p><i class="fas fa-code-branch" aria-hidden="true"></i> Add any developer/programming positions that
            you have had in the past</p><small>* = required field</small>
        <form method="POST">
            <div><input class="log" type="text" placeholder="* Job Title" name="title" required="" value=""></div>
            <div><input class="log" type="text" placeholder="* Company" name="company" required="" value=""></div>
            <div><input class="log" type="text" placeholder="* Location" name="location" required="" value=""></div>
            <div>
                <h4>* From Date</h4><input class="log" type="date" name="from" value="" required="">
            </div>
            <div>
                <p><input class="log" type="checkbox" name="current" value="false"> Current Job</p>
            </div>
            <div>
                <h4>To Date</h4><input class="log" type="date" name="to" value="">
            </div>
            <div><textarea name="description" cols="30" rows="5" placeholder="Job Description"></textarea></div>
            <input name="submit" class="btn btn-primary" type="submit"><a href="index.php?page=becoders">Go Back</a>
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