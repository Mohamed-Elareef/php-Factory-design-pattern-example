<?php

require_once 'PetFactory.php';

$factory = new PetFactory();

$pet = $factory->getPet("dog", "Rex");
echo $pet->speak(). "\n"; // Output: Woof!

$pet = $factory->getPet("cat", "Whiskers");
echo $pet->speak(). "\n"; // Output: Meow!


?>
