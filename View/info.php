<?php
$students = $this->get();
?>
<?php require 'includes/header.php' ?>
<div class="container4">
    <?php foreach ($students as $user) : ?>
        <div class="infoContainer">
            <div class="info">
                <img class="profile" src="./assets/img/nelson.png" alt="">
                <div>
                    <h2><?= $user['first_name'] ?> <?= $user['last_name'] ?></h2>
                    <p><?= $user['current_job'] ?><span> at <?= $user['current_company'] ?></span></p>
                    <p><?= $user['current_location'] ?></p>
                    <a href="index.php?page=becoders" class="btn btn-primary">View profile</a>
                    
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
</div>
<?php require 'includes/footer.php' ?>