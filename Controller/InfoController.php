<?php

declare(strict_types=1);

class InfoController
{
    private $databaseManager;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        // $this->get();
        //load the view
        require 'View/info.php';
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function getInfo()
    {
        $query = "SELECT * FROM student;";
        $students = $this->databaseManager->dbconnection->query($query);
        return $students;
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
}
