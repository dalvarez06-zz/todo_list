<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Reminder;
use DateTime;

class ReminderTest extends TestCase
{
    public function testReminderDateTimeSetterAndGetter()
    {
        $test = new Reminder;
        $test->setReminderDateTime(new DateTime("2018"));
        
        $this->assertEquals($test->reminder_date_time, new DateTime("2018"));
    }
    
    public function testReminderIntervalSetterAndGetter()
    {
        $test = new Reminder;
        $test->setReminderInterval("hourly");
        
        $this->assertEquals($test->reminder_interval, "hourly");
    }
}
