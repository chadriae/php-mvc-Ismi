<?php
<<<<<<< HEAD

declare(strict_types=1);

class BecodersController
{
    private $databaseManager;

=======
declare(strict_types = 1);

class becodersController
{
>>>>>>> origin/ismi2
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/becoders.php';
<<<<<<< HEAD
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }
}
=======
        
    }
}
>>>>>>> origin/ismi2
