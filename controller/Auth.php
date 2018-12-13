<?php
/**
 * Created by PhpStorm.
 * User: maxpaladii
 * Date: 01/12/2018
 * Time: 15.45
 */
class Auth
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            echo file_get_contents('view/registration.html');
        } else {
            (new User())->register($_POST['nickname'], $_POST['email'], $_POST['password']);
            header("location: ../auth/login");
            die();
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            echo file_get_contents('view/login.html');
        } else {
            $user = (new User())->tryLogin($_POST['email'], $_POST['password']);
            if (empty($user)) {
                header("location: ../auth/login");
                die();
            } else {
                $_SESSION['user_id'] = $user['id'];
                header("location: ..");
                die();
            }
        }
    }

    public function logout()
    {
        if (isset($_SESSION['user_id']))
        {
            unset($_SESSION['user_id']);
        }
        header("location: ../auth/login");
        die();
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $user = (new User())->getUser($_SESSION['user_id']);
            require_once 'view/editprofile.php';
        } else {
            (new User())->update($_POST['nickname'], $_POST['email'], $_SESSION['user_id']);
            header("location: ..");
            die();
        }
    }
}
