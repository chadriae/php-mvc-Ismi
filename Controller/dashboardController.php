<?php
//TODO: form validation, show fields that are not filled in correctly
//TODO: check if valid email address

declare(strict_types=1);

class DashboardController
{
    private $databaseManager;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/dashboard.php';
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }


    public function createUser()
    {
        if (!empty($_POST['first-name']) || !empty($_POST['last-name']) || !empty($_POST['career']) || !empty($_POST['company']) || !empty($_POST['website']) || !empty($_POST['location']) || !empty($_POST['skills']) || !empty($_POST['github']) || !empty($_POST['bio'])) {
            $this->newAdditionFirstName = $_POST['first-name'];
            $this->newAdditionLastName = $_POST['last-name'];
            $this->newAdditionCareer = $_POST['career'];
            $this->newAdditionCompany = $_POST['company'];
            $this->newAdditionWebsite = $_POST['website'];
            $this->newAdditionLocation = $_POST['location'];
            $this->newAdditionSkills = $_POST['skills'];
            $this->newAdditionGitHub = $_POST['github'];
            $this->newAdditionBio = $_POST['bio'];

            $addNewAddition = $this->databaseManager->dbconnection->query("INSERT INTO student (first_name, last_name, current_job, current_company, website, current_location, skills, github, bio) VALUES ('$this->newAdditionFirstName', '$this->newAdditionLastName', '$this->newAdditionCareer', '$this->newAdditionCompany', '$this->newAdditionWebsite', '$this->newAdditionLocation', '$this->newAdditionSkills', '$this->newAdditionGitHub', '$this->newAdditionBio')");

            if (!$addNewAddition) {
                var_dump($this->databaseManager->dbconnection->error);
            }
            return $addNewAddition;
        }

        // $this->get();

    }
}
