<?php
/**
 * Created by PhpStorm.
 * User: maxpaladii
 * Date: 01/12/2018
 * Time: 16.07
 */

class Status extends BaseModel
{
    public function add($userId, $statusText)
    {
        $this->connection->query(
            "INSERT into s_statuses (user_id, status_text) 
            values ('$userId', '$statusText')");
    }

    public function getStatuses($userId)
    {
        $result = $this->connection->query(
            "SELECT * from s_statuses where user_id='$userId'");

        $statuses = [];
        while($status = $result->fetch_assoc()) {
            $statuses[] = $status;
        }
        return $statuses;

    }
}