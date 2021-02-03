<?php

declare(strict_types=1);

class AddexperienceController
{
    private $databaseManager;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/addexperience.php';

        if (isset($_POST['submit'])) {
            $this->addExperience();
        }
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

            $this->newAdditionID = $_SESSION['student-id'];

            $addNewUser = $this->databaseManager->dbconnection->query("INSERT INTO experience (student_id, job_title, company, job_location, from_date, to_date, job_description) VALUES ('$this->newAdditionID', '$this->newAdditionTitle', '$this->newAdditionCompany', '$this->newAdditionLocation', '$this->newAdditionFromDateSQL', '$this->newAdditionToDateSQL', '$this->newAdditionDescription')");

            if (!$addNewUser) {
                var_dump($this->databaseManager->dbconnection->error);
            } else {
                header("location: index.php?page=addexperience&error=none");
            }
        }
    }
}
