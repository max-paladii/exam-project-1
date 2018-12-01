<?php
/**
 * Created by PhpStorm.
 * User: maxpaladii
 * Date: 01/12/2018
 * Time: 16.46
 */

class Statuses
{
    const MAX_CHARS = 167;
    public function add()
    {
        $statusText = $_POST['statusText'];
        $user = (new User())->getUser($_SESSION['user_id']);
        if (strlen($statusText.$user['user_nickname']) > self::MAX_CHARS) {
            header("location: ../?error_too_long");
            die();
        }

        (new Status())->add($_SESSION['user_id'], $statusText);
        header("location: ../");
    }
}