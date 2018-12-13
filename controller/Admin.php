<?php
/**
 * Created by PhpStorm.
 * User: maxpaladii
 * Date: 01/12/2018
 * Time: 16.46
 */

class Admin
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $users = (new User())->getAllUsers();

            require_once 'view/admin.php';
        } else {
            (new User())->delete($_POST['user_id']);
            header("location: admin");
            die();
        }
    }
}
