<?php

declare(strict_types=1);

class BecodersController
{
    private $databaseManager;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/becoders.php';
        $this->getInfo($_SESSION['student-id']);
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function getInfo($id)
    {
        try {
            $query = "SELECT * FROM student WHERE student_id = $id;";
            $sth = $this->databaseManager->dbconnection->prepare($query);
            $sth->execute();
            $result = $sth->fetchAll();
            // $_SESSION["last-name"] = $result[0]['last_name'];
            // $_SESSION["job"] = $result[0]['current_job'];
            // $_SESSION["company"] = $result[0]['current_company'];
            // $_SESSION["location"] = $result[0]['current_location'];
            // $_SESSION["bio"] = $result[0]['bio'];
            // $_SESSION["skills"] = $result[0]['skills'];
            return $result;
        } catch (PDOException $error) {
            echo "Connection Error - " . $error->getMessage();
        }
    }

    public function get($id)
    {
        $students = $this->databaseManager->dbconnection->query("SELECT * FROM student WHERE student_id = $id");
        return $students;
    }


    public function getExperience($id)
    {
        $jobs = $this->databaseManager->dbconnection->query("SELECT * FROM experience WHERE student_id = $id");
        return $jobs;
    }

    public function getEducation($id)
    {
        $jobs = $this->databaseManager->dbconnection->query("SELECT * FROM education WHERE student_id = $id");
        return $jobs;
    }
}
