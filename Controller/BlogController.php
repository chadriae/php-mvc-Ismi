<?php

declare(strict_types=1);

class BlogController
{
    private $databaseManager;

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/blog.php';

        if (isset($_POST['submit'])) {
            $this->addPost();
        }
    }

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function addPost()
    {
        if (!empty($_POST['text'])) {
            $this->newPostUserID = $_SESSION['student-id'];
            $this->newPostAuthor = $_SESSION['first-name'];
            $this->newPost = $_POST['text'];
            $this->postDate = date('Y-m-d H:i:s');

            $addNewPost = $this->databaseManager->dbconnection->query("INSERT into posts(student_id, first_name, post, date_post) VALUES ('$this->newPostUserID', '$this->newPostAuthor', '$this->newPost', '$this->postDate');");

            if (!$addNewPost) {
                var_dump($this->databaseManager->dbconnection->error);
            } else {
                header("location: index.php?page=blog&error=none");
            }
        }
    }

    public function getPosts()
    {
        $query = "SELECT * FROM posts;";
        $posts = $this->databaseManager->dbconnection->query($query);
        return $posts;
    }

    public function getAuthor($id)
    {
        $query = "SELECT first_name FROM student WHERE student_id = $id";
        $statement = $this->databaseManager->dbconnection->prepare($query);
        $statement->execute();
        $author = $statement->fetch(\PDO::FETCH_ASSOC);
        return $author;
    }
}
