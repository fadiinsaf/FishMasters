<?php

namespace app\Models;

use DateTime;

class Notification
{
    private int $id_notification;
    private int $fan_id;
    private string $title;
    private string $message;
    private int $id_target;
    private string $type_target;
    private bool $is_read;
    private Datetime $created_at;

    public function __construct(int    $fan_id,
                                string $title,
                                string $message,
                                int    $id_target,
                                string $type_target,
                                bool   $is_read)
    {
        $this->fan_id = $fan_id;
        $this->title = $title;
        $this->message = $message;
        $this->id_target = $id_target;
        $this->type_target = $type_target;
        $this->is_read = $is_read;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}