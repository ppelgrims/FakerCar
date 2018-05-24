[![Build Status](https://travis-ci.org/ppelgrims/faker-car.svg?branch=master)](https://travis-ci.org/ppelgrims/faker-car)

# FakerCar

Car related data generation using [fzaninotto/Faker](https://github.com/fzaninotto/Faker)


## Installation

Add the FakerCar library to your `composer.json` file:

```sh
$ composer require ppelgrims/faker-car
```

## Usage

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \FakerCar\Provider\Car($faker));
$faker->addProvider(new \FakerCar\Provider\Color($faker));

// Generator
$faker->torque();        // 305 Nm
$faker->carModelName();  // A4
$faker->carColor();      // Frosty Black
```

## Formatters

### `FakerCar\Provider\Car`
    carBrandName()      // Audi
    carModelName()      // Golf GTi
    power()             // 65 Nm
    torque()            // 65 kW
    engineCapacity()    // 1.8 L
    vin($year = 1980)   // 5GZCZ43D13S812715
    fuelType()          // Hybrid
    marketSegmentName() // F-segment luxery cars

### `FakerCar\Provider\Color`
    carColor            // Frosty Black

## Localization

### `FakerCar\Provider\de_DE\Car`
    carBrandName()      // Volkswagen

### `FakerCar\Provider\fr_FR\Car`
    carBrandName()      // Renault

### `FakerCar\Provider\en_GB\Car`
    carBrandName()      // Jaguar
    marketSegmentName() // Executive car

### `FakerCar\Provider\en_US\Car`
    carBrandName()      // Cadillac
    power()             // 65 HP
    torque()            // 65 lb-ft
    marketSegmentName() // Full-size SUV

## Tests

```sh
$ make sniff test
```

## Contributing

Please see [contributing](CONTRIBUTING.md) for details.


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
