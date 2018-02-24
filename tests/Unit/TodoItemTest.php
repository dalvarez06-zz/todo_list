<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\ToDoItem;

class TodoItemTest extends TestCase
{
    public function testNameSetterAndGetter()
    {
        $test = new ToDoItem;
        $test->setName("test item");
        
        $this->assertEquals($test->name, "test item");
    }
    
    public function testDetailsSetterAndGetter()
    {
        $test = new ToDoItem;
        $test->setDetails("make sure I do all my tests pass before I continue");
        
        $this->assertEquals($test->details, "make sure I do all my tests pass before I continue");
    }
    
    public function testCompletedSetterAndGetter()
    {
        $test = new ToDoItem;
        $test->setComplete(true);
        
        $this->assertEquals($test->complete, true);
    }
}
