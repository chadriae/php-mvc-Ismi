<?php
if (!empty($_SESSION)) {
    require 'includes/header-logged-in.php';
} else {
    require 'includes/header.php';
} // print_r($_SESSION);
$jobs = $this->getExperience($_SESSION['student-id']);
$schools = $this->getEducation($_SESSION['student-id']);
?>
<section>
    <div class="container4">
        <h1 class="text-form">Dashboard</h1>
        <p class="text-login">
            <i class="fas fa-user" aria-hidden="true"></i>
            Welcome <?= $_SESSION['username'] ?>, you can edit your profile or
            chat with the Dev Community.</p><br><br>
        <div><a class="space" href="index.php?page=dashboard"><i class="fas fa-user-circle" aria-hidden="true"></i> Edit Profile</a><a class="space" href="index.php?page=addexperience"><i class="fab fa-black-tie " aria-hidden="true"></i> Add Experience</a><a class="space" href="index.php?page=addeducation"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Add Education</a><a class="space" href="index.php?page=blog"><i class="fas fa-users " aria-hidden="true"></i> Dev Community</a><br><br>
        </div>
        <h3 class="small text-succes"> Experience credentials </h3>
        <table class="box">
            <thead>
                <tr>
                    <td class="small center">Company</td>
                    <td class="small center">Title</td>
                    <td class="small center">Years</td>
                    <td class="small center">Location</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jobs as $job) : ?>
                    <tr>
                        <td class="small center "><?= $job['company'] ?></td>
                        <td class="small center "><?= $job['job_title'] ?></td>
                        <td class="small center "><?= $job['from_date'] ?> - <?= $job['to_date'] ?></td>
                        <td class="small center "><?= $job['job_location'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <h3 class="small text-succes">Education credentials</h3>
        <table class="box">
            <thead>
                <tr>
                    <td class="small center ">School</td>
                    <td class="small center ">Field of study</td>
                    <td class="small center ">Degree</td>
                    <td class="small center ">Years</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($schools as $school) : ?>
                    <tr>
                        <td class="small center"><?= $school['school'] ?></td>
                        <td class="small center"><?= $school['fieldofstudy'] ?></td>
                        <td class="small center"><?= $school['degree'] ?></td>
                        <td class="small center"><?= $school['from_date'] ?> - <?= $school['to_date'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <div>
            <button class="home red"><i class="fas fa-user-minus" aria-hidden="true"></i> DELETE MY ACCOUNT</button>

            <button class="home  main-btn white "><a href="index.php?page=myprofile">SHOW MY PROFILE</a></button>
        </div>
    </div>
</section>
<?php require 'includes/footer.php' ?>