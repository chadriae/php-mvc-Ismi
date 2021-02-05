<?php
if (!empty($_SESSION)) {
    require 'includes/header-logged-in.php';
} else {
    require 'includes/header.php';
} // print_r($_SESSION);
$jobs = $this->getExperience($_SESSION['student-id']);
$schools = $this->getEducation($_SESSION['student-id']);
$users = $this->getInfo($_SESSION['student-id']);
$socialMedia = $this->getSocialMedia($_SESSION['student-id']);
?>
<section>
    <div class="container5">
        <a href="index.php?page=succes">Back to my dashboard</a>
        <div class="">
            <div class="">
                <img class="info-img" src="./assets/images/<?= $this->getImages($_SESSION['student-id']); ?>" alt="">
                <h1 class="info-name "><?= $_SESSION['first-name'] ?> <?= $_SESSION['last-name'] ?></h1><br>
                <p class="info-job"><?= $_SESSION['job'] ?> at<span><?= $_SESSION['company'] ?></span></p><br>
                <p><span><?= $_SESSION['location'] ?></span></p><br>
                <div class="">
                    <a href="<?php echo $socialMedia['website'] ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fas fa-globe fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo $socialMedia['twitter'] ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-twitter fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo $socialMedia['facebook'] ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo $socialMedia['linkedin'] ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo $socialMedia['github'] ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github fa-2x" aria-hidden="true"></i>
                    </a>
                </div><br>
            </div>
            <div class="info-bio-skill">
                <h2 class="">
                    About myself
                </h2><br>
                <p>
                    <?= $_SESSION['bio'] ?>
                </p>
                <h2 class="">Skill Set</h2>
                <div class="skills">
                    <?php
                    $userSkills = $_SESSION["skills"];
                    $userSkills = preg_replace('/\.$/', '', $userSkills);
                    $userSkillsArray = explode(', ', $userSkills);
                    ?>
                    <?php foreach ($userSkillsArray as $skill) : ?>
                        <div class=""><i class="fa fa-check" aria-hidden="true"></i><?= $skill ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container6">
        <div class="info-container">
            <div class="info-left">
                <h2 class="mg text-form">Experience</h2>
                <?php foreach ($jobs as $job) : ?>
                    <div>
                        <h3 class=" small mg text-login"><?= $job['job_title'] ?></h3>
                        <p class="small mg"><time><?= $job['from_date'] ?></time> - <time>
                                <?php
                                if ($job['current_job'] == '0') {
                                    echo $job['to_date'];
                                } else {
                                    echo 'current';
                                }
                                ?>
                            </time></p>
                        <p class="small mg"><?= $job['company'] ?>, <?= $job['job_location'] ?></p>
                        <p class="small mg text-login"> Job description: <?= $job['job_description'] ?></p>
                    </div>
                    <br>
                <?php endforeach; ?>
            </div>
            <div class="info-right">
                <h2 class="small mg text-form">Education</h2>
                <?php foreach ($schools as $school) : ?>
                    <div>
                        <h3 class="small mg"><?= $school['school'] ?></h3>
                        <p class="small mg"><time><?= $school['from_date'] ?> -
                                <?php
                                if ($school['current_education'] == '0') {
                                    echo $school['to_date'];
                                } else {
                                    echo 'current';
                                }
                                ?>
                            </time></p>
                        <p class="small mg text-login">Degree: <?= $school['degree'] ?></p>
                        <p class="small mg">Field Of Study: <?= $school['fieldofstudy'] ?></p>
                        <p class="small mg">Description: <?= $school['education_description'] ?></p>
                    </div>
                    <br>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- <div class="container4">
        <h2 class="small text-form">Github Repos</h2>
        <div class="info-repos">


            <div>
                <h4 class="small mg"><a href="" target="_blank" rel="noopener noreferrer">Stoffel</a></h4>

            </div>
            <div>
                <ul>
                    <li class="small">Stars: 0</li>
                    <li class="small">Watchers: 0</li>
                    <li class="small">Forks: 0</li>
                </ul>
            </div>
        </div>
        <div class="info-repos">
            <div>
                <h4 class="small mg"><a href="" target="_blank" rel="noopener noreferrer">Stoffel</a></h4>
                <p class="small mg">Portfolilio page </p>
            </div>
            <div>
                <ul>
                    <li class="small">Stars: 0</li>
                    <li class="small">Watchers: 0</li>
                    <li class="small">Forks: 0</li>
                </ul>
            </div>
        </div>
        <div class="info-repos">
            <div>
                <h4 class="small mg"><a href="" target="_blank" rel="noopener noreferrer">Beconnect</a></h4>
                <p class="small mg">Social network for developers</p>
            </div>
            <div>
                <ul>
                    <li class="small ">Stars: 0</li>
                    <li class="small">Watchers: 0</li>
                    <li class="small">Forks: 0</li>
                </ul>
            </div>
        </div>
        <div class="info-repos">
            <div>
                <h4 class="small mg"><a href="" target="_blank" rel="noopener noreferrer">curriculum</a></h4>
                <p class="small mg">Overview of the HackYourFuture program.</p>
            </div>
            <div>
                <ul>
                    <li class="small">Stars: 1</li>
                    <li class="small">Watchers: 1</li>
                    <li class="small">Forks: 1</li>
                </ul>
            </div>
        </div>
        <div class="info-repos">
            <div>
                <h4 class="small mg"><a href="" target="_blank" rel="noopener noreferrer">Fixie</a></h4>
                <p class="small mg">logistics system. </p>
            </div>
            <div>
                <ul>
                    <li class="small">Stars: 0</li>
                    <li class="small">Watchers: 0</li>
                    <li class="small">Forks: 0</li>
                </ul>
            </div>
        </div> -->
    </div>
</section>
<?php require 'includes/footer.php' ?>