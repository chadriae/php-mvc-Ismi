<?php

declare(strict_types=1);

class RegisterController
{
    private $databaseManager;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/register.php';
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function createUser()
    {
        if (!empty($_POST['username']) || !empty($_POST['email']) || !empty($_POST['password']) || !empty($_POST['password-repeat'])) {
            $this->newAdditionUserName = $_POST['username'];
            $this->newAdditionEmail = $_POST['email'];
            $this->newAdditionPassword = $_POST['password'];

            $addNewUser = $this->databaseManager->dbconnection->query("INSERT INTO login (username, email, pwd) VALUES ('$this->newAdditionUserName', '$this->newAdditionEmail', '$this->newAdditionPassword')");

            if (!$addNewUser) {
                var_dump($this->databaseManager->dbconnection->error);
            }
        }
    }
}
