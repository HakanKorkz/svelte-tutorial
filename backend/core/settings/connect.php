<?php

namespace Core\settings;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use PDO;
use PDOException;

class connect extends functions
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
    public function codeEncode()
    {
        print_r($this->JWTKey());

//        $key = "example_key";
//        $payload = array(
//            "iss" => "http://example.org",
//            "aud" => "http://example.com",
//            "iat" => 1356999524,
//            "nbf" => 1357000000
//        );
//
//        $jwt = JWT::encode($payload, $key, 'HS256');
//        $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
//
//        print_r($decoded);
        
    }

//    protected function codeDecode()
//    {
//
//    }
}