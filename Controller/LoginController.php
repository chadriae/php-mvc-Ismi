<?php

declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class LoginController
{
    private $databaseManager;

    public function render()
    {
        if ($_GET['page'] === 'login') {
            require 'View/login.php';
        }
        if (isset($_POST['submit'])) {
            $this->userName = $_POST['name'];
            $this->pwd = $_POST['pwd'];

            $this->loginUser($this->userName, $this->pwd);
        }
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function loginUser($userName, $pwd)
    {
        try {

            $query = "SELECT * FROM login WHERE username = :username";
            $statement = $this->databaseManager->dbconnection->prepare($query);
            $statement->execute(array('username' => $userName));
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            $count = count($rows);
            if ($count == 1) {
                $row = $rows[0];
                if (password_verify($pwd, $row['pwd'])) {
                    $_SESSION["username"] = $_POST["name"];
                    $_SESSION["first-name"] = $rows[0]['first_name'];
                    $_SESSION["student-id"] = $rows[0]['student_id'];
                    header("location: index.php?page=dashboard");
                } else {
                    header("location: index.php?page=login&error=invalidpassword");
                    exit();
                }
            } else {
                header("location: index.php?page=login&error=invalidusername");
            }
        } catch (PDOException $error) {
            echo "Connection Error - " . $error->getMessage();
        }
    }
}
