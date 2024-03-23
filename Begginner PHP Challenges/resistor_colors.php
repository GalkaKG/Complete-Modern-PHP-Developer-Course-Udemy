<?php

// 1. Create function for accepting the color as a string.
// 2. Create an array resistor colors with their relative numeric code
// 3. Return a numeric code based on the color's name

function colorCode($color){
    $colors = ['black','brown', 'red', 'orange','yellow', 'green', 'blue', 'violet', 'grey', 'white'];

    
    $indexOfColor = array_search($color, $colors);
    return $indexOfColor;

}