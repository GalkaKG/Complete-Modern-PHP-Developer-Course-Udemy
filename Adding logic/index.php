<?php

$paymentStatus = 2;

// Switch case
switch($paymentStatus) {
    case 1:
        var_dump('Success');
        break;
    case 2:
    case 3:
        var_dump('Pending');
        break;
    default:
    var_dump('Unknown');
}


// Match case
$message = match($paymentStatus) {
    1 => 'Success',
    2 => 'Denied',
    default => 'Unknown'
};
var_dump($message);


// If statement
$message2 = null;

if ($paymentStatus == 1) {
    $message2 = 'Success';
} else if ($paymentStatus == 2) {
    $message2 = 'Denied';
} else {
    $message2 = 'Unknown';
}

var_dump($message2);

