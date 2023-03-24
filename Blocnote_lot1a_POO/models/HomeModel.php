<?php

require './database/Database.php';

class HomeModel extends Database
{
    public function getAllNotes() : array
    {
    
        $query = "SELECT * FROM posts ORDER BY created_at DESC";
    
        $statement = $this->db_connection->prepare($query);
        $statement->execute();
        $all_notes = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        return $all_notes;
    }
}
