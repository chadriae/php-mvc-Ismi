<?php

declare(strict_types=1);

class BecodersController
{
    private $databaseManager;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/becoders.php';
        $this->get($_SESSION['student-id']);
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function get($id)
    {
        try {
            // $statement->execute(array('student_id' => $id));
            // $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            // // $count = count($rows);
            // // if ($count == 1) {
            // $row = $rows[0];
            // $_SESSION["last-name"] = $row['last_name'];
            // $_SESSION["job"] = $row['current_job'];
            // }
            // output data of each row
            $query = "SELECT * FROM student WHERE student_id = $id;";
            $sth = $this->databaseManager->dbconnection->prepare($query);
            $sth->execute();
            /* Fetch all of the remaining rows in the result set */
            // print("Fetch all of the remaining rows in the result set:\n");
            $result = $sth->fetchAll();
            // print_r($result[0]);
            $_SESSION["last-name"] = $result[0]['last_name'];
            $_SESSION["job"] = $result[0]['current_job'];
            $_SESSION["company"] = $result[0]['current_company'];
            $_SESSION["location"] = $result[0]['current_location'];
            $_SESSION["bio"] = $result[0]['bio'];
            $_SESSION["skills"] = $result[0]['skills'];
        } catch (PDOException $error) {
            echo "Connection Error - " . $error->getMessage();
        }
    }
}
