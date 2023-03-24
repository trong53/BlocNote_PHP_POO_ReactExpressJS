<?php

function getNote(INT $note_id) : array 
{
    require './database/db_connection.php';

    $query = "SELECT * FROM posts WHERE id = ?";
    
    $statement = $db_connection->prepare($query);
    $statement->bindParam(1, $note_id);
    $statement->execute();
    $note = $statement->fetch(PDO::FETCH_ASSOC);

    return $note;
}