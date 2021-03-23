<?php

declare(strict_types=1);

class InfoController
{
    private $databaseManager;

    public function render(array $GET, array $POST)
    {
        require 'View/info.php';
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function getInfo()
    {
        $query =
            "SELECT t.* FROM student t
            join(
                SELECT max(id) as id FROM student GROUP BY student_id
            )
            x on x.id = t.id";
        $students = $this->databaseManager->dbconnection->query($query);
        return $students;
    }

    public function getImages()
    {
        // $query =
        //     "SELECT t.*  FROM profilepic t
        //     join(
        //         SELECT max(picture_id) as picture_id FROM profilepic GROUP BY student_id
        //     )
        //     x on x.picture_id = t.picture_id";

        $query = "SELECT * FROM profilepic WHERE picture_id IN (SELECT MAX(picture_id) FROM profilepic GROUP BY student_id)";


        $images = $this->databaseManager->dbconnection->query($query);
        return $images;
    }


    // public function getImages()
    // {
    //     try {

    //         $query =
    //             "SELECT t.* FROM profilepic t
    //         join(
    //             SELECT max(picture_id) as picture_id FROM profilepic GROUP BY student_id
    //         )
    //         x on x.picture_id = t.picture_id";


    //         $statement = $this->databaseManager->dbconnection->prepare($query);
    //         $statement->execute();
    //         $images = $statement->fetch(\PDO::FETCH_ASSOC);

    //         return $images;

    //     } catch (PDOException $error) {
    //         echo "Connection Error - " . $error->getMessage();
    //     }
    // }

}
