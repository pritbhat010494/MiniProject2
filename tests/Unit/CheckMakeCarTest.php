<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CheckMakeCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCheckMakeCar()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertContains($car->Make, ["Honda", "Ford", "Toyota"]);
    }
}
