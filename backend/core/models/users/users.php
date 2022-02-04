<?php

namespace Core\models\users;

use Core\settings\connect;
use PDO;

class users extends connect
{
    /**
     * @return array
     */
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

        while ($userCheck = $userQuery->fetch(PDO::FETCH_ASSOC)) {

            $use = ['name' => $userCheck['userName']];

            $user[] = $use;

        }

        $users['users'] = $user;

        return $users;

    }

    /**
     * @param $userName
     * @return bool
     */
    protected function userAddDb($userName): bool
    {
    $code=time();

    $userAdd=$this->db()->prepare("insert into users set userCode=:userCode,userName=:userName");

    $userAdd->bindParam(':userCode',$code, PDO::PARAM_INT);

    $userAdd->bindParam(':userName',$userName,PDO::PARAM_STR);

    $Insert=$userAdd->execute();

    if ($Insert) {

        $result=true;

    } else {

        $result=false;

    }

    return $result;

    }

}