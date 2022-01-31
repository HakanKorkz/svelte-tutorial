<?php

namespace Core\settings;

use PDO;
use PDOException;

class connect
{
    private function dbInfo ()
    {
        $path=dirname(__DIR__).'/settings/db.json';

        return json_decode(file_get_contents($path));

    }
    protected function db(): PDO
    {

        $host = $this->dbInfo()->dbHost;

        $dbname = $this->dbInfo()->dbName;

        $user = $this->dbInfo()->dbUser;

        $pass = $this->dbInfo()->dbPass;

        $db = '';

        try {

            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

           //  echo "Test Başarıl";

        } catch (PDOException $e) {

            echo $e->getMessage();

        }

        return $db;

    }

}