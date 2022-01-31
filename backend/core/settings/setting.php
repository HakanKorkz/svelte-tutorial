<?php

header("Access-Control-Allow-Origin: *");

header("Access-Control-Allow-Headers: *");

error_reporting(E_ALL);

ini_set("display_errors", 1);

@ob_start();

@session_start();

date_default_timezone_set('Europe/Istanbul');
