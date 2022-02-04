<?php

use App\controllers\users\users;
use Core\settings\connect;

require_once __DIR__ . '/core/settings/setting.php';

require_once __DIR__ . '/vendor/autoload.php';
$DB=new connect();
$Users = new users();

$code=$DB->codeEncode();

//print_r($_POST);

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'users') {
        echo $Users->userQuery();
    } elseif ($_POST['action'] == 'userAdd') {
        echo $Users->userAdd($_POST);
    }
}