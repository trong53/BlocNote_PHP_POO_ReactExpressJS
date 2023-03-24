<?php

require './database/Database.php';

class AddPostModel extends Database 
{
    public function createNote(string $title, string $description) : bool
    {
        $query = "INSERT INTO posts (title, description) VALUES (?, ?)";

        $statement = $this->db_connection->prepare($query);
        $statement->bindParam(1, $title);
        $statement->bindParam(2, $description);
        $statement->execute();

        return true;
    }
}