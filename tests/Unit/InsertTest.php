<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $user = new User();
        $user->name = 'Pritam';
        $user->email = 'clifford10@example.org';
        $user->password = 'pritbhat';
        $this->assertTrue($user->save());
        $this->assertTrue(true);
    }
}