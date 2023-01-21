# Pet Factory

This is a PHP implementation of the Factory design pattern. The example demonstrates how to create a factory that can produce different types of pet objects (Dog and Cat) based on user input.

## Getting Started
These instructions will help you understand and run the code.

## Prerequisites
- PHP 7

## Installing
- No installation is necessary. Simply clone or download the repository.

## Running the code
You can run the code by executing the main.php file in your PHP environment.

```php
php main.php
```

The code will create a PetFactory object and use its getPet method to create a Dog and a Cat object. Each object will call its speak method and print the sound it makes.

## How it works
The PetFactory class is a factory that creates Dog and Cat objects. The getPet method is the factory method, which takes in a petType and a name and returns a new Dog or Cat object. The client code can use the factory to create a new pet object without having to know the exact class of the object that will be created.

## License
This project is licensed under the MIT License - see the LICENSE.md file for details.

## Acknowledgments
This example is for educational purposes only.

## Additional Note
Be aware that this is a simple example of factory design pattern and it could be implemented in different ways and in different languages.

