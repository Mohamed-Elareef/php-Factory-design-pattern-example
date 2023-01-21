<?php

class PetFactory
{
    public static function getPet($petType, $name)
    {
        if ($petType == "dog") {
            return new Dog($name);
        } elseif ($petType == "cat") {
            return new Cat($name);
        } else {
            return null;
        }
    }
}

?>
