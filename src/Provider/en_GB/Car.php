<?php

namespace FakerCar\Provider\en_GB;

class Car extends \FakerCar\Provider\Car
{
    /**
     * @link https://en.wikipedia.org/wiki/Car_classification
     */
    protected static $marketSegment = array(
        "Microcar", "Bubble car", "City car", "Supermini", "Small family car",
        "Large family car", "Compact executive car", "Executive car",
        "Luxury car", "Grand tourer", "Supercar", "Convertible", "Roadster",
        "Mini MPV", "Compact MPV", "Large MPV", "Van", "Minibus", "Mini 4x4",
        "Compact SUV", "Large 4x4", "Pick-up",
    );

    /**
     * @link https://www.globalcarsbrands.com/all-car-brands-list-and-logos/#uk
     */
    protected static $brandNames = array(
        "Aston Martin", "Bentley", "Berkeley", "Bond", "BAC", "Bristol",
        "Brooke", "Cooper", "Daimler", "De Lorean", "Jaguar", "Land Rover",
        "Lotus", "McLaren", "Mini", "Rolls-Royce", "Rover", "Trident",
        "Triumph", "Vauxhall",
    );

    protected static $torqueUnit = 'lb-ft';

    protected static $powerUnit = 'HP';
}
