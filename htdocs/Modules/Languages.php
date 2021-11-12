<?php

function getLanguages()
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM languages");

    $query->execute();

    $languages = $query->fetchAll(PDO::FETCH_CLASS,"Language");

    return $languages;
}

function getLanguage($id)
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM languages WHERE id = $id");

    $query->execute();

    $languages = $query->fetchAll(PDO::FETCH_CLASS,"Language");

    return $languages[0];
}