<?php

declare(strict_types=1);

class SuccesController
{
    private $databaseManager;

    public function render(array $GET, array $POST)
    {
        require 'View/succes.php';
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
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
