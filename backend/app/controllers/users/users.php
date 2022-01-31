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

}