<?php

function createNote(string $title, string $description) : bool 
{
    require './database/db_connection.php';

    $query = "INSERT INTO posts (title, description) VALUES (?, ?)";

    $statement = $db_connection->prepare($query);
    $statement->bindParam(1, $title);
    $statement->bindParam(2, $description);
    $statement->execute();

    return true;
}