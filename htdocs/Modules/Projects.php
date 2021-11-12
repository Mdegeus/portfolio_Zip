<?php

function getProjects()
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM projects");

    $query->execute();

    $projects = $query->fetchAll(PDO::FETCH_CLASS,"Project");

    return $projects;
}