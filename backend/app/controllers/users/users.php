<?php

namespace App\controllers\users;
use Core\models\users\users as usersModels;

class users extends usersModels
{

    public function userQuery()
    {

        return $this->userQueryDb();
        
    }

}