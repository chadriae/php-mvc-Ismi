<?php
<<<<<<< HEAD

declare(strict_types=1);

class LoginController
=======
declare(strict_types = 1);

class loginController
>>>>>>> origin/ismi2
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/login.php';
<<<<<<< HEAD
    }
}
=======
        
    }
}
>>>>>>> origin/ismi2
