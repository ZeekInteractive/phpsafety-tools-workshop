<?php

class LintExample {
    public function __construct() {
        // Missing closing parenthesis
        echo "Hello, world!"
    }

    public function anotherFunction($param {
        // Missing closing parenthesis and semicolon
        echo $param

    // Missing opening brace
    public function yetAnotherFunction() {
            echo "This is another function.";
        } // Extra closing brace

    // Unterminated string
    public function brokenStringFunction() {
            echo "This string is broken;
    }

    // Invalid characters
    public function @@invalidName() {
        echo "This should not work.";
    }
}
