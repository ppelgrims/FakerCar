<?php

namespace FakerCar\Provider;

class Color extends \Faker\Provider\Color
{
    protected static $colorAdjectives = array(
        "Abyss", "Alaskan", "Antartic", "Anvil", "Carribean", "Colonial",
        "Cool", "Cosmic", "Deep", "Digital", "Electric", "Envy", "Frosty",
        "Fusion", "Glacier", "Horizon", "Hyper", "Ice", "Indi", "Ivory",
        "Kite", "Lava", "Lightning", "Mahogany", "Meadowfrost", "Metallic",
        "Midnight", "Mojave", "Moonstone", "Neptune", "Obsidian", "Oxygen",
        "Panther", "Pearl", "Platinum", "Plum", "Reef", "Rocks", "Salsa",
        "Signal", "Silver", "Solid", "Space", "Starlight", "Surf", "Thunder",
        "True", "Ultra", "Vitamin C"
    );

    public static function carColor()
    {
        return static::randomElement(static::$colorAdjectives)
         .' ' . static::randomElement(static::$allColorNames);
    }
}
