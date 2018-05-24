<?php

namespace FakerCar\Test\Provider\en_US;

use FakerCar\Provider\en_US\Car;

/**
 * @group Car
 */
class CarTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new Car($faker));
        $this->faker = $faker;
    }

    public function testPower()
    {
        $this->assertEquals(substr($this->faker->power(), -2, 2), 'HP');
    }

    public function testTorque()
    {
        $this->assertEquals(substr($this->faker->torque(), -5, 5), 'lb-ft');
    }
}
