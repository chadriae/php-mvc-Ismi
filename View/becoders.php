<?php
if (empty($_SESSION)) {
    require 'includes/header-logged-in.php';
} else {
    require 'includes/header.php';
} // print_r($_SESSION);
$profile = $_GET['profile'];
$jobs = $this->getExperience($profile);
$schools = $this->getEducation($profile);
$users = $this->getInfo($profile);
?>
<section>
    <div class="container5">
        <a href="">Back To Profiles</a>
        <div class="">
            <div class="">
                <img class="info-img" src="" alt="">
                <h1 class="info-name"><?= $users[0]['first_name'] ?> <?= $users[0]['last_name'] ?></h1><br>
                <p class="info-job"><?= $users[0]['current_job'] ?> at<span><?= $users[0]['current_company'] ?></span></p><br>
                <p><span><?= $users[0]['current_location'] ?></span></p><br>
                <div class="">
                    <a href="" target="_blank" rel="noopener noreferrer">
                        <i class="fas fa-globe fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-twitter fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                    </a>
                </div><br>
            </div>
            <div class="info-bio-skill">
                <h2 class="">
                    About myself
                </h2><br>
                <p>
                    <?= $users[0]['bio'] ?>
                </p>
                <h2 class="">Skill Set</h2>
                <div class="skills">
                    <?php
                    $userSkills = $users[0]["skills"];
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
                <h2 class="">Experience</h2>
                <?php foreach ($jobs as $job) : ?>
                    <div>
                        <h3 class="small"><?= $job['job_title'] ?></h3>
                        <p class="small"><time><?= $job['from_date'] ?></time> - <time><?= $job['to_date'] ?></time></p>
                        <p class="small"><?= $job['company'] ?></p>
                        <p class="small"><span><strong>Description: </strong><?= $job['job_description'] ?></span></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="info-right">
                <h2 class="small">Education</h2>
                <?php foreach ($schools as $school) : ?>
                    <div>
                        <h3 class="small"><?= $school['school'] ?></h3>
                        <p class="small"><time><?= $school['from_date'] ?> - <?= $school['to_date'] ?></time></p>
                        <p class="small"><span><strong>Degree: </strong><?= $school['degree'] ?></span></p>
                        <p class="small"><span><strong>Field Of Study: </strong><?= $school['degree'] ?></span></p>
                        <p class="small"><span><strong>Description: </strong> <?= $school['education_description'] ?></span></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container4">
        <h2 class="small">Github Repos</h2>
        <div class="info-repos">


            <div>
                <h4 class="small"><a href="" target="_blank" rel="noopener noreferrer">Stoffel</a></h4>

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
                <h4 class="small"><a href="" target="_blank" rel="noopener noreferrer">Stoffel</a></h4>
                <p class="small">Portfolilio page </p>
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
                <h4 class="small"><a href="" target="_blank" rel="noopener noreferrer">Beconnect</a></h4>
                <p class="small">Social network for developers</p>
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
                <h4 class="small"><a href="" target="_blank" rel="noopener noreferrer">curriculum</a></h4>
                <p class="small">Overview of the HackYourFuture program.</p>
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
                <h4 class="small"><a href="" target="_blank" rel="noopener noreferrer">Fixie</a></h4>
                <p class="small">logistics system. </p>
            </div>
            <div>
                <ul>
                    <li class="small">Stars: 0</li>
                    <li class="small">Watchers: 0</li>
                    <li class="small">Forks: 0</li>
                </ul>
            </div>
        </div>





    </div>
</section>







<?php require 'includes/footer.php' ?>