<?php
if (!empty($_SESSION)) {
    require 'includes/header-logged-in.php';
} else {
    require 'includes/header.php';
} // print_r($_SESSION);
$students = $this->getInfo();
$images = $this->getImages();
?>
<div class="container4">
    <?php foreach ($students as $user) : ?>
        <div class="infoContainer">
            <div class="info" style="padding: 20px 0 40px 0;">
                <div class="info-pic">
                    <!-- <img class="profile" src="./assets/images/<?= $image['profile_pic'] ?>" alt=""> -->
                </div>
                <div>
                    <h2><?= $user['first_name'] ?> <?= $user['last_name'] ?></h2>
                    <p><?= $user['current_job'] ?><span> at <?= $user['current_company'] ?></span></p>
                    <p><?= $user['current_location'] ?></p>
                    <br>
                    <a href="index.php?page=becoders&profile=<?= $user['student_id'] ?>" class="home  main-btn white small">VIEW PROFILE</a>
                </div>
                <ul>
                    <?php
                    $userSkills = $user['skills'];
                    $userSkills = preg_replace('/\.$/', '', $userSkills);
                    $userSkillsArray = explode(', ', $userSkills);
                    ?>
                    <?php foreach ($userSkillsArray as $skill) : ?>
                        <li class="text-primary"><i class="fas fa-check" aria-hidden="true"></i><?= $skill ?> </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="container4">

        <?php $images ?>

        <!-- 
        <?php foreach ($images as $image) : ?>
            <?= $image['student_id'] ?>
            <?= $image['profile_pic'] ?>

        <?php endforeach; ?> -->
    </div>
</div>
<?php require 'includes/footer.php' ?>