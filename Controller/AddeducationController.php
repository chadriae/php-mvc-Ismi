<?php

declare(strict_types=1);

class AddeducationController
{
    private $databaseManager;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/addeducation.php';

        if (isset($_POST['submit'])) {
            $this->addEducation();
            print_r($this->newAdditionToDate);
        }
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function addEducation()
    {
        if (!empty($_POST['school']) || !empty($_POST['degree']) || !empty($_POST['fieldofstudy']) || !empty($_POST['from']) || !empty($_POST['to']) || !empty($_POST['description'])) {
            $this->newAdditionSchool = ucfirst($_POST['school']);
            $this->newAdditionDegree = ucfirst($_POST['degree']);
            $this->newAdditionFieldofstudy = ucfirst($_POST['fieldofstudy']);
            $this->newAdditionFromDate = $_POST['from'];
            $this->newAdditionFromDateSQL = date("Y-m-d", strtotime($this->newAdditionFromDate));
            $this->newAdditionToDate = $_POST['to'];
            $this->newAdditionToDateSQL = date("Y-m-d", strtotime($this->newAdditionToDate));
            $this->newAdditionDescription = ucfirst($_POST['description']);

            if (isset($_POST['current'])) {
                $this->newAdditionCurrentEducation = $_POST['current'];
            } else {
                $this->newAdditionCurrentEducation = '0';
            }
            $this->newAdditionID = $_SESSION['student-id'];

            $addNewUser = $this->databaseManager->dbconnection->query("INSERT INTO education (student_id, school, degree, fieldofstudy, from_date, to_date, education_description, current_education) VALUES ('$this->newAdditionID', '$this->newAdditionSchool', '$this->newAdditionDegree', '$this->newAdditionFieldofstudy', '$this->newAdditionFromDateSQL', '$this->newAdditionToDateSQL', '$this->newAdditionDescription', '$this->newAdditionCurrentEducation')");

            if (!$addNewUser) {
                var_dump($this->databaseManager->dbconnection->error);
            } else {
                header("location: index.php?page=addexperience&error=none");
            }
        }
    }
}
