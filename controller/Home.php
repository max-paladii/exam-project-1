<?php
/**
 * Created by PhpStorm.
 * User: maxpaladii
 * Date: 01/12/2018
 * Time: 16.46
 */

class Home
{
    public function index()
    {
        if (isset($_SESSION['user_id'])) {
            $user = (new User())->getUser($_SESSION['user_id']);
            $username = $user['user_nickname'];
            if (isset($_GET['error_too_long'])) {
                $error_too_long = 1;
            }
            $statuses = (new Status())->getStatuses($_SESSION['user_id']);

            require_once 'view/home-auth.php';
        } else {
            echo file_get_contents('view/home-notauth.html');
        }
    }
}