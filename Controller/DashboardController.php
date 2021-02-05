<?php
//TODO: error header information
declare(strict_types=1);

class DashboardController
{
    private $databaseManager;

    public function render(array $GET, array $POST)
    {
        if (isset($_POST['submit_1'])) {
            $this->updateUser();
        }
        if (isset($_POST['submit_2'])) {
            $this->addSocialMedia();
        }
        require 'View/dashboard.php';
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function updateUser()
    {
        if (!empty($_POST['first-name']) || !empty($_POST['last-name']) || !empty($_POST['career']) || !empty($_POST['company']) || !empty($_POST['website']) || !empty($_POST['location']) || !empty($_POST['skills']) || !empty($_POST['github']) || !empty($_POST['bio'])) {
            $this->newAdditionFirstName = ucfirst($_POST['first-name']);
            $this->newAdditionLastName = ucfirst($_POST['last-name']);
            $this->newAdditionCareer = $_POST['career'];
            $this->newAdditionCompany = ucfirst($_POST['company']);
            $this->newAdditionWebsite = $_POST['website'];
            $this->newAdditionLocation = ucfirst($_POST['location']);
            $this->newAdditionSkills = $_POST['skills'];
            $this->newAdditionGitHub = $_POST['github'];
            $this->newAdditionBio = $_POST['bio'];
            $this->newAdditionImage = $_FILES['image']['name'];

            $this->newAdditionID = $_SESSION['student-id'];

            // $addNewAddition = $this->databaseManager->dbconnection->query("INSERT INTO student (student_id, first_name, last_name, current_job, current_company, website, current_location, skills, github, bio) VALUES ('$this->newAdditionID', '$this->newAdditionFirstName', '$this->newAdditionLastName', '$this->newAdditionCareer', '$this->newAdditionCompany', '$this->newAdditionWebsite', '$this->newAdditionLocation', '$this->newAdditionSkills', '$this->newAdditionGitHub', '$this->newAdditionBio')");
            $queryData = "UPDATE student SET first_name = '$this->newAdditionFirstName', last_name = '$this->newAdditionLastName', current_job = '$this->newAdditionCareer', current_company = '$this->newAdditionCompany', website = '$this->newAdditionWebsite', current_location = '$this->newAdditionLocation', skills = '$this->newAdditionSkills', github = '$this->newAdditionGitHub', bio = '$this->newAdditionBio' WHERE student_id = '$this->newAdditionID';";
            $addNewAddition = $this->databaseManager->dbconnection->query($queryData);

            // adding image to db
            $target = "./assets/images/" . basename($_FILES['image']['name']);
            $queryImage = "INSERT INTO profilepic (student_id, profile_pic) VALUES ('$this->newAdditionID', '$this->newAdditionImage ');";
            $addNewPicture = $this->databaseManager->dbconnection->query("$queryImage");

            if (!$addNewAddition) {
                var_dump($this->databaseManager->dbconnection->error);
            } else {
                header("location: index.php?page=dashboard&error=nonedata");
            }

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $this->message = "<p class='successMessage'>Image uploaded successfully.</p>";
                return $this->message;
            } else {
                $this->message = "<p class='errorMessage'>There was a problem uploading image.</p>";
                return $this->message;
            }

            return $addNewPicture;
        }
    }

    public function addSocialMedia()
    {
        $this->newAdditionID = $_SESSION['student-id'];

        $this->twitterURL = $_POST['twitter'];
        $this->linkedinURL = $_POST['linkedin'];
        $this->websiteURL = $_POST['website'];
        $this->facebookURL = $_POST['facebook'];
        $this->githubURL = $_POST['github'];

        $queryLinks = "INSERT into social_media (student_id, twitter, linkedin, website, facebook, github) VALUES ('$this->newAdditionID', '$this->twitterURL', '$this->linkedinURL', '$this->websiteURL', '$this->facebookURL', ' $this->githubURL')";
        $addLinks = $this->databaseManager->dbconnection->query($queryLinks);

        if (!$addLinks) {
            var_dump($this->databaseManager->dbconnection->error);
        } else {
            header("location: index.php?page=dashboard&error=nonelinks");
        }
        // return $addLinks;
    }
}
