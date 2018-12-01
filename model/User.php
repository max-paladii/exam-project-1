<?php
/**
 * Created by PhpStorm.
 * User: maxpaladii
 * Date: 01/12/2018
 * Time: 16.07
 */

class User extends BaseModel
{
    public function register($nick, $email, $password)
    {
        $this->connection->query(
            "INSERT into s_users (user_email, user_pass, user_nickname) 
            values ('$email', '".sha1($password)."', '$nick')");
    }

    public function tryLogin($email, $password)
    {
        $password = sha1($password);
        $result = $this->connection->query(
            "SELECT * from s_users where user_email='$email' AND user_pass='$password'");
        return $result->fetch_assoc();
    }

    public function getUser($id)
    {
        $result = $this->connection->query(
            "SELECT * from s_users where id='$id'"
        );
        return $result->fetch_assoc();
    }
}