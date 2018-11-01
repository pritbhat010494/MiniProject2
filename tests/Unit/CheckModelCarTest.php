<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CheckModelCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCheckModelCar()
    {
        $car = Car::inRandomOrder()->first();
        $model = (string)$car->Model;
        $this->assertInternalType("string", $model);
    }
}
