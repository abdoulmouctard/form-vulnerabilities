<?php

namespace App;

use \PDO;
use \Exception;

class SQLiteWrapper
{
    /**@var SQLiteWrapper */
    private static $instance = null;

    /**@var PDO $pdo */
    private $pdo = null;

    private function __construct(string $db_fullpath)
    {
        $this->pdo = new PDO("sqlite:$db_fullpath");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function init(): SQLiteWrapper
    {
        if (file_exists("../database/database.sqlite")) {
            if (self::$instance == null) self::$instance = new self("../database/database.sqlite");
            return self::$instance;
        }

        throw new Exception("DB Not Found");
    }


    public static function PDO(): PDO
    {
        return self::GET_INSTANCE()->pdo;
    }


    public static function insert(string $table, array $values): bool
    {
        $statement = self::GET_INSTANCE()
            ->pdo
            ->prepare("INSERT INTO $table (" . implode(", ", array_keys($values)) . ") VALUES (" . self::preapre(array_keys($values)) . ")");

        return $statement->execute($values);
    }


    /**
     * Undocumented function
     *
     * @deprecated
     * @param string $statement
     * @return void
     */
    public static function unprepared_exec(string $statement)
    {
        return self::GET_INSTANCE()->pdo->exec($statement);
    }


    /**
     * Undocumented function
     *
     * @deprecated
     * @param string $statement
     * @return void
     */
    public static function unprepared_select(string $statement)
    {
        return self::GET_INSTANCE()->pdo->query($statement)->fetch();
    }


    private static function preapre(array $keys): string
    {
        return ":" . substr(implode(", :", $keys), 0);
    }


    public static function GET_INSTANCE()
    {
        return self::$instance ?? self::init();
    }
}
