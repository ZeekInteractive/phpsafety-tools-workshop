<?php
namespace App\Support;

class CyclomaticComplexity {
    public function complexMethod($input1, $input2, $input3, $input4, $input5)
{
    if ($input1 > 10) {
        for ($i = 0; $i < $input1; $i++) {
            if ($i % 2 == 0) {
                echo "Even number: $i";
            } else {
                echo "Odd number: $i";
            }
        }
    } elseif ($input2 < 20) {
        while ($input2 > 0) {
            $input2--;
            if ($input2 % 3 == 0) {
                echo "Divisible by 3: $input2";
            }
        }
    }

    switch ($input3) {
        case 'A':
            echo "Case A";
            break;
        case 'B':
            echo "Case B";
            break;
        case 'C':
            echo "Case C";
            break;
        default:
            echo "Default case";
            break;
    }

    if ($input4 == 'string1') {
        echo "String 1 matched";
    } elseif ($input4 == 'string2') {
        echo "String 2 matched";
    } else {
        echo "No string matched";
    }

    for ($j = 0; $j < $input5; $j++) {
        if ($j % 5 == 0) {
            echo "Multiple of 5: $j";
        }
    }
}

}