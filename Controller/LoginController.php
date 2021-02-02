<?php

declare(strict_types=1);

class LoginController
{
    private $databaseManager;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        if ($_GET['page'] === 'login') {
            require 'View/login.php';
        } elseif (isset($_POST['submit'])) {
            require 'View/succes.login.php';
        }
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }
}
