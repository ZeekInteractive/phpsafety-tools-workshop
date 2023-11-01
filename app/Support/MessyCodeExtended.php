<?php

namespace App\Support;

class MessyCodeExtended extends MessyCode
{
    // Method with a type hint but no return type hint
    public function getStringLength(string $string)
    {
        return strlen($string);
    }

    // Method with missing doc block
    public function add($a, $b)
    {
        return $a + $b;
    }

    // Method returning null for a string type hint
    public function possiblyNullString(): string
    {
        if (rand(0, 1) == 0) {
            return "A string";
        }
        return null; // This is a type violation
    }

    // Method using dynamic properties
    public function useDynamicProperty($name, $value)
    {
        $this->$name = $value;
    }

    // Method with too many returns
    public function manyReturns($input)
    {
        if ($input == 1) {
            return true;
        } elseif ($input == 2) {
            return "string";
        } elseif ($input == 3) {
            return 123;
        } else {
            return [];
        }
    }

    // Method with else after a return
    public function elseAfterReturn($flag)
    {
        if ($flag) {
            return true;
        } else {
            return false;
        }
    }

    // Method using deprecated function
    public function useDeprecated()
    {
        return split(',', 'a,b,c'); // split() is deprecated in favor of explode()
    }
}
