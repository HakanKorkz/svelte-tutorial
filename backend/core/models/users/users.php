<?php

namespace Core\models\users;

use Core\settings\connect;

class users extends connect
{

    protected function userQueryDb(): array
    {

//        $userQuery=$this->db()->prepare("select * from users");
// Dizi Paketlemesi...
//        $userQuery->execute();
//
//        $user=[];
//
//        while ($userCheck=$userQuery->fetch(\PDO::FETCH_ASSOC)) {
//
//            $use=$userCheck['userName'];
//
//           // array_push($users,$user);
//
//            $user[] = $use;
//        }
//
//        $users['users']=$user;
//
//        return $users;

        // object Paketlemesi..
        $userQuery = $this->db()->prepare("select * from users");

        $userQuery->execute();

        $user = [];

        $users = [];

        while ($userCheck = $userQuery->fetch(\PDO::FETCH_ASSOC)) {

            $use = ['name' => $userCheck['userName']];

            $user[] = $use;

        }

        $users['users'] = $user;

        return $users;

    }

}