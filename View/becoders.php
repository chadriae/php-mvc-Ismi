<?php require 'includes/header.php';
// print_r($_SESSION);
$jobs = $this->getExperience($_SESSION['student-id']);
$schools = $this->getEducation($_SESSION['student-id']);
?>
<section>
    <div class="container5">
        <a href="">Back To Profiles</a>
        <div class="">
            <div class="">
                <img class="info-img" src="" alt="">
                <h1 class="info-name"><?= $_SESSION['first-name'] ?> <?= $_SESSION['last-name'] ?></h1>
                <p class="info-job"><?= $_SESSION['job'] ?> at<span><?= $_SESSION['company'] ?></span></p>
                <p><span><?= $_SESSION['location'] ?></span></p>
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
                </div>
            </div>
            <div class="info-bio-skill">
                <h2 class="">
                    About myself
                </h2>
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
                <h2 class="">Experience</h2>
                <?php foreach ($jobs as $job) : ?>
                    <div>
                        <h3><?= $job['job_title'] ?></h3>
                        <p><time><?= $job['from_date'] ?></time> - <time><?= $job['to_date'] ?></time></p>
                        <p><?= $job['company'] ?></p>
                        <p><span><strong>Description: </strong><?= $job['job_description'] ?></span></p>
                    </div>
                <?php endforeach; ?>

                <div class="info-right">
                    <h2 class="">Education</h2>
                    <?php foreach ($schools as $school) : ?>
                        <div>
                            <h3><?= $school['school'] ?></h3>
                            <p><time><?= $school['from_date'] ?> - <?= $school['to_date'] ?></time></p>
                            <p><span><strong>Degree: </strong><?= $school['degree'] ?></span></p>
                            <p><span><strong>Field Of Study: </strong><?= $school['degree'] ?></span></p>
                            <p><span><strong>Description: </strong> <?= $school['education_description'] ?></span></p>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <h2 class="">Github Repos</h2>
            <div class="info-repos">


                <div>
                    <h4><a href="" target="_blank" rel="noopener noreferrer">Stoffel</a></h4>

                </div>
                <div>
                    <ul>
                        <li class="">Stars: 0</li>
                        <li class="">Watchers: 0</li>
                        <li class="">Forks: 0</li>
                    </ul>
                </div>
            </div>
            <div class="info-repos">
                <div>
                    <h4><a href="" target="_blank" rel="noopener noreferrer">Stoffel</a></h4>
                    <p>Portfolilio page </p>
                </div>
                <div>
                    <ul>
                        <li class="">Stars: 0</li>
                        <li class="">Watchers: 0</li>
                        <li class="">Forks: 0</li>
                    </ul>
                </div>
            </div>
            <div class="info-repos">
                <div>
                    <h4><a href="" target="_blank" rel="noopener noreferrer">Beconnect</a></h4>
                    <p>Social network for developers</p>
                </div>
                <div>
                    <ul>
                        <li class="">Stars: 0</li>
                        <li class="">Watchers: 0</li>
                        <li class="">Forks: 0</li>
                    </ul>
                </div>
            </div>
            <div class="info-repos">
                <div>
                    <h4><a href="" target="_blank" rel="noopener noreferrer">curriculum</a></h4>
                    <p>Overview of the HackYourFuture program.</p>
                </div>
                <div>
                    <ul>
                        <li class="">Stars: 1</li>
                        <li class="">Watchers: 1</li>
                        <li class="">Forks: 1</li>
                    </ul>
                </div>
            </div>
            <div class="info-repos">
                <div>
                    <h4><a href="" target="_blank" rel="noopener noreferrer">Fixie</a></h4>
                    <p>logistics system. </p>
                </div>
                <div>
                    <ul>
                        <li class="">Stars: 0</li>
                        <li class="">Watchers: 0</li>
                        <li class="">Forks: 0</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</section>






<?php require 'includes/footer.php' ?>