<?php

use App\SQLiteWrapper;

require_once __DIR__ . '/../vendor/autoload.php';

require "SQLiteWrapper.php";

function dd($variable)
{
    var_dump($variable);
    die();
}

function create_user(array &$collection): int
{
    $email = $collection["email"] ?? null;
    $fullname = $collection["fullname"] ?? null;

    $statement = "SELECT DISTINCT * FROM users WHERE email='$email'";
    $user = SQLiteWrapper::unprepared_select($statement);

    if (!$user) {
        $created = SQLiteWrapper::insert("users", compact("fullname", "email"));
        $user = SQLiteWrapper::unprepared_select($statement);
    }

    return $user['id'];
}


function create_investigation(int $user_id, array &$collection)
{
    $values = [
        "user_id" => $user_id,
        "country" => $collection["country"] ?? null,
        "lockdown" => $collection["lockdown"] ?? null,
        "deaths_per_day" => $collection["deaths_per_day"] ?? null,
        "total_deaths" => $collection["total_deaths"] ?? null,
        "comment" => $collection["comment"] ?? null,
    ];

    return SQLiteWrapper::insert("investigations", $values);
}


function submit_form(array $collection)
{
    $user_id = create_user($collection);
    create_investigation($user_id, $collection);
}
