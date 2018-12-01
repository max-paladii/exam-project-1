<?php
/**
 * Created by PhpStorm.
 * User: maxpaladii
 * Date: 01/12/2018
 * Time: 15.32
 */

session_start();
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

$currentDir = dirname($_SERVER['SCRIPT_NAME']);
$uri = str_replace($currentDir."/", "", $uri);

require_once 'model/BaseModel.php';
require_once 'model/User.php';
require_once 'model/Status.php';
require_once "controller/Auth.php";
require_once "controller/Home.php";
require_once "controller/Statuses.php";
switch ($uri) {
    case '':
        (new Home())->index();
        break;
    case 'auth/register':
        (new Auth())->register();
        break;
    case 'auth/login':
        (new Auth())->login();
        break;
    case 'status/add':
        (new Statuses())->add();
        break;

}