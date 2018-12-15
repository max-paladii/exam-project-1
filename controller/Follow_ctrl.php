<?php
/**
 * Created by PhpStorm.
 * User: maxpaladii
 * Date: 14/12/2018
 * Time: 23.35
 */

class Followctrl
{
    public function followeees()
    {
        if (isset($_SESSION['user_id'])) {
            $user = (new User())->getUser($_SESSION['user_id']);
            $username = $user['user_nickname'];
            if (isset($_GET['error_user_not_found'])) {
                $error_user_not_found = 1;
            }
            $statuses = (new Status())->getStatuses($_SESSION['user_id']);
            $followees = (new Followers())->getFollowees($_SESSION['user_id']);
            require_once 'view/followees.php';
        } else {
            echo file_get_contents('view/home-notauth.html');
        }
    }
}