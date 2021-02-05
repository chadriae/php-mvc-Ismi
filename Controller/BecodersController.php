<?php

declare(strict_types=1);

class BecodersController
{
    private $databaseManager;

    public function render(array $GET, array $POST)
    {
        // $this->getInfo($_SESSION['student-id']);
        require 'View/becoders.php';
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
            return $result;
        } catch (PDOException $error) {
            echo "Connection Error - " . $error->getMessage();
        }
    }

    public function getExperience($id)
    {
        $query = "SELECT * FROM experience WHERE student_id = $id;";
        $jobs = $this->databaseManager->dbconnection->query($query);
        return $jobs;
    }

    public function getEducation($id)
    {
        $query = "SELECT * FROM education WHERE student_id = $id;";
        $jobs = $this->databaseManager->dbconnection->query($query);
        return $jobs;
    }

    public function getImages($id)
    {
        try {
            $query = "SELECT profile_pic FROM profilepic WHERE student_id = $id;";
            $statement = $this->databaseManager->dbconnection->prepare($query);
            $statement->execute();
            $images = $statement->fetch(\PDO::FETCH_ASSOC);
            foreach ($images as $image) {
                return $image;
            }
        } catch (PDOException $error) {
            echo "Connection Error - " . $error->getMessage();
        }
    }

    public function getSocialMedia($id)
    {
        try {
            $query = "SELECT * FROM social_media WHERE student_id = $id;";
            $sth = $this->databaseManager->dbconnection->prepare($query);
            $sth->execute();
            $result = $sth->fetchAll();
            return $result;
        } catch (PDOException $error) {
            echo "Connection Error - " . $error->getMessage();
        }
    }
}
