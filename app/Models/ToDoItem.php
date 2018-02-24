<?php 

namespace App\Models;

class ToDoItem
{
    
    public $name;
    public $details;
    public $complete;
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setDetails($details)
    {
        $this->details = $details;
    }
    
    public function setComplete($complete)
    {
        $this->complete = $complete;
    }
}