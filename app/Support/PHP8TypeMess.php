<?php

declare(strict_types=1);

namespace App\Support;

class PHP8TypeMess
{
    public function __construct(
        private string $name,
        private int|float $score,
        private array $data
    ) {
    }

    public function setName(string|null $name): void
    {
        $this->name = $name;
    }

    public function getName(): never
    {
        echo $this->name; // Wrong return type, should never return anything
    }

    public function setScore(mixed $score): void
    {
        if (is_string($score)) {
            $this->score = intval($score); // Potential type error, as string may not always convert cleanly
        } else {
            $this->score = $score;
        }
    }

    public function fetchData(string $key): int|string
    {
        return $this->data[$key]; // Possible undefined array key
    }

    public function processData(): array|false
    {
        $processed = [];
        foreach ($this->data as $key => $value) {
            $processed[$key] = strtoupper($value); // Assuming all array values are strings, which can cause issues
        }
        return $processed;
    }

    public function finalize(): static
    {
        return new self("New Name", 0, []); // Returning a new instance instead of static
    }

    public function getDetails(): static|array
    {
        if ($this->score > 50) {
            return $this; // Correct return type
        }
        return ["name" => $this->name, "score" => $this->score]; // Possible mix of return types
    }
}
