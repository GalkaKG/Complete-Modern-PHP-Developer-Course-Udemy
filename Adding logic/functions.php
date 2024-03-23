<?php


// Strict Typing
// declare(strict_types=1); - with this the down code will trow error


// Type Hinting
function getStatus(int|float $paymentStatus, bool $showMessage = true) 
: ?string {
    $message = 'This is exercise';

    return $showMessage;
}

$result = getStatus(2);
var_dump($result);


