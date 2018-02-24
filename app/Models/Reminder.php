<?php

namespace App\Models;

class Reminder
{
    public $reminder_date_time;
    public $reminder_interval;
    
    public function setReminderDateTime($date_time)
    {
        $this->reminder_date_time = $date_time;
    }
    
    public function setReminderInterval($interval)
    {
        $this->reminder_interval = $interval;
    }
}