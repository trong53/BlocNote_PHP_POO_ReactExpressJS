<?php

function getAllNotes() : array 
{
    require './database/db_connection.php';

    $query = "SELECT * FROM posts ORDER BY created_at DESC";

    $statement = $db_connection->prepare($query);
    $statement->execute();
    $all_notes = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $all_notes;
}