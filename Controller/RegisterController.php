<?php
// TODO: write usernameExists() function for PDO;

declare(strict_types=1);

class RegisterController
{
    private $databaseManager;

    public function render(array $GET, array $POST)
    {
        if ($_GET['page'] === 'register') {
            require 'View/register.php';
        } elseif (isset($_POST['submit'])) {
            $this->newAdditionFirstName = $_POST['first-name'];
            $this->newAdditionUserName = $_POST['username'];
            $this->newAdditionEmail = $_POST['email'];
            $this->newAdditionPwd = $_POST['pwd'];
            $this->newAdditionPwdRepeat = $_POST['pwdrepeat'];

            $this->hashedPwd = password_hash($this->newAdditionPwd, PASSWORD_DEFAULT);

            $this->registerSucces();
        }
    }


    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function registerSucces()
    {
        // Not needed, working with required in HTML code
        // if ($this->emptyInputSignup($this->newAdditionFirstName, $this->newAdditionUserName, $this->newAdditionEmail, $this->newAdditionPwd, $this->newAdditionPwdRepeat) !== false) {
        //     header("location: index.php?page=register&error=emptyinput");
        //     exit();
        if ($this->invalidUsername($this->newAdditionUserName) !== false) {
            header("location: index.php?page=register&error=invalidusername");
            exit();
        } elseif ($this->invalidEmail($this->newAdditionEmail) !== false) {
            header("location: index.php?page=register&error=invalidemail");
            exit();
        } elseif ($this->pwdMatch($this->newAdditionPwd, $this->newAdditionPwdRepeat) !== false) {
            header("location: index.php?page=register&error=passwordsdontmatch");
            exit();
            // } elseif ($this->usernameExists($this->newAdditionUserName, $this->newAdditionEmail) !== false) {
            //     header("location: ../includes/regiser.php?error=usernametaken");
            //     exit();
        } else {
            $this->createUser();
            require 'View/succes.register.php';
        }
    }

    public function createUser()
    {
        if (!empty($_POST['first-name']) || !empty($_POST['username']) || !empty($_POST['email']) || !empty($_POST['pwd']) || !empty($_POST['pwdrepeat'])) {

            $addNewUser = $this->databaseManager->dbconnection->query("INSERT INTO login (first_name, username, email, pwd) VALUES ('$this->newAdditionFirstName', '$this->newAdditionUserName', '$this->newAdditionEmail', '$this->hashedPwd')");

            if (!$addNewUser) {
                var_dump($this->databaseManager->dbconnection->error);
            }
        }
    }

    // public function emptyInputSignup($firstName, $userName, $email, $pwd, $pwdRepeat)
    // {
    //     if (empty($firstName) || empty($userName) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function invalidUsername($username)
    {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            return true;
        } else {
            return false;
        }
    }

    public function invalidEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public function pwdMatch($pwd, $pwdRepeat)
    {
        if ($pwd !== $pwdRepeat) {
            return true;
        } else {
            return false;
        }
    }

    // public function usernameExists($username, $email)
    // {
    //     $sql = "SELECT * from login WHERE username = ? OR email = ?;";
    //     $statement = $this->databaseManager->dbconnection->query($sql);
    //     if (!$statement) {
    //         var_dump($this->databaseManager->dbconnection->error);
    //         exit();
    //     }
    // }
}
