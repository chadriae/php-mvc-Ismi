<?php
if (!empty($_SESSION)) {
    require 'includes/header-logged-in.php';
} else {
    require 'includes/header.php';
}
// print_r($_SESSION);
?>
<section>
    <!-- REAL START ABOVE ARE A LINK AND USELESS INFO  -->

    <div class="container4">
        <h1 class="text-form">Create Your Beconnect Profile </h1>
        <p class='text-login'><i class="fas fa-user"></i> Let's get some information to make your profile stand out</p><br>
        <small class="small">* = required field</small><br>
        <h2 class="small">Hello <?= $_SESSION["username"] ?></h2><br>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "none") {
                echo '<p class="successMessage">Changes successfully submitted.<p>';
            }
            echo $this->updateUser();
        } ?>
        <form method="POST" action="index.php?page=dashboard&error=none" enctype="multipart/form-data">
            <small class="small">Give us your full name first</small><br>
            <input class="log" type="text" id="first-name" name="first-name" value="<?= $_SESSION['first-name'] ?>" placeholder="First Name"></input>
            <input class="log" type="text" id="last-name" name="last-name" placeholder="Last Name"></input><br>
            <small class="small">Give us an idea on where you are in your career </small><br>
            <select class="log" name="career" id="career">
                <option class="small" value="developer">Developer</option>
                <option class="small" value="juniordeveloper">Junior Developer</option>
                <option class="small" value="seniordeveloper">Senior Developer</option>
                <option class="small" value="manager">Manager</option>
                <option class="small" value="student">Student</option>
                <option class="small" value="teacher ">Teacher</option>
                <option class="small" value="intern">Intern</option>
                <option class="small" value="other">Other</option>
            </select>
            <br>
            <small class="small">Where are you working or studying now?</small><br>
            <input class="log" type="text" id="company" name="company" placeholder="Company"></input><br>
            <small class="small">Could be your own company or one you work for</small><br>
            <input class="log" type="text" id="website" name="website" placeholder="Website"></input><br>
            <small class="small">City & state suggested (eg. Gent , O-VL)</small><br>
            <input class="log" type="text" id="location" name="location" placeholder="Location"></input><br>
            <small class="small">Please use comma separated values</small><br>
            <input class="log" type="text" id="skills" name="skills" placeholder="(eg. HTML, CSS, JavaScript, PHP)"></input><br>
            <small class="small">GitHub username</small><br>
            <input class="log" type="text" id="github" name="github" placeholder="Github Username"></input><br>
            <small class="small">Tell us a little bit about yourself </small><br>
            <textarea class="small" name="bio" id="textarea" cols="30" rows="10" placeholder="A short Bio about yourself"></textarea><br>
            <small class="small">Upload your profile picture</small><br>
            <input class="log" type="file" name="image" accept="image/*" value=" file"></input><br><br>
            <!--Submit form button -->
            <button class="log home  main-btn" type="submit" name="submit" value="Submit">Submit </button>

            <button class="log home  main-btn" type="reset" name="reset" value="Reset"> Reset</button>
            <button class="home  main-btn"><a href="index.php?page=succes">Back to dashboard</a></button>

            <button class="home  main-btn" type="submit">Add Social Media </a></button>

            <ul>
                <li><i class="fab fa-github fa-2x" aria-hidden="true"></i><input type="text" placeholder="Twitter URL" name="twitter" value=""></li>

                <li><i class="fab fa-linkedin-in fa-2x"></i><input type="text" placeholder="linkedIn" name="twitter" value=""></li>

                <li><i class="fas fa-globe fa-2x" aria-hidden="true"></i><input type="text" placeholder="Twitter URL" name="twitter" value=""></li>

                <li><i class="fab fa-facebook fa-2x" aria-hidden="true"></i><input type="text" placeholder="Twitter URL" name="twitter" value=""></li>
            </ul>
    </div>
    </form>
</section>
<?php require 'includes/footer.php' ?>