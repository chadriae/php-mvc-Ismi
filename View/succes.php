<?php
if (!isset($_SESSION)) {
    require 'includes/header-logged-in.php';
} else {
    require 'includes/header.php';
}
$jobs = $this->getExperience($_SESSION['student-id']);
$schools = $this->getEducation($_SESSION['student-id']);
?>

<section>
    <div class="container4">
        <h1 class="text-form">Dashboard</h1>
        <p class="text-login">
            <i class="fas fa-user" aria-hidden="true"></i>
            <strong>Welcome <?= $_SESSION['username'] ?>, you can edit your profile or
                chat with the Dev Community.</strong></p><br><br>
        <div><a class="space" href="index.php?page=dashboard"><i class="fas fa-user-circle" aria-hidden="true"></i> Edit Profile</a><a class="space" href="index.php?page=addexperience"><i class="fab fa-black-tie " aria-hidden="true"></i> Add Experience</a><a class="space" href="index.php?page=addeducation"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Add Education</a><a class="space" href="index.php?page=blog"><i class="fas fa-users " aria-hidden="true"></i> Dev Community</a><br><br>
        </div>
        <h3 class="small"> Experience credentials </h3>
        <table>
            <thead>
                <tr>
                    <td class="small">Company</td>
                    <td class="small">Title</td>
                    <td class="small">Years</td>
                    <td class="small">Location</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jobs as $job) : ?>
                    <tr>
                        <td><?= $job['company'] ?></td>
                        <td><?= $job['job_title'] ?></td>
                        <td><?= $job['from_date'] ?> - <?= $job['to_date'] ?></td>
                        <td><?= $job['job_location'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h3 class="small">Education credentials</h3>
        <table>
            <thead>
                <tr>
                    <td class="small">School</td>
                    <td class="small">Field of study</td>
                    <td class="small">Degree</td>
                    <td class="small">Years</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($schools as $school) : ?>
                    <tr>
                        <td><?= $school['school'] ?></td>
                        <td><?= $school['fieldofstudy'] ?></td>
                        <td><?= $school['degree'] ?></td>
                        <td><?= $school['from_date'] ?> - <?= $school['to_date'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div><button class="btn btn-primary xp"><i class="fas fa-user-minus" aria-hidden="true"></i> Delete
                my Account</button></div>

    </div>
</section>
<?php require 'includes/footer.php' ?>