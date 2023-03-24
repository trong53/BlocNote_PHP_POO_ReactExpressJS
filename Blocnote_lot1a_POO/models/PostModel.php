<?php

require './database/Database.php';

class PostModel extends Database 
{
    public function getNote(INT $note_id) : array
    {
        $query = "SELECT * FROM posts WHERE id = ?";
        
        $statement = $this->db_connection->prepare($query);
        $statement->bindParam(1, $note_id);
        $statement->execute();
        $note = $statement->fetch(PDO::FETCH_ASSOC);

        return $note;
    }
}