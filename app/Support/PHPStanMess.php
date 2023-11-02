<?php

namespace App\Support;

class PHPStanMess
{
    private $name;
    private $age;
    private $data = [];

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $agee; // Typo in property name
    }

    public function addToData($key, $value)
    {
        $this->dataa[$key] = $value; // Typo in property name
    }

    public function getFromData($key): string
    {
        return $this->data[$key];
    }

    public function manipulateData(): int
    {
        if ($this->name === "John") {
            return "John's data"; // Return type mismatch
        }

        $value = $this->data['nonexistent']; // Accessing undefined array key

        return strlen($value);
    }

    public function process(): void
    {
        echo $this->name;
        echo $this->age;

        if ($this->age > 20) {
            return "Over 20"; // Shouldn't return anything due to void
        }
    }

    public function compare(PHPStanMess $other): bool
    {
        return $this->name === $other->namee; // Typo in property access
    }

    public function calculate(float $number): float
    {
        return $number / "a"; // Invalid mathematical operation
    }

    public function analyze(): string
    {
        if (is_array($this->name)) {
            return $this->name[0]; // Invalid array access
        }

        return "Valid name";
    }

    public function finalize()
    {
        $item = new NonExistentClass(); // Non-existent class instantiation

        echo $item->someMethod(); // Calling a method on a non-existent class
    }

    public static function staticMess($input): string
    {
        if (self::$name === $input) { // Accessing non-static property statically
            return "Matched";
        }
        return "Not matched";
    }
}
