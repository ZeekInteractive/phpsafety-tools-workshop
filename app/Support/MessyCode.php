<?php

namespace App\Support;
class MessyCode
{
    // Constant with non-uppercase name
    const badConst = 42;
    
    // Public fields
    public $publicField;
    
    // Short variable name
    private $a;
    
    // Unused field
    private $unusedField;

    // Excessive parameter list
    public function __construct($param1, $param2, $param3, $param4, $param5, $param6)
    {
        // Assignment inside condition
        if ($this->a = $param1) {
            echo "Bad practice";
        }
        
        // Nested if-else
        if ($param1 > $param2) {
            if ($param3 > $param4) {
                echo "Nested if";
            }
        } else {
            echo "Bad practice";
        }
    }

    // Long method
    public function veryLongMethod()
    {
        for ($i = 0; $i < 100; $i++) {
            // code
        }
        for ($i = 0; $i < 100; $i++) {
            // code
        }
        // ... (snip) ...
    }
    
    // Method with boolean flag
    public function methodWithFlag($flag)
    {
        if ($flag) {
            // do something
        } else {
            // do something else
        }
    }
    
    // Method with suppression
    /**
     * @SuppressWarnings(PHPMD)
     */
    public function suppressedWarnings()
    {
        // code
    }
    
    // Exit expression
    public function exitMethod()
    {
        exit('Exiting...');
    }

    // Eval expression
    public function evalMethod()
    {
        eval('$x = 1;');
    }

    // Goto statement
    public function gotoMethod()
    {
        start:
        goto end;
        end:
    }
}
