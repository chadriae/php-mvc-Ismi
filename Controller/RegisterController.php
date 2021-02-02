<?php
// TODO: write usernameExists() function for PDO;

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class RegisterController
{
    private $databaseManager;

    public function render()
    {
        if ($_GET['page'] == 'register') {
            require 'View/register.php';
        }
        if (isset($_POST['submit'])) {
            $this->newAdditionFirstName = $_POST['first-name'];
            $this->newAdditionUserName = $_POST['username'];
            $this->newAdditionEmail = $_POST['email'];
            $this->newAdditionPwd = $_POST['pwd'];
            $this->newAdditionPwdRepeat = $_POST['pwdrepeat'];

            $this->hashedPwd = password_hash($this->newAdditionPwd, PASSWORD_DEFAULT);

            $this->registerSucces();
            $this->createUser();
        }
    }


    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function registerSucces()
    {
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
            //     header("location: ../includes/register.php?error=usernametaken");
            //     exit();
        } else {
            header("location: index.php?page=succes.register");
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
