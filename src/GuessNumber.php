<?php

declare(strict_types = 1);

namespace JackFrost\GuessNumber;

class GuessNumber
{
    public function check(int $number): string
    {
        return $number == rand(0, 9) ? 'Yes!' : 'No..';
    }
}