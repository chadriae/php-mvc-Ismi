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
        require 'View/register.php';
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
            header("location: index.php?page=dashboard");
        }
    }

    public function createUser()
    {
        if (!empty($_POST['first-name']) || !empty($_POST['username']) || !empty($_POST['email']) || !empty($_POST['pwd']) || !empty($_POST['pwdrepeat'])) {

            $query = "INSERT INTO login (first_name, username, email, pwd) VALUES ('$this->newAdditionFirstName', '$this->newAdditionUserName', '$this->newAdditionEmail', '$this->hashedPwd');";
            $addNewUser = $this->databaseManager->dbconnection->query($query);
            if (!$addNewUser) {
                var_dump($this->databaseManager->dbconnection->error);
            }
        }
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['first-name'] = $_POST['first-name'];
    }

    // public function addToStudent($id)
    // {
    //     $query = "INSERT INTO student(student_id) VALUES ($id);";
    //     $addNewUser = $this->databaseManager->dbconnection->query($query);
    //     if (!$addNewUser) {
    //         var_dump($this->databaseManager->dbconnection->error);
    //     }
    // }

    public function returnStudentID($userName)
    {
        try {
            $query = "SELECT * FROM login WHERE username = :username";
            $statement = $this->databaseManager->dbconnection->prepare($query);
            $statement->execute(array('username' => $userName));
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            $count = count($rows);
            if ($count == 1) {
                $_SESSION["student-id"] = $rows[0]['student_id'];
            }
        } catch (PDOException $error) {
            echo "Connection Error - " . $error->getMessage();
        }
        return $_SESSION["student-id"];
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
