<?php

namespace FakerCar\Provider;

class Car extends \Faker\Provider\Base
{
    const EBCDIC = "0123456789.ABCDEFGH..JKLMN.P.R..STUVWXYZ";
    const MODELYEAR = "ABCDEFGHJKLMNPRSTVWXY123456789";

    /**
     * @link https://en.wikipedia.org/wiki/Car_classification
     */
    protected static $marketSegmentNames = array(
        'A-segment mini cars', 'B-segment small cars', 'C-segment medium cars',
        'D-segment large cars', 'E-segment executive cars',
        'F-segment luxery cars', 'S-segment sports coupés',
        'M-segment multi purpose cars', 'J-segment sport utility cars',
    );

    protected static $carModelNames = array(
        "205 GTi", "5", "208", "3 Series", "308", "500 Abarth", "6 MPS", "607",
        "612 Scaglietti", "7 Series", "800", "911", "5008", "A4", "A8",
        "Agera R", "Aria", "Auris", "Avalon", "B-Max", "C3 Picasso", "C70",
        "CLS Shooting Brake", "Camaro", "Caravan", "Cervo", "Challenger",
        "Charger", "Charger", "Corsa", "Cortina", "Corvette", "DS5",
        "Discovery", "EVO", "Equinox", "Falcon", "Falcon", "Flyer",
        "Freelander", "GTO", "Golf", "Golf GTi", "Javalin", "Jetta", "LS",
        "Life", "M5", "MX-5", "Magnette", "Malibu", "Megane", "Mini", "Monaro",
        "Mondeo", "Move", "Note", "One", "Optima", "P1", "Pajero", "Panamera",
        "Panda", "Patriot", "Polo", "Qashqai", "Regal", "Road Runner", "S-Max",
        "S2000", "SC300", "SC400", "SRT-4", "Scorpio", "Scénic", "Sprinter",
        "Torino", "Transit", "Transporter", "Type C", "V8", "Veyron 16.4", "XF",
        "XF Sportbrake", "Zafira Tourer", "i40 Tourer"
    );

    /**
     *  @link https://www.globalcarsbrands.com/all-car-brands-list-and-logos
     */
    protected static $carBrandNames = array(
        'Acura', 'Alfa Romeo', 'Aston Martin', 'Audi', 'Bentley', 'BMW',
        'Bugatti', 'Buick', 'Cadillac', 'Chevrolet', 'Chrysler', 'Citroen',
        'Dodge', 'Ferrari', 'Fiat', 'Ford', 'Geely', 'General Motors', 'GMC',
        'Honda', 'Hyundai', 'Infiniti', 'Jaguar', 'Jeep', 'Kia', 'Koenigsegg',
        'Lamborghini', 'Land Rover', 'Lexus', 'Maserati', 'Mazda', 'McLaren',
        'Mercedes-Benz', 'Mini', 'Mitsubishi', 'Nissan', 'Pagani', 'Peugeot',
        'Porsche', 'Ram', 'Renault', 'Rolls Royce', 'Saab', 'Subaru', 'Suzuki',
        'Tata Motors', 'Tesla', 'Toyota', 'Volkswagen', 'Volvo'
    );

    protected static $engineCapacities = array(
        '1.0 L', '1.2 L', '1.5 L', '1.6 L', '1.8 L', '2 L', '3 L', '3.5 L', '3.8 L',
        '4 L', '5 L', '6 L', '8 L'
    );

    protected static $fuelTypes = array(
        "Bio Diesel", "CNG", "Diesel", "Electric", "Ethanol", "Gasoline",
        "H2", "Hybrid", "LPG", "Petrol"
    );

    protected static $torqueUnit = 'Nm';

    protected static $powerUnit = 'kW';

    public static function transliterate($c)
    {
        return stripos(self::EBCDIC, $c) % 10;
    }

    public static function checkDigit($vin)
    {
        $map = "0123456789X";
        $weights = "8765432X098765432";
        $sum = 0;
        for ($i=0; $i < 17; $i++) {
            $sum += self::transliterate(substr($vin, $i, 1))
            * stripos($map, substr($weights, $i, 1));
        }
        return substr($map, $sum % 11, 1);
    }

    public static function validateVin($vin)
    {
        if (strlen($vin) != 17) {
            return false;
        }
        return self::checkDigit($vin) == substr($vin, 8, 1);
    }

    public static function modelYear($year = 1980)
    {
        return substr(self::MODELYEAR, ($year-1980) % 30, 1);
    }

    public static function carBrandName()
    {
        return static::randomElement($carBrandNames);
    }

    public static function carModelName()
    {
        return static::randomElement($carModelNames);
    }

    public static function power()
    {
        return ltrim(static::numerify('### '.static::$powerUnit), 0);
    }

    public static function torque()
    {
        return ltrim(static::numerify('### '.static::$torqueUnit), 0);
    }

    public static function engineCapacity()
    {
        return static::randomElement(static::$engineCapacities);
    }

    /**
     * @link https://en.wikipedia.org/wiki/Vehicle_identification_number
     */
    public static function vin($year = 1980)
    {
        $modelYear = static::modelYear($year);
        $regex = "([a-hj-npr-z0-9]{8})_{$modelYear}([a-hj-npr-z0-9]{7})";
        $vin = static::regexify($regex);
        return str_replace('_', self::checkDigit($vin), $vin);
    }

    public static function fuelType()
    {
        return static::randomElement(static::$fuelTypes);
    }

    public static function marketSegmentName()
    {
        return static::randomElement(static::$marketSegmentNames);
    }
}
