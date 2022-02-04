<?php

namespace App\controllers\users;

use Core\models\users\users as usersModels;

class users extends usersModels
{
    /**
     * @return false|string
     */
    public function userQuery()
    {

        return json_encode($this->userQueryDb());

    }

    /**
     * @param $data
     * @return false|string
     */

    public function userAdd($data)
    {
        $userName = $data['userName'];

        return json_encode($this->userAddDb($userName));

    }

}