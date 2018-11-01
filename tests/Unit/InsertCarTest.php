<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car= new Car();
        $car->Year= '2000';
        $car->Model = 'Sedan';
        $car->Make = 'Toyota';
        $this->assertTrue($car->save());
        $this->assertTrue(true);
    }
}
