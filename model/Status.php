<?php
/**
 * Created by PhpStorm.
 * User: maxpaladii
 * Date: 01/12/2018
 * Time: 16.07
 */

class Status extends BaseModel
{
    public function add($userId, $statusText, $image, $tag)
    {
        $this->connection->query(
            "INSERT into s_statuses (`user_id`, `status_text`, `image`, `tag`) 
            values ('$userId', '$statusText', '$image', '$tag')");
    }

    public function getStatuses($userId)
    {
        $followees = [$userId];
        $result = $this->connection->query("SELECT * from s_followers where follower_id='$userId'");

        while($followee = $result->fetch_assoc()) {
            $followees[] = $followee['user_id'];
        }

        $result = $this->connection->query("SELECT s_statuses.*, s_users.user_nickname from s_statuses left join s_users on (s_users.`id` = s_statuses.user_id) where s_statuses.user_id in (".implode(",", $followees).")");

        $statuses = [];
        while($status = $result->fetch_assoc()) {
            $statuses[] = $status;
        }
        return $statuses;

    }
}
