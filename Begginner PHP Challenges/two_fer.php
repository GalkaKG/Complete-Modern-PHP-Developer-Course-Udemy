<?php

declare(strict_types=1);

function twoFer(string $name = ''): string
{
     if ($name === "") {
        return "One for you, one for me.";
    }

    return "One for {$name}, one for me.";
}

twoFer('Alice');