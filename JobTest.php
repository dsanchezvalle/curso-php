<?php

namespace App\Models;

use PHPUnit\Framework\TestCase;

class JobTest extends TestCase
{

    public function testDatabase()
    {
        // Make call to application...

        $this->assertDatabaseHas('jobs', [
            'title' => 'a',
        ]);
    }


}
