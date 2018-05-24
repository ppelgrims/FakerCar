<?php

namespace FakerCar\Provider\en_US;

class Car extends \FakerCar\Provider\Car
{
    /**
     * @link https://en.wikipedia.org/wiki/Car_classification
     */
    protected static $marketSegmentNames = array(
        'Microcar', 'Economy car', 'Compact car', 'Mid-size car',
        'Entry-level luxury car', 'Full-size car', 'Mid-size luxury car',
        'Full-size luxury car', 'Grand tourer', 'Supercar', 'Convertible',
        'Roadster', 'MPV', 'Minivan', 'Cargo van', 'Passenger van', 'Mini SUV',
        'Compact SUV', 'Mid-size SUV', 'Full-size SUV', 'Mini pickup truck',
        'Mid-size pickup truck', 'Full-size pickup truck',
        'Heavy duty pickup truck', 'Special purpose vehicle'
    );

    /**
     * @link https://www.globalcarsbrands.com/all-car-brands-list-and-logos/#us
     */
    protected static $brandNames = array(
        "Chrysler", "Dodge", "Jeep", "Ram", "Ford", "Lincoln", "Buick",
        "Cadillac", "Chevrolet", "GMC", "GM", "Plymouth", "Pontiac",
        "Tesla", "Hennessey",
    );

    protected static $torqueUnit = 'lb-ft';

    protected static $powerUnit = 'HP';
}
