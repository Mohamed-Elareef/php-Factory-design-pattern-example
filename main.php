<?php

$factory = new PetFactory();

$pet = $factory->getPet("dog", "Rex");
echo $pet->speak();  // Output: Woof!

$pet = $factory->getPet("cat", "Whiskers");
echo $pet->speak();  // Output: Meow!

?>
