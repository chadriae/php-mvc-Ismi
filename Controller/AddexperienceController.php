<?php

declare(strict_types=1);

class AddexperienceController
{
    private $databaseManager;

    public function render(array $GET, array $POST)
    {
        if (isset($_POST['submit'])) {
            $this->addExperience();
        }
        require 'View/addexperience.php';
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function addExperience()
    {
        if (!empty($_POST['title']) || !empty($_POST['company']) || !empty($_POST['location']) || !empty($_POST['from']) || !empty($_POST['to']) || !empty($_POST['description'])) {
            $this->newAdditionTitle = ucfirst($_POST['title']);
            $this->newAdditionCompany = ucfirst($_POST['company']);
            $this->newAdditionLocation = ucfirst($_POST['location']);
            $this->newAdditionFromDate = $_POST['from'];
            $this->newAdditionFromDateSQL = date("Y-m-d", strtotime($this->newAdditionFromDate));
            $this->newAdditionToDate = $_POST['to'];
            $this->newAdditionToDateSQL = date("Y-m-d", strtotime($this->newAdditionToDate));
            $this->newAdditionDescription = ucfirst($_POST['description']);
            if (isset($_POST['current'])) {
                $this->newAdditionCurrentJob = $_POST['current'];
            } else {
                $this->newAdditionCurrentJob = '0';
            }
            $this->newAdditionID = $_SESSION['student-id'];

            $query = "INSERT INTO experience (student_id, job_title, company, job_location, from_date, to_date, job_description, current_job) VALUES ('$this->newAdditionID', '$this->newAdditionTitle', '$this->newAdditionCompany', '$this->newAdditionLocation', '$this->newAdditionFromDateSQL', '$this->newAdditionToDateSQL', '$this->newAdditionDescription', '$this->newAdditionCurrentJob');";
            $addNewUser = $this->databaseManager->dbconnection->query($query);

            if (!$addNewUser) {
                var_dump($this->databaseManager->dbconnection->error);
            } else {
                header("location: index.php?page=addexperience&error=none");
            }
        }
    }
}
