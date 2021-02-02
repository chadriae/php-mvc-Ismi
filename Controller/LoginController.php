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
            // $statement->bindValue(":username", $userName, PDO::PARAM_INT);

            // $statement->execute(
            //     array(
            //         'username'     =>    $userName,
            //         'pwd'          =>    $pwd
            //     )
            // );
            // $count = $statement->rowCount();
            // if ($count > 0) {
            $statement->execute(array('username' => $userName));
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            $count = count($rows);
            if ($count == 1) {
                $row = $rows[0];
                if (password_verify($pwd, $row['pwd'])) {
                    $_SESSION["username"] = $_POST["username"];
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
