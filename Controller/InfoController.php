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

        //load the view
        require 'View/info.php';
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function get()
    {
        $test = $this->databaseManager->dbconnection->query("SELECT * FROM student");

        return $test;
    }
}
