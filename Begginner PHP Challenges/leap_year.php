<?php

declare(strict_types=1);

function isLeap(int $year): bool
{
     if ($year % 100 ===0 and $year % 400 === 0) {
        return true;
    } else if ($year % 4 === 0 && $year % 100 !== 0) {
        return true;
    } else{
        return false;
    }
}
    