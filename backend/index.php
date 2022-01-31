<?php

use App\controllers\users\users;

require_once __DIR__.'/core/settings/setting.php';

require_once __DIR__ .'/vendor/autoload.php';

$Users=new users();

print_r($Users->userQuery());