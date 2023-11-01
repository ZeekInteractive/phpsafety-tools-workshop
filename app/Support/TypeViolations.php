<?php

namespace App\Support;

class TypeViolations
{
    public function returnFloatInsteadOfInt(): int
    {
        return 3.14; // Returning float instead of int
    }

    public function returnStringInsteadOfInt(): int
    {
        return "12345"; // Returning string instead of int
    }

    public function returnArrayInsteadOfInt(): int
    {
        return [1, 2, 3]; // Returning array instead of int
    }

    public function calculateSum(float $a, float $b): int
    {
        return $a + $b; // Sum of two floats could be float, but we are hinting int
    }

    public function getLength(string $str): int
    {
        return (float) strlen($str); // Intentionally casting the result to float
    }
}
