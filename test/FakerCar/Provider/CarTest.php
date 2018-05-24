<?php

namespace FakerCar\Test\Provider;

use FakerCar\Provider\Car as BaseProvider;

class CarTest extends \PHPUnit\Framework\TestCase
{
    public function testVinReturnsValidVin()
    {
        $vin = BaseProvider::vin();
        $this->assertTrue(BaseProvider::validateVin($vin));
    }

    public function testModelYear()
    {
        $this->assertEquals(BaseProvider::modelYear(1980), 'A');
        $this->assertEquals(BaseProvider::modelYear(2000), 'Y');
        $this->assertEquals(BaseProvider::modelYear(2017), 'H');
        $this->assertEquals(BaseProvider::modelYear(2018), 'J');
        $this->assertEquals(BaseProvider::modelYear(2019), 'K');
    }

    public function testTransliterate()
    {
        $this->assertEquals(BaseProvider::transliterate('O'), 0);
        $this->assertEquals(BaseProvider::transliterate('A'), 1);
        $this->assertEquals(BaseProvider::transliterate('K'), 2);
    }
}
